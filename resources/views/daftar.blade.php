@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    <section class="max-w-3xl mx-auto px-6 py-16">

        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-slate-900">Pendaftaran Siswa</h1>
            <p class="mt-2 text-slate-500">Isi formulir berikut, kami akan menghubungi Anda lewat WhatsApp.</p>
        </div>

        @if (session('sukses'))
            <div class="mb-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 p-5">
                {{ session('sukses') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 text-red-700 p-5">
                <p class="font-semibold mb-1">Mohon periksa kembali isian Anda:</p>
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $pesan)
                        <li>{{ $pesan }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/daftar" class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium mb-1">Nama siswa</label>
                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama lengkap siswa"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Nomor WhatsApp</label>
                <input type="text" name="wa" value="{{ old('wa') }}" placeholder="Contoh: 081234567890"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Program</label>
                <select id="program" name="program"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="" data-harga="0">Pilih program</option>
                    @foreach ($program as $p)
                        <option value="{{ $p['slug'] }}" data-harga="{{ $p['harga'] }}"
                            {{ old('program', request('program')) === $p['slug'] ? 'selected' : '' }}>
                            {{ $p['jenjang'] }} - {{ $p['nama'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Counter durasi --}}
            <div>
                <label class="block text-sm font-medium mb-2">Durasi belajar (bulan)</label>
                <div class="flex items-center gap-4">
                    <button type="button" onclick="ubahDurasi(-1)" class="w-11 h-11 rounded-xl bg-slate-200 text-xl font-bold hover:bg-slate-300 transition">-</button>
                    <span id="tampil-durasi" class="text-3xl font-extrabold text-sky-600 w-12 text-center">1</span>
                    <button type="button" onclick="ubahDurasi(1)" class="w-11 h-11 rounded-xl bg-sky-600 text-white text-xl font-bold hover:bg-sky-500 transition">+</button>
                    <span class="text-sm text-slate-400">maksimal 12 bulan</span>
                </div>
                <input type="hidden" id="durasi" name="durasi" value="{{ old('durasi', 1) }}">
            </div>

            <div class="rounded-2xl bg-sky-50 p-5 flex items-center justify-between">
                <span class="text-sm text-slate-600">Perkiraan total biaya</span>
                <span id="total" class="text-2xl font-extrabold text-sky-700">Rp 0</span>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Catatan (opsional)</label>
                <textarea name="catatan" rows="3" placeholder="Misalnya jam belajar yang diinginkan"
                          class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">{{ old('catatan') }}</textarea>
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-sky-600 text-white font-semibold hover:bg-sky-500 transition">
                Kirim Pendaftaran
            </button>
        </form>

    </section>
@endsection

@section('script')
<script>
    var durasi = parseInt(document.getElementById('durasi').value) || 1;

    function rupiah(angka) {
        return 'Rp ' + angka.toLocaleString('id-ID');
    }

    function hitung() {
        var opsi = document.getElementById('program').selectedOptions[0];
        var harga = parseInt(opsi.dataset.harga || 0);

        document.getElementById('durasi').value = durasi;
        document.getElementById('tampil-durasi').textContent = durasi;
        document.getElementById('total').textContent = rupiah(harga * durasi);
    }

    function ubahDurasi(x) {
        durasi = Math.min(12, Math.max(1, durasi + x));
        hitung();
    }

    document.getElementById('program').addEventListener('change', hitung);
    hitung();
</script>
@endsection