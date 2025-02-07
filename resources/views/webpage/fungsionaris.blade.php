@extends('layouts.user')

@section('title')
    Fungsionaris
@endsection

@section('content')
    <style>
        .animate-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <div class="font-[Poppins]">
        {{-- Awal --}}
        <div class="relative font-poppins">
            <img src="{{ asset('images/IMG_5584 2.png') }}" alt="" class="w-full h-[750px] object-cover">
            <div class="bg-gradient-to-t from-white to-transparent absolute top-0 left-0 w-full h-full">
                <div class="flex xl:flex-row flex-col items-center justify-center gap-9 mt-28">
                    <img src="{{ asset('images/LOGO DPM.png') }}" alt=""
                        class="xl:w-[350px] xl:h-[350px] w-[250px] h-[250px]">
                    <div class="xl:flex flex-col gap-3 hidden">
                        <h1 class="text-3xl font-bold text-white">DEWAN PERWAKILAN MAHASISWA</h1>
                        <h1 class="text-3xl font-bold text-white">FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</h1>
                        <h1 class="text-3xl font-bold text-white">UNIVERSITAS UDAYANA</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- INTI --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">INTI DPM FMIPA</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/wulan@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Ketua Umum</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/nanda@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Ketua I</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/baraja@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Ketua II</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/andini@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Sekretaris I</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/ara@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Sekretaris II</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/riris@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Bendahara I</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/opink@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Bendahara II</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Inti DPM</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komisi 1 --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">KOMISI I</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/levi@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/adhel@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/tuayu@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/widhi@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/almira@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/gungjaya@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Legislator</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komisi 2 --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">KOMISI II</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/aila@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/liyang@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/eka@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/syifa@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/alya@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/teja@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/thoby@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Advisor and Corrector</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komisi 3 --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">KOMISI III</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/rama@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/kenny@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/gekmas@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/sandya@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/cindy@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/christien@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Aspirator</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komisi 4 --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">KOMISI IV</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/regita@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/anandia@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/satria@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/eriyani@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/nari@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/katarina@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/kirani@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/iren@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Supervisor and Reminder</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komisi 5 --}}
        <div class="animate-fade-in">
            <h1 class="mt-70 mb-10 text-center font-extrabold text-[50px] text-blue-900">KOMISI V</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/Willy.jpg') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/riky@2x.png') }}">
                        <h5 class="text-right text-[15px] font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/Arya@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/anjani@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/Kesha@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
                <div class="md:w-[30%] mx-auto flex justify-center">
                    <div class="w-45">
                        <img src="{{ asset('images/fungsionaris/reva@2x.png') }}">
                        <h5 class="text-right font-bold text-[#032B97]">Anggota Komisi</h5>
                        <h5 class="text-right text-[12px] text-[#032B97]">Media and Public Relation</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-15"></div>

    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".animate-fade-in");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate-show");
                }
            });
        }, {
            threshold: 0.2
        });

        elements.forEach(el => observer.observe(el));
    });
</script>
