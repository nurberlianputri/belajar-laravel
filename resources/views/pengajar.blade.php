@extends('layouts.app')

@section('title', 'Pengajar')

@section('content')
    <section class="max-w-6xl mx-auto px-6 py-16">

        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900">Tim Pengajar</h1>
            <p class="mt-2 text-slate-500">Pengajar berpengalaman yang siap mendampingi proses belajar</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($pengajar as $g)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 text-center hover:shadow-xl hover:-translate-y-1 transition">
                    <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-br from-sky-500 to-indigo-500 text-white grid place-items-center text-4xl font-bold">
                        {{ $g['inisial'] }}
                    </div>
                    <h3 class="mt-4 font-bold text-slate-900">{{ $g['nama'] }}</h3>
                    <p class="text-sky-600 font-medium">{{ $g['mapel'] }}</p>
                    <p class="mt-2 text-sm text-slate-500">Pengalaman mengajar {{ $g['pengalaman'] }} tahun</p>
                </div>
            @endforeach
        </div>

    </section>
@endsection