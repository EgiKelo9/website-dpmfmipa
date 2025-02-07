<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JadwalMonev;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Models\NotulensiMonev;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function downloadNotulensi(Request $request)
    {
        if ($request->id) {
            $notulensiId = $request->id;
            $notulensi = NotulensiMonev::find($notulensiId);
            $jadwal = JadwalMonev::find($notulensi->id_jadwal);
            $proker = ProgramKerja::find($jadwal->id_proker);

            $filename = "Notulensi {$jadwal->name} {$proker->name}.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('notulensi-monev.docx');

            $timMonev = collect($notulensi->tim_monev)
                ->map(function($idUser, $index) {
                    $user = User::find(intval($idUser));
                    return ($index + 1) . ". {$user->name} ({$user->specifiedRole})";
                })
                ->join("\n");

            $templateProcessor->setValues([
                'jadwalKegiatan' => strtoupper($jadwal->name),
                'programKerja' => strtoupper($proker->name),
                'timMonev' => $timMonev,
                'tanggalKegiatan' => \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, j F Y'),
                'waktuMulai' => \Carbon\Carbon::parse($jadwal->start_time)->translatedFormat('H:i'),
                'waktuSelesai' => \Carbon\Carbon::parse($jadwal->end_time)->translatedFormat('H:i'),
                'panitiaHadir' => $notulensi->kehadiran,
                'totalPanitia' => $proker->jumlah_panitia,
                'agendaKegiatan' => strip_tags(str_replace(array("<li>", "</li>"), array("-  ", "\n"), $notulensi->agenda)),
            ]);

            $templateProcessor->saveAs("storage/notulensi-monev/{$filename}");
            $filePath = public_path("storage/notulensi-monev/{$filename}");

            return response()->download($filePath, $filename, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'Content-Disposition' => "attachment; filename=\"{$filename}\""
            ]);
            // return redirect()->back();
        }
    }
}
