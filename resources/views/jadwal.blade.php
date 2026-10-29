@extends('layouts.app')

@section('title', 'Jadwal')

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16">

        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900">Jadwal Kelas</h1>
            <p class="mt-2 text-slate-500">Hari ini: <span class="font-semibold text-sky-600">{{ $hariIni }}</span></p>
        </div>

        <div class="space-y-6">
            @foreach ($jadwal as $hari => $sesi)
                <div class="bg-white rounded-2xl shadow-sm border {{ $hari === $hariIni ? 'border-sky-400 ring-2 ring-sky-100' : 'border-slate-100' }} overflow-hidden">
                    <div class="px-6 py-3 flex items-center justify-between {{ $hari === $hariIni ? 'bg-sky-600 text-white' : 'bg-slate-100 text-slate-700' }}">
                        <h2 class="font-bold">{{ $hari }}</h2>
                        @if ($hari === $hariIni)
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-white/20">Hari ini</span>
                        @endif
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="text-left text-slate-400">
                                <tr>
                                    <th class="px-6 py-2 font-medium">Jam</th>
                                    <th class="px-6 py-2 font-medium">Program</th>
                                    <th class="px-6 py-2 font-medium">Pengajar</th>
                                    <th class="px-6 py-2 font-medium">Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sesi as $s)
                                    <tr class="border-t border-slate-100">
                                        <td class="px-6 py-3 whitespace-nowrap font-medium text-slate-800">{{ $s['jam'] }}</td>
                                        <td class="px-6 py-3">{{ $s['program'] }}</td>
                                        <td class="px-6 py-3 whitespace-nowrap">{{ $s['pengajar'] }}</td>
                                        <td class="px-6 py-3 whitespace-nowrap">{{ $s['ruang'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection