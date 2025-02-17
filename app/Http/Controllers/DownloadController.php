<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JadwalMonev;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Models\NotulensiMonev;
use App\Models\PenilaianMonev;
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
            $penilaian = PenilaianMonev::all();

            $filename = "Notulensi {$jadwal->name} {$proker->name}.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('notulensi-monev.docx');

            $timMonev = collect($notulensi->tim_monev)
                ->sort()
                ->values()
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
                'waktuMulai' => \Carbon\Carbon::parse($notulensi->start_time)->translatedFormat('H:i'),
                'waktuSelesai' => \Carbon\Carbon::parse($notulensi->end_time)->translatedFormat('H:i'),
                'panitiaHadir' => $notulensi->kehadiran,
                'totalPanitia' => $proker->jumlah_panitia,
                'agendaKegiatan' => rtrim(strip_tags(str_replace(array("<li>", "</li>"), array("-  ", "\n"), $notulensi->agenda)), "\n"),
            ]);

            for ($i = 1; $i <= $penilaian->count(); $i++) {
                $templateProcessor->setValues([
                    "aspek{$i}" => $penilaian[$i - 1]->aspek,
                    "kriteria{$i}" => $penilaian[$i - 1]->kriteria,
                ]);
            }

            $allScore = $notulensi->scores;
            for ($i = 1; $i <= $penilaian->count(); $i++) {
                for ($j = 1; $j <= $penilaian->count(); $j++) {
                    $templateProcessor->setValues([
                        "{$i}{$j}" => (intval($allScore[$i]) === $j) ? '✅' : ''
                    ]);
                }
            }

            $allDescription = $notulensi->descriptions;
            for ($i = 1; $i <= $penilaian->count(); $i++) {
                $templateProcessor->setValues([
                    "deskripsi{$i}" => $allDescription[$i] == "Belum ada penilaian yang ditambahkan." ? "" : $allDescription[$i]
                ]);
            }

            $allPhoto = $notulensi->photos;
            for ($i = 1; $i <= 10; $i++) {
                if (!isset($allPhoto[$i - 1])) {
                    $templateProcessor->setValues([
                        "dokum{$i}" => ""
                    ]);
                    continue;
                }
                $templateProcessor->setImageValue("dokum{$i}", [
                    'path' => public_path("storage/{$allPhoto[$i - 1]}"),
                    'width' => 295,
                    'height' => 220,
                    'ratio' => false
                ]);
            }

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
