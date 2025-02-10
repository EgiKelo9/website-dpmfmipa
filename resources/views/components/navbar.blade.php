<nav class="navbar px-12 lg:px-24 py-4 flex flex-row justify-between z-50 lg:shadow-md sticky top-0 transition duration-300">
    <a href="#" class="flex gap-2 items-center">
        <img src="{{asset('images/LOGO DPM.png')}}" class="h-10 w-10" alt="">
        <div class="gap-1 flex">
            <h1 class="text-xl lg:text-2xl font-bold hidden md:block text-blue-900 text-shadow">DPM</h1>
            <h1 class="text-xl lg:text-2xl font-bold hidden md:block text-slate-800">FMIPA</h1>
        </div>
    </a>
    <div class="navbar-nav gap-1 pt-2 md:pt-0 lg:gap-4 pb-4 md:py-0 md:items-center absolute top-full left-0 right-0 flex-col px-6 md:px-0 bg-inherit md:bg-transparent shadow-md md:static md:flex-row md:shadow-none">
        <a href="/"
            @class(['px-2.5 py-1.5 font-semibold rounded-lg text-base xl:text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('/')])>Beranda</a>
        <a href="/fungsionaris"
            @class(['px-2.5 py-1.5 font-medium rounded-lg text-base xl:text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('fungsionaris')])>Fungsionaris</a>
        <a href="/program-kerja"
            @class(['px-2.5 py-1.5 font-medium rounded-lg text-base xl:text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('program-kerja')])>Program Kerja</a>
        <a href="/aspirasi"
            @class(['px-2.5 py-1.5 font-medium rounded-lg text-base xl:text-lg text-slate-600 hover:text-blue-800','linkActive' => request()->is('aspirasi')])>Aspirasi</a>
    </div>
    <button class="px-1.5 py-1.5 hover:bg-gray-50 bar-btn md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-7">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
</nav>

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