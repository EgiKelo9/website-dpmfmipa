@props(['content'])
<div class="container mx-auto p-8">
    <div class="flex gap-12 snap-x w-full overflow-x-auto">
        <div
            class="flex flex-col mx-auto justify-center bg-blue-800 border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-blue-900 dark:border-blue-900 text-blue-200 dark:hover:bg-blue-900 w-[900px]">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class=" mt-6 mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">{{ $content->title }}</h5>
                <p class="mb-3 font-normal text-center text-white">{{ $content->subtitle }}</p>
                <div class="relative inline-block text-left ">
                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 menu-button"
                        aria-expanded="true" aria-haspopup="true">
                        <svg class="-mr-1 size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden overflow-hidden h-0 transition-all duration-300"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="overflow-y-auto max-h-[800px] [&::-webkit-scrollbar]:hidden sm:p-11 p-6">
                            <div class="" role="none">
                                <img src="{{ asset('images/gedung.jpg') }}" class="max-h-96 w-full object-cover">
                            </div>
                            <p class="mt-5 text-slate-500 text-justify text-[12px] sm:text-[16px]">
                                {{ $content->description }}
                            </p>
                            <h2 class="font-bold text-sky-900 text-[16px] sm:text-[26px]">Dokumentasi</h2>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 right-0 w-10 bg-gradient-to-l from-white via-white/50 to-transparent pointer-events-none">
                                </div>
                                <div
                                    class="mt-2 flex gap-4 overflow-x-auto p-1 sm:p-2 snap-x snap-mandatory scroll-smooth">
                                    <img src="{{ asset('images/gedung.jpg') }}"
                                        class="h-28 sm:h-48 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 snap-center">
                                    <img src="{{ asset('images/gedung.jpg') }}"
                                        class="h-28 sm:h-48 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 snap-center">
                                    <img src="{{ asset('images/gedung.jpg') }}"
                                        class="h-28 sm:h-48 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 snap-center">
                                    <img src="{{ asset('images/gedung.jpg') }}"
                                        class="h-28 sm:h-48 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 snap-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
