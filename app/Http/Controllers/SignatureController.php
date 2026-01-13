<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use App\Models\Signature;
use App\Models\User;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SignatureController extends Controller
{
    public function create()
    {
        $lembagas = Lembaga::all();
        return view('webpage.signature.formTTE', compact(['lembagas']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'keperluan' => 'required|string',
            'id_lembaga' => 'required|exists:lembagas,id',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('signatures', 'public');
        } else {
            $filePath = null;
        }

        $unique_link = uniqid(env('APP_URL') . '/signature/', true);

        $signature = Signature::create([
            'nomor' => $request->input('nomor'),
            'unique_link' => $unique_link,
            'file' => $filePath,
            'keperluan' => $request->input('keperluan'),
            'id_user' => User::where('specifiedRole', 'Ketua')->first()->id,
            'id_lembaga' => $request->input('id_lembaga'),
        ]);

        return redirect()->back()->with('success', 'Permohonan Tanda Tangan Elektronik berhasil diajukan.');
    }

    public function search()
    {
        $lembagas = Lembaga::all();
        return view('webpage.signature.lacakTTE', compact(['lembagas']));
    }

    public function find(Request $request)
    {
        $request->validate([
            'nomor' => 'required|string|max:255',
            'id_lembaga' => 'required|exists:lembagas,id',
        ]);

        $signature = Signature::where('nomor', $request->input('nomor'))
            ->where('id_lembaga', $request->input('id_lembaga'))
            ->first();

        if ($signature) {
            if ($signature->qr_code === null) {
                return redirect()->back()->with('status', 'Tanda tangan elektronik sedang diproses.');
            }

            return redirect()->back()->with([
                'qr_code' => $signature->qr_code,
                'nomor' => $signature->nomor,
                'status' => 'QR Code berhasil ditemukan!'
            ]);
        } else {
            return redirect()->back()->with('error', 'Nomor surat tidak ditemukan.');
        }
    }

    public function show($unique_link)
    {
        $full_link = env('APP_URL') . '/signature/' . $unique_link;
        $signature = Signature::where('unique_link', $full_link)->first();

        if (!$signature) {
            return to_route('home');
        }

        return view('webpage.signature.verifikasiTTE', ['signature' => $signature]);
    }

    public function generateQRCode($unique_link, $nomor)
    {
        $options = new QROptions([
            'version'              => 7,
            'outputType'           => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'             => QRCode::ECC_H, // High error correction
            'scale'                => 10,
            'imageBase64'          => false,
            'imageTransparent'     => false,
            'quality'              => 100,
        ]);

        $qrcode = new QRCode($options);
        $qrCodeImage = $qrcode->render($unique_link);

        // Save to storage
        $subName = str_replace('/', '_', $nomor);
        $filename = 'qr-codes/' . $subName . '.png';
        Storage::disk('public')->put($filename, $qrCodeImage);

        return $filename;
    }

    public function downloadQRCode($nomor)
    {
        $filePath = 'qr-codes/' . $nomor . '.png';

        if (Storage::disk('public')->exists($filePath)) {
            $fileContent = Storage::disk('public')->get($filePath);
            return response($fileContent, 200)
                ->header('Content-Type', 'image/png')
                ->header('Content-Disposition', 'attachment; filename="' . $nomor . '.png"');
        } else {
            return response()->json(['message' => 'File tidak ditemukan.'], 404);
        }
    }
}
