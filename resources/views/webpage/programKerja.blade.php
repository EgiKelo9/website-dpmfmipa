<x-layouts.user>
    <x-slot:title>Program Kerja</x-slot>

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
        <div class="relative font-poppins min-h-screen">
            <div
                class="absolute w-full min-h-screen top-0 left-0 bg-cover bg-center bg-no-repeat bg-fixed bg-[url(/public/images/IMG_5599.jpg)]">
                <div
                    class="container mx-auto content-center flex md:flex-row flex-col items-center justify-center gap-6 lg:gap-12 px-12 min-h-screen">
                    <div class="flex flex-col gap-2 md:gap-3 xl:gap-4 items-center">
                        <img src="{{ asset('images/LOGO DPM.png') }}" alt="" class="w-24">
                        <h1
                            class="text-wrap text-xl sm:text-2xl lg:text-3xl xl:text-4xl text-center font-bold text-white">
                            PROGRAM KERJA DPM FMIPA 2025</h1>
                        <p
                            class="text-wrap text-sm sm:text-base lg:text-lg xl:text-xl text-center font-light text-white">
                            Fakultas Matematika dan Ilmu Pengetahuan Alam, memliki beberapa rancangan program kerja yang
                            telah di sesuaikan dan juga disempurnakan sesuai degan aturan yang ada. Adapun program kerja
                            sama
                            dan kolaborasi dengan berbagai pihak lembaga mahasiswa lainnya yang dilakukan untuk
                            memperluas jaringan dan memberikan kesempatan
                            pengembangan diri bagi anggota organisasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- INTI --}}
    <div class="animate-fade-in container mx-auto">
        <div class="">
            <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                INTI
            </h1>
            <h3 class=" mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
                DPM FMIPA
            </h3>
            <div class="flex flex-col items-center w-full">
                <div class="w-full max-w-[950px] mx-auto relative">
                    <div class="px-4 sm:px-0">
                        <div class="w-full overflow-x-auto">
                            <ul
                                class="flex whitespace-nowrap border-b border-black text-center font-medium text-slate-400 text-[12px] sm:text-[16px] min-w-max">
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab1">
                                        Rapat Kerja Gabungan
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer hover:text-black"
                                        data-tab="tab2">
                                        Sidang Pleno
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer hover:text-black"
                                        data-tab="tab3">
                                        Upgrading
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer hover:text-black"
                                        data-tab="tab4">
                                        Matur Piuning
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer hover:text-black"
                                        data-tab="tab5">
                                        Rapat Koordinasi
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a class="tab-link p-4 inline-block cursor-pointer hover:text-black"
                                        data-tab="tab6">
                                        Studi Banding
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-700 rounded-lg text-white w-full">
                    <div id="tab1" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                    <div id="tab2" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                    <div id="tab3" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                    <div id="tab4" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                    <div id="tab5" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                    <div id="tab6" class="tab-content hidden">
                        <x-judul></x-judul>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{-- KOMISI 1 --}}
    <div class="animate-fade-in container mx-auto">
        <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
            KOMISI I
        </h1>
        <h3 class=" mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
            Legislator
        </h3>

        <div class="flex flex-col items-center">
            <div class="sm:w-full sm:max-w-5xl mx-auto">
                <ul
                    class="flex justify-center gap-4 sm:gap-0 overflow-x-auto border-b border-black text-center font-medium text-slate-400 text-[10px] sm:text-[16px]">
                    <li class="w-[70px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab1">Perancangan
                            Seluruh Peraturan Lembaga</a>
                    </li>
                    <li class="w-[70px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab2">Pengecekan
                            Hasil Recruitment Panitia LM</a>
                    </li>
                    <li class="w-[70px] sm:w-auto text-center">
                        <a class="mt-2 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab3">100
                            Hari
                            Kinerja Lembaga</a>
                    </li>
                    <li class="w-[70px] sm:w-auto text-center">
                        <a class="mt-4 sm:mt-0 tab-link p-4 inline-block cursor-pointer hover:text-black"
                            data-tab="tab4">Musyawarah Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-700 rounded-lg text-white w-full">
                <div id="tab1" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab2" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab3" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab4" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{-- KOMISI 2 --}}
    <div class="animate-fade-in container mx-auto">
        <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
            KOMISI II
        </h1>
        <h3 class=" mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
            Advisor and Corrector
        </h3>
        <div class="flex flex-col items-center">
            <div class="sm:w-full sm:max-w-4xl mx-auto">
                <ul
                    class="flex justify-center gap-4 sm:gap-0 overflow-x-auto border-b border-black text-center font-medium text-slate-400 text-[13px] sm:text-[16px]">
                    <li class="w-[105px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab1">Perancangan
                            Peraturan Administrasi Lembaga</a>
                    </li>
                    <li class="w-[105px] sm:w-auto text-center">
                        <a class="mt-4 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab2">Pengawasan
                            Administratif</a>
                    </li>
                    <li class="w-[105px] sm:w-auto text-center">
                        <a class="mt-4 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab3">Pelantikan LM
                            FMIPA</a>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-700 rounded-lg text-white w-full">
                <div id="tab1" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab2" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab3" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    {{-- KOMISI 3 --}}
    <div class="animate-fade-in container mx-auto">
        <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
            KOMISI III
        </h1>
        <h3 class=" mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
            Aspirator
        </h3>
        <div class="flex flex-col items-center">
            <div class="sm:w-full sm:max-w-3xl mx-auto">
                <ul
                    class="flex justify-center gap-4 sm:gap-9 overflow-x-auto border-b border-black text-center font-medium text-slate-400 text-[13px] sm:text-[16px]">
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="mt-2 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab1">Hotline Mahasiswa</a>
                    </li>
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="mt-2 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab2">Kuisioner Kegiatan</a>
                    </li>
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab3">Jumpa
                            Dekanat FMIPA</a>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-700 rounded-lg text-white w-full">
                <div id="tab1" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab2" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab3" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
            </div>
        </div>
    </div>

    {{-- KOMISI 4 --}}
    <div class="animate-fade-in container mx-auto">
        <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
            KOMISI IV
        </h1>
        <h3 class="mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
            Supervisor and Reminder
        </h3>
        <div class="flex flex-col items-center">
            <div class="sm:w-full sm:max-w-xl mx-auto">
                <ul
                    class="flex justify-center gap-4 overflow-x-auto border-b border-black text-center font-medium text-slate-400 text-[13px] sm:text-[16px]">
                    <li class="w-[120px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab1">Pengawasan
                            Kegiatan LM FMIPA</a>
                    </li>
                    <li class="w-[120px] sm:w-auto text-center">
                        <a class=" mt-2 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab2">Pemilu Raya
                            Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-700 rounded-lg text-white w-full">
                <div id="tab1" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab2" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{-- KOMISI 5 --}}
    <div class="animate-fade-in container mx-auto">
        <h1 class="mt-[120px] lg:mt-50 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
            KOMISI V
        </h1>
        <h3 class=" mb-6 lg:mb-12 text-center font-semibold tracking-[0.05em] text-slate-500">
            Media and Public Relation
        </h3>
        <div class="flex flex-col items-center">
            <div class="sm:w-full sm:max-w-3xl mx-auto">
                <ul
                    class="flex justify-center gap-4 sm:gap-9 overflow-x-auto border-b border-black text-center font-medium text-slate-400 text-[13px] sm:text-[16px]">
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="tab-link p-4 inline-block cursor-pointer text-black" data-tab="tab1">Mengelola
                            Akun Media sosial</a>
                    </li>
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="mt-2 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab2">Design PDH dan Nametag</a>
                    </li>
                    <li class="w-[90px] sm:w-auto text-center">
                        <a class="mt-4 sm:mt-0 tab-link p-4 inline-block cursor-pointer text-black"
                            data-tab="tab3">Bakti sosial</a>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-700 rounded-lg text-white w-full">
                <div id="tab1" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab2" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <div id="tab3" class="tab-content hidden">
                    <x-judul></x-judul>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    {{-- script buat nampilin --}}
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

        // Tambahkan kode ini ke file JavaScript Anda
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelectorAll('.menu-button');
            let isOpen = false;

            // Toggle dropdown saat tombol menu diklik
            menuButton.forEach(menubtn => {
                const dropdownMenu = menubtn.nextElementSibling;
                menubtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    isOpen = !isOpen;

                    dropdownMenu.classList.toggle('hidden');
                    if (isOpen) {
                        // Tampilkan dropdown
                        // Tambahkan animasi
                        dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
                        dropdownMenu.classList.remove('opacity-0', 'scale-95');
                        // Update ARIA
                        menubtn.setAttribute('aria-expanded', 'true');
                    } else {
                        // Sembunyikan dropdown
                        closeDropdown();
                    }
                });
            })

            // Tutup dropdown saat mengklik di luar
            document.addEventListener('click', function(e) {
                if (isOpen && !dropdownMenu.contains(e.target)) {
                    closeDropdown();
                }
            });

            // Tutup dropdown saat item menu diklik
            const menuItems = dropdownMenu.querySelectorAll('[role="menuitem"]');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    closeDropdown();
                });
            });

            // Fungsi untuk menutup dropdown
            function closeDropdown() {
                isOpen = false;
                // Tambahkan animasi keluar
                dropdownMenu.classList.remove('opacity-100', 'scale-100');
                dropdownMenu.classList.add('opacity-0', 'scale-95');
                // Sembunyikan setelah animasi selesai
                setTimeout(() => {
                    dropdownMenu.classList.add('hidden');
                }, 100);
                // Update ARIA
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Get all carousels on the page
            const carousels = document.querySelectorAll('[data-carousel="slide"]');

            // Initialize each carousel
            carousels.forEach((carousel, carouselIndex) => {
                // Add unique ID to each carousel
                carousel.id = `carousel-${carouselIndex}`;

                const carouselItems = carousel.querySelectorAll('[data-carousel-item]');
                const prevButton = carousel.querySelector('[data-carousel-prev]');
                const nextButton = carousel.querySelector('[data-carousel-next]');
                const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');

                let currentSlide = 0;
                const totalSlides = carouselItems.length;

                // Initialize the carousel
                function initCarousel() {
                    carouselItems.forEach((item, index) => {
                        if (index === 0) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                    updateIndicators();
                }

                // Update indicators
                function updateIndicators() {
                    indicators.forEach((indicator, index) => {
                        if (index === currentSlide) {
                            indicator.setAttribute('aria-current', 'true');
                            indicator.classList.add('bg-gray-800');
                        } else {
                            indicator.setAttribute('aria-current', 'false');
                            indicator.classList.remove('bg-gray-800');
                        }
                    });
                }

                // Show specific slide
                function showSlide(index) {
                    // Add fade out effect
                    carouselItems[currentSlide].classList.add('opacity-0');
                    setTimeout(() => {
                        carouselItems[currentSlide].classList.add('hidden');

                        // Update current slide index
                        currentSlide = index;

                        // Show new slide with fade in effect
                        carouselItems[currentSlide].classList.remove('hidden');
                        setTimeout(() => {
                            carouselItems[currentSlide].classList.remove('opacity-0');
                        }, 50);

                        // Update indicators
                        updateIndicators();
                    }, 300);
                }

                // Previous slide function
                function previousSlide() {
                    const newIndex = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1;
                    showSlide(newIndex);
                }

                // Next slide function
                function nextSlide() {
                    const newIndex = currentSlide === totalSlides - 1 ? 0 : currentSlide + 1;
                    showSlide(newIndex);
                }

                // Add click events
                prevButton.addEventListener('click', previousSlide);
                nextButton.addEventListener('click', nextSlide);

                // Add indicator clicks
                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => showSlide(index));
                });

                // Add keyboard navigation when focused
                carousel.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        previousSlide();
                    } else if (e.key === 'ArrowRight') {
                        nextSlide();
                    }
                });

                // Auto-play functionality
                let autoplayInterval;

                function startAutoplay() {
                    autoplayInterval = setInterval(nextSlide, 5000);
                }

                function stopAutoplay() {
                    clearInterval(autoplayInterval);
                }

                // Start autoplay
                startAutoplay();

                // Pause on hover
                carousel.addEventListener('mouseenter', stopAutoplay);
                carousel.addEventListener('mouseleave', startAutoplay);

                // Initialize
                initCarousel();
            });
        });
    </script>
    <script src="{{ asset('js/animation/programkerja.js') }}"></script>
</x-layouts.user>