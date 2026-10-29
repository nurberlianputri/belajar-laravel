@extends('layouts.app')

@section('title', 'Program')

@section('content')
    <section class="max-w-6xl mx-auto px-6 py-16">

        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-slate-900">Program Belajar</h1>
            <p class="mt-2 text-slate-500">Pilih program sesuai jenjang dan kebutuhan Anda</p>
        </div>

        {{-- Pencarian dan filter --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div class="flex flex-wrap gap-2">
                <button onclick="pilih('Semua', this)" class="filter px-4 py-2 rounded-lg text-sm font-medium border border-slate-200 bg-sky-600 text-white">Semua</button>
                @foreach ($jenjang as $j)
                    <button onclick="pilih('{{ $j }}', this)" class="filter px-4 py-2 rounded-lg text-sm font-medium border border-slate-200 bg-white text-slate-600">{{ $j }}</button>
                @endforeach
            </div>
            <input id="cari" type="text" placeholder="Cari program..."
                   class="w-full md:w-72 rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <p class="text-sm text-slate-500 mb-4">Menampilkan <span id="jumlah-hasil" class="font-bold text-sky-600">{{ count($program) }}</span> program</p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($program as $p)
                <div class="kartu bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition"
                     data-jenjang="{{ $p['jenjang'] }}" data-nama="{{ strtolower($p['nama']) }}">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-amber-100 text-amber-700">{{ $p['jenjang'] }}</span>
                        <span class="text-xs text-slate-400">{{ $p['jadwal'] }}</span>
                    </div>
                    <h3 class="mt-3 font-bold text-slate-900">{{ $p['nama'] }}</h3>
                    <p class="mt-1 text-sm text-slate-500">{{ $p['info'] }}</p>
                    <p class="mt-4 text-xl font-extrabold text-sky-600">Rp {{ number_format($p['harga'], 0, ',', '.') }}<span class="text-xs font-normal text-slate-400"> / bulan</span></p>
                    <a href="/daftar?program={{ $p['slug'] }}" class="block mt-4 text-center py-2 rounded-xl bg-sky-600 text-white text-sm font-semibold hover:bg-sky-500 transition">Daftar Program Ini</a>
                </div>
            @endforeach
        </div>

        <div id="kosong" class="hidden text-center py-16 text-slate-500">
            Program yang Anda cari tidak ditemukan.
        </div>

    </section>
@endsection

@section('script')
<script>
    var aktif = 'Semua';

    function terapkan() {
        var kata = document.getElementById('cari').value.toLowerCase();
        var jumlah = 0;

        document.querySelectorAll('.kartu').forEach(function (k) {
            var cocokJenjang = aktif === 'Semua' || k.dataset.jenjang === aktif;
            var cocokKata = k.dataset.nama.includes(kata);
            var tampil = cocokJenjang && cocokKata;

            k.classList.toggle('hidden', !tampil);
            if (tampil) { jumlah++; }
        });

        document.getElementById('jumlah-hasil').textContent = jumlah;
        document.getElementById('kosong').classList.toggle('hidden', jumlah !== 0);
    }

    function pilih(jenjang, tombol) {
        aktif = jenjang;

        document.querySelectorAll('.filter').forEach(function (b) {
            var on = (b === tombol);
            b.classList.toggle('bg-sky-600', on);
            b.classList.toggle('text-white', on);
            b.classList.toggle('bg-white', !on);
            b.classList.toggle('text-slate-600', !on);
        });

        terapkan();
    }

    document.getElementById('cari').addEventListener('input', terapkan);
</script>
@endsection