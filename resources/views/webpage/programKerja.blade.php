@extends('layouts.user')

@section('title')
    programKerja
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

        <div class="animate-fade-in">
            <h1
                class="mt-[60px] mb-6 lg:mt-[200px] lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                PROGRAM KERJA</h1>

            {{-- INTI --}}
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                INTI</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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

        {{-- KOMISI 1 --}}
        <div class="animate-fade-in">
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                KOMISI I</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden druation-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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

        {{-- KOMISI II --}}
        <div class="animate-fade-in">
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                KOMISI II</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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

        {{-- KOMISI III --}}
        <div class="animate-fade-in">
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                KOMISI III</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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

        {{-- KOMISI IV --}}
        <div class="animate-fade-in">
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                KOMISI IV</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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

        {{-- KOMISI V --}}
        <div class="animate-fade-in mt-20">
            <h1
                class="mt-[120px] mb-6 lg:mt-50 lg:mb-12 text-center font-extrabold text-[30px] lg:text-[50px] text-blue-900">
                KOMISI V</h1>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-judul></x-judul>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#000] group-hover:bg-[#737373] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
    @endsection

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

                    // dropdownMenu.classList.toggle('hidden');
                    if (isOpen) {
                        // Tampilkan dropdown
                        // Tambahkan animasi
                        dropdownMenu.classList.remove('h-0');
                        dropdownMenu.classList.add('h-[800px]');
                        // dropdownMenu.style.height = dropdownMenu.offsetHeight + 'px';
                        // dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
                        dropdownMenu.classList.remove('opacity-0', 'scale-95');
                        // Update ARIA
                        menubtn.setAttribute('aria-expanded', 'true');
                    } else {
                        // Sembunyikan dropdown
                        // closeDropdown();
                        dropdownMenu.classList.remove('h-[800px]');
                        dropdownMenu.classList.add('h-0');
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
                // setTimeout(() => {
                //     dropdownMenu.classList.add('hidden');
                // }, 100);
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
