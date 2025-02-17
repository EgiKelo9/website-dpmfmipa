<x-layouts.user>
    <x-slot:title>Beranda</x-slot>
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
            <img src="{{ asset('images/background-main.png') }}" alt="" class=" w-full object-cover min-h-screen">
            <div class="absolute top-0 left-0 w-full min-h-screen">
                <div class="animate-fade-in fade-in flex md:flex-row flex-col items-center justify-center gap-6 lg:gap-12 px-12 min-h-screen">
                    <img src="{{ asset('images/LOGO DPM.png') }}" alt=""
                        class="xl:w-96 xl:h-96 lg:w-80 lg:h-80 md:w-64 md:h-64 sm:w-56 sm:h-56 w-48 h-48">
                    <div class="flex flex-col gap-2 md:gap-3 xl:gap-4">
                        <h1
                            class="text-wrap text-xl sm:text-2xl lg:text-3xl xl:text-4xl text-center md:text-left font-bold text-white">
                            DEWAN PERWAKILAN MAHASISWA</h1>
                        <h1
                            class="text-wrap text-xl sm:text-2xl lg:text-3xl xl:text-4xl text-center md:text-left font-bold text-white">
                            FAKULTAS MATEMATIKA DAN<br>ILMU PENGETAHUAN ALAM</h1>
                        <h1
                            class="text-wrap text-xl sm:text-2xl lg:text-3xl xl:text-4xl text-center md:text-left font-bold text-white">
                            UNIVERSITAS UDAYANA</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Arti Parlemen --}}
        <h1
            class="animate-fade-in fade-in mt-8 mb-6 md:mt-12 md:mb-8 xl:mt-16 xl:mb-10 text-center font-extrabold text-2xl sm:text-3xl lg:text-4xl text-blue-900">
            PARLEMEN</h1>
        <div class="animate-fade-in fade-in container mx-auto content-center px-8 sm:px-12 lg:px-24">
            <div class="flex flex-col md:flex-row gap-5 items-center">
                <div class="">
                    <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full xl:w-[90%] rounded-lg">
                </div>
                <div class="">
                    <p class="text-base lg:text-lg font-medium text-justify text-slate-800">
                        Nama parlemen ini terinspirasi dari bahasa Sansekerta, dimana
                        <span class="italic font-extrabold">vikasa</span> berarti perkembangan atau pertumbuhan, dan
                        <span class="italic font-extrabold">samyukta</span> bermakna gabungan atau kolaborasi. Filosofi
                        ini mencerminkan visi dan misi DPM FMIPA untuk terus berkembang ke arah yang lebih baik melalui
                        sinergi dan kerja sama dengan berbagai lembaga mahasiswa.
                    </p>
                </div>
            </div>
        </div>
        {{-- Visi --}}
        <h1
            class="animate-fade-in fade-in mt-8 mb-6 md:mt-12 md:mb-8 xl:mt-16 xl:mb-10 text-center font-extrabold text-2xl sm:text-3xl lg:text-4xl text-blue-900">
            VISI</h1>
        <div class="animate-fade-in fade-in container mx-auto content-center px-8 sm:px-12 lg:px-24">
            <p class="text-lg lg:text-xl hidden xl:block font-medium text-center text-slate-800">
                Mewujudkan DPM FMIPA yang responsif dan berintegritas sebagai badan legislatif
                <br>untuk menciptakan lingkungan yang kondusif dan inklusif.
            </p>
            <p class="text-lg lg:text-xl block xl:hidden font-medium text-center text-slate-800">
                Mewujudkan DPM FMIPA yang responsif dan berintegritas sebagai badan legislatif
                untuk menciptakan lingkungan yang kondusif dan inklusif.
            </p>
        </div>
        {{-- Misi --}}
        <h1
            class="animate-fade-in fade-in mt-8 mb-6 md:mt-12 md:mb-8 xl:mt-16 xl:mb-10 text-center font-extrabold text-2xl sm:text-3xl lg:text-4xl text-blue-900">
            MISI</h1>
        <div class="animate-fade-in fade-in container mx-auto content-center px-8 sm:px-12 lg:px-24">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 w-full gap-8">
                <div
                    class="bg-zinc-50 shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform duration-300">
                    <span class="text-2xl sm:text-3xl font-bold text-blue-900">1</span>
                    <p class="mt-4 text-slate-800">Meningkatkan kinerja DPM sebagai badan legislatif proaktif dan
                        aspiratif sesuai dengan AD-ART dan GBHK Lembaga Mahasiswa Fakultas MIPA.</p>
                </div>
                <div
                    class="bg-zinc-50 shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform duration-300">
                    <span class="text-2xl sm:text-3xl font-bold text-blue-900">2</span>
                    <p class="mt-4 text-slate-800">Memperkuat kolaborasi dan sinergi antar Lembaga Mahasiswa dengan
                        pihak internal maupun eksternal lingkungan Fakultas MIPA.</p>
                </div>
                <div
                    class="bg-zinc-50 shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform duration-300">
                    <span class="text-2xl sm:text-3xl font-bold text-blue-900">3</span>
                    <p class="mt-4 text-slate-800">Mengoptimalkan pengawasan dan koordinasi berkelanjutan terhadap
                        kinerja lembaga mahasiswa di lingkungan Fakultas MIPA.</p>
                </div>
                <div
                    class="bg-zinc-50 shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform duration-300">
                    <span class="text-2xl sm:text-3xl font-bold text-blue-900">4</span>
                    <p class="mt-4 text-slate-800">Mewujudkan keanggotaan DPM yang aktif dan selaras dengan prinsip
                        kekeluargaan.</p>
                </div>
            </div>
        </div>
        {{-- Fungsionaris --}}
        <div class="mt-16 md:mt-24">
            <div class="pt-40 pb-32 relative">
                <div
                    class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat bg-fixed bg-[url(/public/images/IMG_5599.jpg)]">
                </div>
                <div class="animate-fade-in fade-in items-center text-center justify-center mx-8">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center relative">FUNGSIONARIS DPM FMIPA
                        2025</h1>
                    <a href="/fungsionaris" class="text-white text-base sm:text-xl text-center relative">Lihat lebih
                        lengkap ></a>
                </div>
            </div>
        </div>
        {{-- Program Kerja --}}
        <div class="animate-fade-in fade-in container mx-auto content-center px-8 lg:px-16">
            <h1
                class="mt-8 mb-6 md:mt-12 md:mb-8 xl:mt-16 xl:mb-10 text-center font-extrabold text-2xl sm:text-3xl lg:text-4xl text-blue-900">
                PROGRAM KERJA</h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 sm:gap-6 lg:gap-8 mt-10">
                <div class="relative col-span-1 hover:scale-[102.5%] transition-transform duration-300">
                    <img src="{{ asset('images/vikasasamyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                    </div>
                    <div class="absolute right-0 left-0 bottom-4 xl:bottom-6">
                        <h1
                            class="text-lg sm:text-base md:text-lg lg:text-xl font-semibold text-white truncate mx-4 xl:mx-6">
                            Rapat Kerja gabungan LM FMIPA 2025</h1>
                        <h1
                            class="text-base sm:text-sm md:text-base text-white font-light truncate mt-0.5 lg:mt-1 mx-4 xl:mx-6">
                            Selengkapnya ></h1>
                    </div>
                </div>
                <div class="relative col-span-1 hover:scale-[102.5%] transition-transform duration-300">
                    <img src="{{ asset('images/vikasasamyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                    </div>
                    <div class="absolute right-0 left-0 bottom-4 xl:bottom-6">
                        <h1
                            class="text-lg sm:text-base md:text-lg lg:text-xl font-semibold text-white truncate mx-4 xl:mx-6">
                            Sidang Pleno DPM FMIPA 2025</h1>
                        <h1
                            class="text-base sm:text-sm md:text-base text-white font-light truncate mt-0.5 lg:mt-1 mx-4 xl:mx-6">
                            Selengkapnya ></h1>
                    </div>
                </div>
                <div class="relative col-span-1 hover:scale-[102.5%] transition-transform duration-300">
                    <img src="{{ asset('images/vikasasamyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                    </div>
                    <div class="absolute right-0 left-0 bottom-4 xl:bottom-6">
                        <h1
                            class="text-lg sm:text-base md:text-lg lg:text-xl font-semibold text-white truncate mx-4 xl:mx-6">
                            Upgrading DPM FMIPA 2025</h1>
                        <h1
                            class="text-base sm:text-sm md:text-base text-white font-light truncate mt-0.5 lg:mt-1 mx-4 xl:mx-6">
                            Selengkapnya ></h1>
                    </div>
                </div>
            </div>
            <h1 class="text-lg md:text-xl mt-4 sm:mt-6 lg:mt-8 text-center font-medium no-underline">
                <a href="/program-kerja" class="text-slate-900 hover:text-slate-500">Lihat lebih lanjut ></a>
            </h1>
        </div>
        {{-- Aspirasi --}}
        <div class="my-20">
            <div class="pt-40 pb-32 relative">
                <div
                    class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat bg-fixed bg-[url(/public/images/gedung.png)]">
                </div>
                <div class="animate-fade-in fade-in items-center text-center justify-center">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center relative">SAMPAIKAN ASPIRASIMU!
                    </h1>
                    <a href="/aspirasi" class="text-white text-base sm:text-xl text-center relative">Lihat lebih lengkap
                        ></a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/animation/fungsionaris.js') }}"></script>
</x-layouts.user>
