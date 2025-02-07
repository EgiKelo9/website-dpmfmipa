<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>DPM FMIPA UNUD</title>
</head>
<body class="font-poppins min-h-screen flex flex-col justify-between">
    <div>
        <nav class="navbar px-8 xl:px-16 py-4 flex flex-row justify-between z-50 xl:shadow-md sticky top-0 transition duration-300">
            <a href="#" class="flex gap-3 items-center">
                <img src="{{asset('images/LOGO DPM.png')}}" class="h-11 w-11" alt="">
                <div class="gap-2 flex">
                    <h1 class="text-2xl font-bold hidden xl:block text-blue-900 text-shadow">DPM</h1>
                    <h1 class="text-2xl font-bold hidden xl:block text-slate-800">FMIPA</h1>
                </div>
            </a>
            <div class="navbar-nav gap-3 xl:gap-6 pb-4 xl:py-0 xl:items-center absolute top-full left-0 right-0 flex-col px-6 bg-inherit xl:bg-transparent shadow-md xl:static xl:flex-row xl:shadow-none">
                <a href="/"
                    @class(['px-3 py-1.5 font-medium rounded-lg text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('/')])>Beranda</a>

                <a href="/fungsionaris"
                    @class(['px-3 py-1.5 font-medium rounded-lg text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('fungsionaris')])>Fungsionaris</a>

                <a href="/programKerja"
                    @class(['px-3 py-1.5 font-medium rounded-lg text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('programKerja')])>Program Kerja</a>

                <a href="/aspirasi"
                    @class(['px-3 py-1.5 font-medium rounded-lg text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('aspirasi')])>Aspirasi</a>

                <a href="#footer" class="px-3 py-1.5 font-medium rounded-lg text-lg text-slate-600 hover:text-blue-800">Kontak</a>
            </div>
            <button class="px-1.5 py-1.5 hover:bg-gray-50 bar-btn xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </nav>
        @yield('content')
    </div>
    <footer id="footer" class="footer xl:px-24 px-10 pt-6 pb-4 xl:py-4 w-full">
        <div class="flex xl:flex-row flex-col gap-4 justify-between items-start xl:mt-2">
            <div class="flex flex-col gap-2 mt-1">
                <div class="flex gap-2 items-center">
                    <h1 class="text-2xl font-bold text-blue-900">DPM</h1>
                    <h1 class="text-2xl font-bold text-slate-800">FMIPA</h1>
                </div>
                <div class="flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <h1 class="text-base text-slate-800">Jl. Raya Kampus UNUD, Bukit Jimbaran, Bali</h1>
                </div>
                <div class="flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <h1 class="text-base text-slate-800">+62 - 83851028574</h1>
                </div>
                <div class="flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <h1 class="text-base text-slate-800">dpmfmipaunud2025@gmail.com</h1>
                </div>
            </div>
            <div class="flex flex-row gap-24">
                <div class="xl:flex flex-col gap-2 hidden">
                    <h1 class="text-xl font-bold text-blue-900">NAVIGASI</h1>
                    <a href="/" class="text-base text-slate-800 hover:text-blue-800">Beranda</a>
                    <a href="/fungsionaris" class="text-base text-slate-800 hover:text-blue-800">Fungsionaris</a>
                    <a href="/programKerja" class="text-base text-slate-800 hover:text-blue-800">Program Kerja</a>
                    <a href="/aspirasi" class="text-base text-slate-800 hover:text-blue-800">Aspirasi</a>
                </div>
                <div class="flex flex-col gap-2 mt-4 xl:mt-0">
                    <h1 class="text-xl font-bold text-blue-900">MEDIA SOSIAL</h1>
                    <div class="flex xl:flex-col flex-row xl:gap-2 gap-4">
                        <a href="https://www.instagram.com/dpmfmipaunud?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-base text-slate-800 hover:text-blue-800 hover:fill-blue-800 fill-slate-800 flex gap-2 items-center">
                            <svg class="size-5 inline"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            <span class="hidden xl:flex">dpmfmipaunud</span>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100078741620037" class="text-base text-slate-800 hover:text-blue-800 hover:fill-blue-800 fill-slate-800 flex gap-2 items-center">
                            <svg class="size-5 inline " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                            <span class="hidden xl:flex">Dpm Fmipa Udayana</span>
                        </a>
                        <a href="https://line.me/R/ti/p/@876iqhut" class="text-base text-slate-800 hover:text-blue-800 hover:fill-blue-800 fill-slate-800 flex gap-2 items-center">
                            <svg class="size-5 inline"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z"/></svg>
                            <span class="hidden xl:flex">DPM FMIPA UNUD</span>
                        </a>
                        <a href="https://www.youtube.com/@DPMFMIPAUNUD" class="text-base text-slate-800 hover:text-blue-800 hover:fill-blue-800 fill-slate-800 flex gap-2 items-center">
                            <svg class="size-5 inline"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                            <span class="hidden xl:flex">DPM FMIPA UNUD</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-500 mt-6">
            <h1 class="text-center text-slate-800 text-md mt-3 font-semibold">© 2025 DPM FMIPA UNUD</h1>
        </div>
    </footer>

    <script>
        const navbar = document.querySelector('.navbar')
        const navbarNav = document.querySelector('.navbar-nav')
        const btn = document.querySelector('.bar-btn').addEventListener('click', () => {
            navbarNav.classList.toggle('show')
        })
        navbar.classList.toggle('scrolled', window.scrollY > 0)
        document.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 0)
        })
    </script>
    @yield('script')
</body>
</html>
