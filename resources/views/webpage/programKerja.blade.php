<script defer src="{{ asset('js/animation/programkerja.js') }}"></script>
<x-layouts.user>
    <x-slot:title>Program Kerja</x-slot>

    <style>
        .animate-fade-in {
            opacity: 0;
            transform: translateY(100px);
            transition: all 0.6s ease-out;
        }

        .animate-show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <div class="font-[Poppins]">
        {{-- Awal --}}
        <div class="animate-fade-in relative font-poppins min-h-screen">
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
                <div class="w-full max-w-[900px] mx-auto relative">
                    <div class="px-4 sm:px-0">
                        <div class="w-full overflow-x-auto">
                            <ul
                                class="flex justify-center whitespace-nowrap border-b border-black text-center font-medium text-slate-400 text-[12px] sm:text-[16px] min-w-max">
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
            </div>
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
            </div>
        </div>
    </div>

</x-layouts.user>
