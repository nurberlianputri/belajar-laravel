<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-slate-200">
    <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <a href="/" class="flex items-center gap-2 text-xl font-bold text-indigo-600">
            <span class="w-9 h-9 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500 text-white grid place-items-center">L</span>
            LaraBelajar
        </a>

        <ul class="hidden md:flex items-center gap-2 text-sm font-medium">
            <li>
                <a href="/" class="px-4 py-2 rounded-lg transition {{ request()->is('/') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50 hover:text-indigo-600' }}">Beranda</a>
            </li>
            <li>
                <a href="/profile" class="px-4 py-2 rounded-lg transition {{ request()->is('profile') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50 hover:text-indigo-600' }}">Profil</a>
            </li>
            <li>
                <a href="/contact" class="px-4 py-2 rounded-lg transition {{ request()->is('contact') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50 hover:text-indigo-600' }}">Kontak</a>
            </li>
        </ul>

        <button onclick="document.getElementById('menu-mobile').classList.toggle('hidden')"
                class="md:hidden p-2 rounded-lg hover:bg-slate-100" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>

    <ul id="menu-mobile" class="hidden md:hidden px-6 pb-4 space-y-1 text-sm font-medium">
        <li><a href="/" class="block px-4 py-2 rounded-lg {{ request()->is('/') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50' }}">Beranda</a></li>
        <li><a href="/profile" class="block px-4 py-2 rounded-lg {{ request()->is('profile') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50' }}">Profil</a></li>
        <li><a href="/contact" class="block px-4 py-2 rounded-lg {{ request()->is('contact') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-50' }}">Kontak</a></li>
    </ul>
</header>