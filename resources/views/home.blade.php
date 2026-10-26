@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-br from-indigo-600 via-purple-600 to-fuchsia-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-24 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/20 text-sm mb-6">Praktik Layouting Blade</span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Mengenal saya lebih dekat
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-lg text-indigo-100">
                Temukan informasi tentang profil, perjalanan, dan hal-hal yang saya pelajari.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="/profile" class="px-6 py-3 rounded-xl bg-white text-indigo-600 font-semibold shadow-lg hover:scale-105 transition">Lihat Profil</a>
                <a href="/contact" class="px-6 py-3 rounded-xl border border-white/60 font-semibold hover:bg-white/10 transition">Hubungi Saya</a>
            </div>
        </div>
    </section>

    {{-- Fitur --}}
    <section class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Yang Dipelajari</h2>
            <p class="mt-2 text-slate-500">Empat direktif utama dalam layouting Blade</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 grid place-items-center text-xl mb-4">1</div>
                <h3 class="font-bold text-slate-900 mb-1">@@extends</h3>
                <p class="text-sm text-slate-500">Memakai template layout yang sudah dibuat.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 grid place-items-center text-xl mb-4">2</div>
                <h3 class="font-bold text-slate-900 mb-1">@@yield</h3>
                <p class="text-sm text-slate-500">Menyediakan bagian kosong di template.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-xl bg-fuchsia-100 text-fuchsia-600 grid place-items-center text-xl mb-4">3</div>
                <h3 class="font-bold text-slate-900 mb-1">@@section</h3>
                <p class="text-sm text-slate-500">Mengisi konten tiap halaman.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 grid place-items-center text-xl mb-4">4</div>
                <h3 class="font-bold text-slate-900 mb-1">@@include</h3>
                <p class="text-sm text-slate-500">Menyisipkan header dan footer.</p>
            </div>
        </div>
    </section>

    {{-- Ajakan --}}
    <section class="max-w-4xl mx-auto px-6">
        <div class="rounded-3xl bg-slate-900 text-white p-10 text-center">
            <h2 class="text-2xl md:text-3xl font-bold">Ingin tahu lebih banyak tentang saya?</h2>
            <p class="mt-3 text-slate-400">Kunjungi halaman profil untuk melihat latar belakang dan keahlian.</p>
            <a href="/profile" class="inline-block mt-6 px-6 py-3 rounded-xl bg-indigo-500 font-semibold hover:bg-indigo-400 transition">Buka Profil</a>
        </div>
    </section>

@endsection