<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO DPM.png') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
    @production
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
    <title>Lacak Pengajuan TTE | DPM FMIPA UNUD</title>
</head>

<body class="font-poppins bg-zinc-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-xl">
        <div class="bg-white text-black rounded-lg shadow-md px-4 py-6 space-y-2">
            <!-- Logo -->
            <div class="flex justify-center">
                <img src="{{ asset('images/LOGO DPM.png') }}" alt="DPM FMIPA UNUD" class="size-20">
            </div>

            <!-- Header -->
            <div class="text-center space-y-1 pb-4">
                <h1 class="font-bold text-lg">Lacak Pengajuan TTE</h1>
                <p class="font-normal text-base text-black/50">
                    Isi nomor surat untuk melacak pengajuan Tanda Tangan Elektronik
                </p>
                @if (session('status'))
                    <p class="font-normal text-base text-blue-700 mt-2">
                        {{ session('status') }}
                    </p>
                @endif
                @if (session('error'))
                    <p class="font-normal text-base text-red-500 mt-2">
                        {{ session('error') }}
                    </p>
                @endif
            </div>

            <!-- Formulir -->
            <form method="POST" action="{{ route('signature.search') }}" enctype="multipart/form-data"
                class="space-y-4 mx-4">
                @csrf
                <!-- Nomor Surat -->
                <div>
                    <label for="nomor" class="block font-medium text-sm mb-2">
                        Nomor Surat
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="nomor" placeholder="Masukkan Nomor Surat" required
                        class="rounded-md px-2.5 py-2 w-full border active:border-black text-sm placeholder:text-black/50" />
                </div>

                <!-- Lembaga Pemohon -->
                <div>
                    <label for="id_lembaga" class="block font-medium text-sm mb-2">
                        Lembaga Pemohon
                        <span class="text-red-500">*</span>
                    </label>
                    <select name="id_lembaga" id="id_lembaga" required
                        class="rounded-md px-2.5 py-2 w-full border active:border-black text-sm placeholder:text-black/50">
                        <option value="" disabled selected>Pilih Lembaga Pemohon</option>
                        @foreach ($lembagas as $lembaga)
                            <option value="{{ $lembaga->id }}">{{ $lembaga->name }} Universitas Udayana</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submitButton"
                    class="w-full rounded-md bg-blue-800 text-white hover:bg-blue-900 disabled:bg-blue-900 disabled:cursor-not-allowed my-4 py-2 font-semibold transition-colors">
                    Lacak TTE
                </button>
            </form>

            <!-- QR Code Display -->
            @if (session('qr_code'))
                <div class="mt-6 mx-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <h2 class="font-semibold text-center mb-4">QR Code Tanda Tangan Elektronik</h2>
                    <div class="flex flex-col items-center space-y-4">
                        <img src="{{ asset('storage/' . session('qr_code')) }}"
                            alt="QR Code {{ session('nomor') }}"
                            class="w-64 h-64 border-2 border-gray-300 rounded">
                        <a href="{{ asset('storage/' . session('qr_code')) }}"
                            download="QRCode-{{ session('nomor') }}.png"
                            class="px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                            Download QR Code
                        </a>
                    </div>
                </div>
            @endif

            <!-- Href -->
            <p class="text-black/75 text-base font-normal text-center pt-4">
                <span class="text-black/50">Belum melakukan pengajuan? </span>
                <a href="/signature/create" class="underline">Ajukan disini</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = document.getElementById('submitButton');

            form.addEventListener('submit', function(e) {
                submitButton.disabled = true;
            });
        });
    </script>
</body>

</html>
