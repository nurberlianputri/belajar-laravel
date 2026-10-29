@php
    $menu = [
        ['url' => '/',         'nama' => 'Beranda',  'pola' => '/'],
        ['url' => '/program',  'nama' => 'Program',  'pola' => 'program'],
        ['url' => '/pengajar', 'nama' => 'Pengajar', 'pola' => 'pengajar'],
        ['url' => '/jadwal',   'nama' => 'Jadwal',   'pola' => 'jadwal'],
        ['url' => '/daftar',   'nama' => 'Daftar',   'pola' => 'daftar'],
        ['url' => '/contact',  'nama' => 'Kontak',   'pola' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-sky-100">
    <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <a href="/" class="flex items-center gap-2 text-xl font-bold text-sky-700">
            <span class="w-9 h-9 rounded-xl bg-gradient-to-br from-sky-500 to-indigo-500 text-white grid place-items-center">C</span>
            Bimbel Cemerlang
        </a>

        <ul class="hidden md:flex items-center gap-1 text-sm font-medium">
            @foreach ($menu as $m)
                <li>
                    <a href="{{ $m['url'] }}"
                       class="px-4 py-2 rounded-lg transition {{ request()->is($m['pola']) ? 'bg-sky-600 text-white' : 'hover:bg-sky-50 hover:text-sky-700' }}">
                        {{ $m['nama'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <button onclick="document.getElementById('menu-mobile').classList.toggle('hidden')"
                class="md:hidden p-2 rounded-lg hover:bg-slate-100" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>

    <ul id="menu-mobile" class="hidden md:hidden px-6 pb-4 space-y-1 text-sm font-medium">
        @foreach ($menu as $m)
            <li>
                <a href="{{ $m['url'] }}"
                   class="block px-4 py-2 rounded-lg {{ request()->is($m['pola']) ? 'bg-sky-600 text-white' : 'hover:bg-sky-50' }}">
                    {{ $m['nama'] }}
                </a>
            </li>
        @endforeach
    </ul>
</header>