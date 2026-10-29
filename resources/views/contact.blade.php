@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16">

        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900">Hubungi Kami</h1>
            <p class="mt-2 text-slate-500">Ada pertanyaan tentang program atau biaya? Kirim pesan di bawah ini.</p>
        </div>

        <div class="grid gap-8 md:grid-cols-5">

            <div class="md:col-span-2 space-y-4">
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
                    <p class="text-xs uppercase tracking-wide text-slate-400">Alamat</p>
                    <p class="font-semibold text-slate-800">Jl. Mannuruki Raya</p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
                    <p class="text-xs uppercase tracking-wide text-slate-400">Email</p>
                    <p class="font-semibold text-slate-800">cemerlang@email.com</p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
                    <p class="text-xs uppercase tracking-wide text-slate-400">WhatsApp</p>
                    <p class="font-semibold text-slate-800">081947885476</p>
                </div>
            </div>

            <form onsubmit="event.preventDefault(); alert('Terima kasih! Ini hanya tampilan.');"
                class="md:col-span-3 bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-5">
                <div>
                    <label class="block text-sm font-medium mb-1">Nama</label>
                    <input type="text" placeholder="Nama lengkap"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" placeholder="email@contoh.com"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea rows="4" placeholder="Tulis pesan Anda..."
                            class="w-full rounded-xl border border-slate-300 px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>
                <button type="submit" class="w-full py-3 rounded-xl bg-sky-600 text-white font-semibold hover:bg-sky-500 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>
@endsection