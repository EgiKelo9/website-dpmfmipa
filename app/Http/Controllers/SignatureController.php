<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use App\Models\Signature;
use App\Models\User;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;

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

        Signature::create([
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
            if ($signature->signed_file === null) {
                return redirect()->back()->with('status', 'Tanda tangan elektronik sedang diproses.');
            }

            return redirect()->back()->with([
                'signed_file' => $signature->signed_file,
                'nomor' => $signature->nomor,
                'id_lembaga' => $signature->id_lembaga,
                'status' => 'Tanda tangan elektronik telah diproses!'
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

    public function downloadFromPath(Request $request)
    {
        $path = $request->query('path');

        if (!$path) {
            return response()->json(['message' => 'Path tidak ditemukan.'], 400);
        }

        if (Storage::disk('public')->exists($path)) {
            $fullPath = Storage::disk('public')->path($path);
            $fileName = basename($path);

            return response()->download($fullPath, $fileName);
        } else {
            return response()->json(['message' => 'File tidak ditemukan.'], 404);
        }
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
            'quietzoneSize'        => 0,
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

    public function downloadPDF($nomor)
    {
        $subName = str_replace('_', '/', $nomor);
        $signature = Signature::where('nomor', $subName)->first();

        if ($signature && $signature->signed_file && Storage::disk('public')->exists($signature->signed_file)) {
            $fileContent = Storage::disk('public')->get($signature->signed_file);
            return response($fileContent, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="' . $subName . '_signed.pdf"');
        } else {
            return response()->json(['message' => 'File tidak ditemukan.'], 404);
        }
    }

    public function insertQRCodeToPDF($pdfPath, $qrCodePath, $outputPath, $symbol = '#')
    {
        try {
            $pdf = new Fpdi();
            $fullPdfPath = Storage::disk('public')->path($pdfPath);
            $fullQrPath = Storage::disk('public')->path($qrCodePath);

            if (!file_exists($fullPdfPath) || !file_exists($fullQrPath)) {
                return ['success' => false, 'message' => 'File tidak ditemukan.'];
            }

            $pageCount = $pdf->setSourceFile($fullPdfPath);
            $symbolFound = false;

            // Parse PDF untuk mendapatkan posisi text
            $parser = new \Smalot\PdfParser\Parser();
            $pdfParser = $parser->parseFile($fullPdfPath);
            $pages = $pdfParser->getPages();

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $templateId = $pdf->importPage($pageNo);
                $size = $pdf->getTemplateSize($templateId);

                $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
                $pdf->useTemplate($templateId);

                if (isset($pages[$pageNo - 1])) {
                    $page = $pages[$pageNo - 1];
                    $textDetails = $page->getDataTm();

                    // Cari posisi simbol #
                    $symbolPosition = null;
                    foreach ($textDetails as $textData) {
                        $text = isset($textData[1]) ? $textData[1] : '';

                        if (strpos($text, $symbol) !== false) {
                            $symbolFound = true;

                            // Extract koordinat dari Tm matrix
                            if (isset($textData[0]) && is_array($textData[0]) && count($textData[0]) >= 6) {
                                $symbolPosition = [
                                    'x' => $textData[0][4], // 4 = x coordinate
                                    'y' => $textData[0][5]  // 5 = y coordinate
                                ];
                                break;
                            }
                        }
                    }

                    // Jika simbol ditemukan, replace dengan QR code
                    if ($symbolPosition) {
                        $qrSize = 24; // ukuran dalam mm

                        // Konversi koordinat PDF points ke mm
                        $x = $symbolPosition['x'] * 0.352778;
                        $y = $size['height'] - ($symbolPosition['y'] * 0.352778) - $qrSize;

                        // Gambar kotak putih untuk menutupi simbol #
                        $pdf->SetFillColor(255, 255, 255);
                        $pdf->Rect($x - ($qrSize / 2.0), $y + ($qrSize / 2.0), $qrSize, $qrSize, 'F');

                        // Insert QR code di posisi simbol
                        $pdf->Image($fullQrPath, $x - ($qrSize / 2.0), $y + ($qrSize / 2.0), $qrSize, $qrSize, 'PNG');
                    }
                }
            }

            if (!$symbolFound) {
                return ['success' => false, 'message' => 'Simbol "' . $symbol . '" tidak ditemukan dalam PDF.'];
            }

            $fullOutputPath = Storage::disk('public')->path($outputPath);

            // Buat direktori jika belum ada
            $directory = dirname($fullOutputPath);
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $pdf->Output('F', $fullOutputPath);

            return ['success' => true, 'message' => 'Dokumen berhasil ditandatangani.', 'path' => $outputPath];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }

    public function signDocument($signatureId)
    {
        $signature = Signature::find($signatureId);

        if (!$signature) {
            return ['success' => false, 'message' => 'Signature tidak ditemukan.'];
        }

        // Generate QR Code jika belum ada
        if (!$signature->qr_code) {
            $qrCodePath = $this->generateQRCode($signature->unique_link, $signature->nomor);
            $signature->qr_code = $qrCodePath;
            $signature->save();
        } else {
            $qrCodePath = $signature->qr_code;
        }

        // Output path untuk signed document
        $outputPath = 'signed-file/' . pathinfo($signature->file, PATHINFO_FILENAME) . '_signed.pdf';

        // Insert QR Code ke PDF
        $result = $this->insertQRCodeToPDF($signature->file, $qrCodePath, $outputPath);

        if ($result['success']) {
            $signature->signed_file = $outputPath;
            $signature->accepted_at = now();
            $signature->save();
        }

        return $result;
    }

    public function unsignDocument($signatureId)
    {
        $signature = Signature::find($signatureId);

        if (!$signature) {
            return ['success' => false, 'message' => 'Signature tidak ditemukan.'];
        }

        // Hapus signed file jika ada
        if ($signature->signed_file && Storage::disk('public')->exists($signature->signed_file)) {
            Storage::disk('public')->delete($signature->signed_file);
        }

        // Reset fields
        $signature->signed_file = null;
        $signature->accepted_at = null;
        $signature->save();

        return ['success' => true, 'message' => 'Dokumen berhasil dibatalkan tanda tangannya.'];
    }
}
