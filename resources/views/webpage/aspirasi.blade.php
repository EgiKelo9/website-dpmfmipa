@extends('layouts.user')

@section('title')
    Aspirasi
@endsection
{{-- BELOM NYAMBUNG DATABASENYA --}}
{{-- BELOM NYAMBUNG DATABASENYA --}}
{{-- BELOM NYAMBUNG DATABASENYA --}}
{{-- BELOM NYAMBUNG DATABASENYA --}}
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
        <form class="formulir xl:px-28 px-8 xl:py-10 py-5 flex flex-col gap-5">
            <h1 class="text-blue-800 font-bold text-3xl">ADA ASPIRASI YANG INGIN DISAMPAIKAN?</h1>
            <div class="h-1.5 bg-slate-300 rounded-full "></div>
            <div class="mt-3 flex xl:flex-row flex-col justify-between w-full gap-8">
                <div class="flex flex-1 flex-col gap-5">
                    <label class="text-blue-800 font-bold text-2xl ">PROGRAM STUDI</label>
                    <select name="prodi" class="block px-3 py-2 border rounded border-blue-500 text-slate-800">
                        <option value="" disabled selected>Pilih Program Studi</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                    @error('prodi')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-1 flex-col gap-5">
                    <label class="text-blue-800 font-bold text-2xl">KATEGORI</label>
                    <select name="kategori"class="block px-3 py-2 border rounded border-blue-500 text-slate-800">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="Akademik">Kategori Akademik</option>
                        <option value="Kemahasiswaan">Kategori Kemahasiswaan</option>
                        <option value="Administrasi">Kategori Administrasi</option>
                        <option value="Fasilitas">Kategori Fasilitas</option>
                        <option value="LembagaMahasiswa">Kategori Lembaga Mahasiswa</option>
                    </select>
                    @error('kategori')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-3">
                <label class="text-blue-800 font-bold text-2xl">DESKRIPSI</label>
                <div id="editor" class="h-96">
                </div>
            </div>
            <div class="flex justify-end">
                <button
                    class="konfirm w-full xl:w-auto bg-blue-800 text-white hover:bg-blue-900 mb-10 font-semibold text-xl px-20 py-2 rounded">KIRIM</button>
            </div>
            <h1 class="text-center text-sm text-slate-800">
                Ingin memberikan aspirasi selengkapnya?
                <button class=" bg-blue-800 rounded px-1">
                    <a href="https://forms.gle/oeyx2ff2Xnet85U9A" class="text-white font-semibold">Klik disini!</a>
                </button>
            </h1>
        </form>
    </div>
@endsection

@section('script')
    <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Underline,
            Font,
            Paragraph,
            List,
            ListProperties,
            Alignment
        } = CKEDITOR;

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Bold, Italic, Underline, Font, Paragraph, List, ListProperties, Alignment],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', 'underline', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'alignment', '|', 'indent', 'outdent', '|',
                    'numberedList', 'bulletedList'
                ],
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const formulir = document.querySelector('.formulir');
        formulir.addEventListener('submit', (e) => {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, send it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Sent!",
                        text: "Your aspiration has been sent.",
                        icon: "success"
                    });
                }
            });
        });
    </script>

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
@endsection
