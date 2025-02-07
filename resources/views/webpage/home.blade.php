@extends('layouts.user')

@section('title')
    Beranda
@endsection

@section('content')
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

        {{-- Arti Parlemen --}}
        <h1 class="mt-30 mb-12 text-center font-extrabold text-4xl text-blue-900">PARLEMEN</h1>
        <div class="container px-28 content-center">
            <div class="flex flex-col md:flex-row gap-5 items-center">
                <div class="">
                    <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-[90%] rounded-lg">
                </div>
                <div class="">
                    <p class="text-lg font-medium text-justify text-slate-800">
                        Nama parlemen ini terinspirasi dari bahasa Sansekerta, dimana
                        <span class="italic font-extrabold">vikasa</span> berarti perkembangan atau pertumbuhan, dan
                        <span class="italic font-extrabold">samyukta</span> bermakna gabungan atau kolaborasi. Filosofi ini mencerminkan visi dan misi DPM FMIPA untuk terus berkembang ke arah yang lebih baik melalui sinergi dan kerja sama dengan berbagai lembaga mahasiswa.
                    </p>
                </div>
            </div>
        </div>

        <div class="container flex flex-row gap-12 mx-auto px-28">
            {{-- Visi --}}
            <div class="container mx-auto p-8 text-center">
                <h1 class="mt-30 mb-12 font-extrabold text-4xl text-blue-900">VISI</h1>
                <p class="text-lg text-justify text-slate-800 font-medium">
                    Mewujudkan DPM FMIPA yang responsif dan berintegritas sebagai badan legislatif untuk
                    menciptakan lingkungan yang kondusif dan inklusif.</p>
            </div>
    
            {{-- Misi --}}
            <div class="container mx-auto p-8 text-center">
                <h1 class="mt-30 mb-12 font-extrabold text-4xl text-blue-900">MISI</h1>
                <ol class=" list-disc text-lg text-justify text-slate-800 font-medium">
                    <li>Meningkatkan kinerja DPM sebagai badan legislatif proaktif dan aspiratif sesuai dengan AD-ART dan GBHK
                        Lembaga Mahasiswa Fakultas MIPA.</li>
                    <li>Memperkuat kolaborasi dan sinergi antar Lembaga Mahasiswa dengan pihak internal maupun eksternal
                        lingkungan Fakultas MIPA. </li>
                    <li>Mengoptimalkan pengawasan dan koordinasi berkelanjutan terhadap kinerja lembaga mahasiswa di lingkungan
                        Fakultas MIPA.</li>
                    <li>Mewujudkan keanggotaan DPM yang aktif dan selaras dengan prinsip kekeluargaan. </li>
                </ol>
            </div>
        </div>


        {{-- Fungsionaris --}}
        <div class="mt-40">
            <div class="pt-40 pb-32 relative">
                <div
                    class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed bg-[url(/public/images/IMG_5599.jpg)]">
                </div>
                <div class="items-center text-center justify-center">
                    <h1 class="text-white text-4xl font-bold text-center relative">FUNGSIONARIS DPM FMIPA 2025</h1>
                    <a href="/fungsionaris" class="text-white text-xl text-center relative">Lihat lebih lengkap ></a>
                </div>
            </div>
        </div>

        {{-- Program Kerja --}}
        <div class="container mx-auto p-8 content-center">
            <h1 class="mt-40 mb-7 font-extrabold text-4xl text-center text-blue-900">PROGRAM KERJA</h1>
            <div class="flex flex-col md:flex-row gap-12 mt-10">
                <div class="relative">
                    <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                        <h1 class="text-xl font-bold text-white truncate mt-70 ml-7">Rapat Kerja gabungan LM FMIPA 2025</h1>
                        <h1 class=" text-white truncate mt-2 ml-7">Lihat Selengkapnya ></h1>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                        <h1 class="text-xl font-bold text-white truncate mt-70 ml-7">Sidang Pleno DPM FMIPA 2025</h1>
                        <h1 class=" text-white truncate mt-2 ml-7">Lihat Selengkapnya ></h1>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full object-cover">
                    <div class="absolute right-0 top-0 left-0 bottom-0 bg-gradient-to-t from-sky-950 to-transparent">
                        <h1 class="text-xl font-bold text-white truncate mt-70 ml-7">Upgrading DPM FMIPA 2025</h1>
                        <h1 class=" text-white truncate mt-2 ml-7">Lihat Selengkapnya ></h1>
                    </div>
                </div>
                {{-- <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full rounded-lg mix-blend-overlay">
                <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full rounded-lg mix-blend-overlay">
                <img src="{{ asset('images/vikasa samyukta.jpg') }}" class="w-full rounded-lg mix-blend-overlay"> --}}
            </div>
            <h1 class="text-xl mt-20 text-center">Lihat lebih lanjut ></h1>
        </div>

        {{-- Aspirasi --}}
        <div class="mt-40 mb-20">
            <div class="pt-40 pb-32 relative">
                <div
                    class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-50 bg-fixed bg-[url(/public/images/gedung.jpg)]">
                </div>
                <div class="items-center text-center justify-center">
                    <h1 class="text-slate-800 text-4xl font-bold text-center relative">SAMPAIKAN ASPIRASIMU!</h1>
                    <a href="/aspirasi" class="text-slate-800 text-xl text-center relative">Lihat lebih lengkap ></a>
                </div>
            </div>
        </div>

    </div>
@endsection
