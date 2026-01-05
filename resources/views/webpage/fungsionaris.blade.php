<x-layouts.user>
    <x-slot:title>Fungsionaris</x-slot>
    <style>
        @keyframes appear {
            from {
                opacity: 0;
                scale: 0.9;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                scale: 1;
                transform: translateY(0);
            }
        }
        .fade-in {
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0 cover 30%;
        }
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
        <div class="relative font-poppins min-h-[450px] sm:min-h-[500px] lg:min-h-[600px]">
            <img src="{{ asset('images/background-main.png') }}" alt="" class="w-full object-cover min-h-screen">
            <div class="absolute top-0 left-0 w-full min-h-screen">
                <div class="animate-fade-in fade-in container mx-auto content-center flex md:flex-row flex-col items-center justify-center gap-6 lg:gap-12 px-12 min-h-screen">
                    <div class="flex flex-col gap-2 md:gap-3 xl:gap-4 items-center">
                        <img src="{{ asset('images/LOGO DPM.png') }}" alt="" class="w-24">
                        <h1
                            class="text-wrap text-xl sm:text-2xl lg:text-3xl xl:text-4xl text-center font-bold text-white">
                            FUNGSIONARIS DPM FMIPA 2025</h1>
                        <p
                            class="text-wrap text-sm sm:text-base lg:text-lg xl:text-xl text-center font-light text-white">
                            Saatnya kita, sebagai mahasiswa, bergerak dan menyuarakan aspirasi kita untuk masa depan yang gemilang bagi FMIPA dan Udayana. Dengan bersatu dan bergerak bersama, suara kita akan menjadi kekuatan yang mampu mendorong perubahan positif untuk menciptakan lingkungan akademik yang lebih baik dan prestasi yang membanggakan. Melalui semangat kebersamaan dan tekad yang kuat, kita dapat mewujudkan visi FMIPA dan Udayana sebagai institusi pendidikan yang unggul dan berdaya saing di tingkat nasional maupun internasional.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- INTI --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">INTI</h1>
            <h3 class="mt-1 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-base lg:text-lg text-slate-500">DPM
                FMIPA</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/wulan@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Ketua Umum</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/nanda@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Ketua I</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/baraja@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Ketua II</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/andini@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Sekretaris I</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/ara@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Sekretaris II</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/riris@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Bendahara I</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/opink@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Bendahara II</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Inti DPM</h5>
                </div>
            </div>
        </div>
        {{-- Komisi 1 --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">KOMISI I
            </h1>
            <h3 class="mt-1 sm:mt-1.5 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-slate-500">Legislator</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/levi@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/adhel@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/tuayu@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/widhi@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/almira@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/gungjaya@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Legislator</h5>
                </div>
            </div>
        </div>
        {{-- Komisi 2 --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">KOMISI II
            </h1>
            <h3 class="mt-1 sm:mt-1.5 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-slate-500">Advisor &
                Corrector</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/aila@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/liyang@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/eka@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/syifa@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/alya@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/teja@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/thoby@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Advisor & Corrector</h5>
                </div>
            </div>
        </div>
        {{-- Komisi 3 --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">KOMISI III
            </h1>
            <h3 class="mt-1 sm:mt-1.5 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-slate-500">Aspirator</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/rama@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/kenny@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/gekmas@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/sandya@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/cindy@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/christien@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Aspirator</h5>
                </div>
            </div>
        </div>
        {{-- Komisi 4 --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">KOMISI IV
            </h1>
            <h3 class="mt-1 sm:mt-1.5 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-slate-500">Supervisor and
                Reminder</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/regita@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/anandia@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/satria@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/eriyani@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/nari@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/katarina@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/kirani@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/iren@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Supervisor & Reminder</h5>
                </div>
            </div>
        </div>
        {{-- Komisi 5 --}}
        <div class="animate-fade-in pb-8">
            <h1 class="mt-8 md:mt-12 xl:mt-16 text-center font-extrabold text-3xl lg:text-4xl text-blue-900">KOMISI V
            </h1>
            <h3 class="mt-1 sm:mt-1.5 mb-6 md:mb-8 xl:md-10 text-center font-semibold text-slate-500">Media and Public
                Relation</h3>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/Willy.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/riky@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Wakil Kepala Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/Arya@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/anjani@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/Kesha@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
                <div class="w-48 mx-auto animate-fade-in fade-in flex flex-col items-center mb-6 md:mb-4 lg:mb-6">
                    <div class="w-40 md:w-32 lg:w-40 mb-2">
                        <img src="{{ asset('images/fungsionaris/reva@2x.webp') }}">
                    </div>
                    <h5 class="text-lg md:text-base lg:text-lg font-bold text-[#032B97]">Anggota Komisi</h5>
                    <h5 class="text-base md:text-sm lg:text-base text-[#032B97]">Media & Public Relation</h5>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/animation/fungsionaris.js') }}"></script>
    </div>
</x-layouts.user>
