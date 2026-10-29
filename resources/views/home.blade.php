@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-br from-sky-600 via-blue-600 to-indigo-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-20 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/20 text-sm mb-6">Bimbingan Belajar SD, SMP, SMA, dan UTBK</span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Belajar Jadi Lebih<br>Mudah dan Menyenangkan
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-lg text-sky-100">
                Kelas kecil, pengajar sabar, dan materi yang disesuaikan dengan kebutuhan setiap siswa.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="/daftar" class="px-6 py-3 rounded-xl bg-amber-400 text-slate-900 font-semibold shadow-lg hover:scale-105 transition">Daftar Sekarang</a>
                <a href="/program" class="px-6 py-3 rounded-xl border border-white/60 font-semibold hover:bg-white/10 transition">Lihat Program</a>
            </div>

            {{-- Hitung mundur --}}
            <div id="hitung-mundur" data-batas="{{ $batas }}" class="mt-12 inline-block rounded-2xl bg-white/10 backdrop-blur px-6 py-5">
                <p class="text-sm text-sky-100 mb-3">Pendaftaran gelombang ini ditutup dalam</p>
                <div class="flex justify-center gap-3">
                    <div class="w-20 rounded-xl bg-white text-sky-700 py-3"><p id="hm-hari" class="text-3xl font-extrabold">0</p><p class="text-xs">Hari</p></div>
                    <div class="w-20 rounded-xl bg-white text-sky-700 py-3"><p id="hm-jam" class="text-3xl font-extrabold">0</p><p class="text-xs">Jam</p></div>
                    <div class="w-20 rounded-xl bg-white text-sky-700 py-3"><p id="hm-menit" class="text-3xl font-extrabold">0</p><p class="text-xs">Menit</p></div>
                    <div class="w-20 rounded-xl bg-white text-sky-700 py-3"><p id="hm-detik" class="text-3xl font-extrabold">0</p><p class="text-xs">Detik</p></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="max-w-6xl mx-auto px-6 mt-10">
        <div class="grid gap-4 sm:grid-cols-3">
            @foreach ($statistik as $s)
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 text-center">
                    <p class="text-4xl font-extrabold {{ $s['warna'] }}"><span data-target="{{ $s['jumlah'] }}">0</span>+</p>
                    <p class="mt-1 text-sm text-slate-500">{{ $s['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Keunggulan --}}
    <section class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Kenapa Memilih Kami</h2>
            <p class="mt-2 text-slate-500">Empat alasan orang tua dan siswa percaya pada Bimbel Cemerlang</p>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($keunggulan as $i => $k)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 grid place-items-center text-xl font-bold mb-4">{{ $i + 1 }}</div>
                    <h3 class="font-bold text-slate-900 mb-1">{{ $k['judul'] }}</h3>
                    <p class="text-sm text-slate-500">{{ $k['isi'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Program unggulan --}}
    <section class="max-w-6xl mx-auto px-6 pb-20">
        <div class="flex items-end justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">Program Unggulan</h2>
                <p class="mt-2 text-slate-500">Pilihan favorit siswa kami</p>
            </div>
            <a href="/program" class="text-sm font-semibold text-sky-600 hover:underline">Semua program</a>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($programUnggulan as $p)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-amber-100 text-amber-700">{{ $p['jenjang'] }}</span>
                    <h3 class="mt-3 font-bold text-slate-900">{{ $p['nama'] }}</h3>
                    <p class="mt-1 text-sm text-slate-500">{{ $p['info'] }}</p>
                    <p class="mt-4 text-lg font-extrabold text-sky-600">Rp {{ number_format($p['harga'], 0, ',', '.') }}<span class="text-xs font-normal text-slate-400"> / bulan</span></p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="bg-sky-50 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">Kata Mereka</h2>
            <div class="grid gap-6 md:grid-cols-3">
                @foreach ($testimoni as $t)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                        <p class="text-slate-600 italic">"{{ $t['isi'] }}"</p>
                        <p class="mt-4 text-sm font-semibold text-sky-700">{{ $t['nama'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Ajakan --}}
    <section class="max-w-4xl mx-auto px-6 mt-16">
        <div class="rounded-3xl bg-slate-900 text-white p-10 text-center">
            <h2 class="text-2xl md:text-3xl font-bold">Siap mulai belajar bersama kami?</h2>
            <p class="mt-3 text-slate-400">Isi formulir pendaftaran, kami akan menghubungi Anda lewat WhatsApp.</p>
            <a href="/daftar" class="inline-block mt-6 px-6 py-3 rounded-xl bg-amber-400 text-slate-900 font-semibold hover:bg-amber-300 transition">Daftar Sekarang</a>
        </div>
    </section>

@endsection

@section('script')
<script>
    // Angka statistik naik dari 0
    document.querySelectorAll('[data-target]').forEach(function (el) {
        var target = parseInt(el.dataset.target);
        var now = 0;
        var step = Math.max(1, Math.ceil(target / 60));
        var timer = setInterval(function () {
            now += step;
            if (now >= target) {
                now = target;
                clearInterval(timer);
            }
            el.textContent = now.toLocaleString('id-ID');
        }, 25);
    });

    // Hitung mundur pendaftaran
    var batas = new Date(document.getElementById('hitung-mundur').dataset.batas).getTime();

    function tampilHitungMundur() {
        var sisa = Math.max(0, batas - Date.now());
        document.getElementById('hm-hari').textContent = Math.floor(sisa / 86400000);
        document.getElementById('hm-jam').textContent = Math.floor((sisa % 86400000) / 3600000);
        document.getElementById('hm-menit').textContent = Math.floor((sisa % 3600000) / 60000);
        document.getElementById('hm-detik').textContent = Math.floor((sisa % 60000) / 1000);
    }

    tampilHitungMundur();
    setInterval(tampilHitungMundur, 1000);
</script>
@endsection