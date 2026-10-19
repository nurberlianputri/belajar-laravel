@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16">

        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 md:p-12 flex flex-col md:flex-row items-center gap-8">
            <div class="w-36 h-36 shrink-0 rounded-full bg-gradient-to-br from-indigo-500 to-fuchsia-500 text-white grid place-items-center text-5xl font-bold">
                N
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-3xl font-extrabold text-slate-900">Nur Berlian Putri</h1>
                <p class="text-indigo-600 font-medium mt-1">Mahasiswa Teknik Komputer</p>
                <p class="mt-4 text-slate-500 leading-relaxed">
                    Saya sedang belajar membangun aplikasi web dengan Laravel. Halaman ini dibuat
                    untuk mempraktikkan layouting menggunakan template Blade.
                </p>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 mt-8">
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
                <h2 class="text-xl font-bold text-slate-900 mb-4">Keahlian</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-sm">HTML</span>
                    <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-sm">CSS</span>
                    <span class="px-3 py-1 rounded-full bg-fuchsia-100 text-fuchsia-700 text-sm">PHP</span>
                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-sm">Laravel</span>
                    <span class="px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-sm">Tailwind</span>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
                <h2 class="text-xl font-bold text-slate-900 mb-4">Perjalanan Belajar</h2>
                <ol class="relative border-l-2 border-indigo-200 ml-2 space-y-5">
                    <li class="ml-5">
                        <span class="absolute -left-[7px] w-3 h-3 rounded-full bg-indigo-500"></span>
                        <p class="font-semibold text-slate-800">HTML dan CSS</p>
                        <p class="text-sm text-slate-500">Membuat halaman web statis.</p>
                    </li>
                    <li class="ml-5">
                        <span class="absolute -left-[7px] w-3 h-3 rounded-full bg-purple-500"></span>
                        <p class="font-semibold text-slate-800">PHP Native</p>
                        <p class="text-sm text-slate-500">Memakai include untuk header dan footer.</p>
                    </li>
                    <li class="ml-5">
                        <span class="absolute -left-[7px] w-3 h-3 rounded-full bg-fuchsia-500"></span>
                        <p class="font-semibold text-slate-800">Laravel Blade</p>
                        <p class="text-sm text-slate-500">Layouting dengan template inheritance.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>
@endsection