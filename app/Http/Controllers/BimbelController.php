<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimbelController extends Controller
{
    private function dataProgram(): array
    {
        return [
            ['slug' => 'calistung-sd',    'nama' => 'Calistung dan Matematika Dasar', 'jenjang' => 'SD',   'harga' => 250000, 'jadwal' => '3x seminggu', 'info' => 'Membaca, menulis, berhitung, dan dasar matematika dengan cara bermain.'],
            ['slug' => 'mtk-ipa-smp',     'nama' => 'Matematika dan IPA',             'jenjang' => 'SMP',  'harga' => 300000, 'jadwal' => '3x seminggu', 'info' => 'Pendalaman materi sekolah dan latihan soal ujian semester.'],
            ['slug' => 'inggris-smp',     'nama' => 'Bahasa Inggris',                 'jenjang' => 'SMP',  'harga' => 280000, 'jadwal' => '2x seminggu', 'info' => 'Grammar, kosakata, dan percakapan dasar yang mudah dipahami.'],
            ['slug' => 'mtk-fisika-sma',  'nama' => 'Matematika dan Fisika',          'jenjang' => 'SMA',  'harga' => 350000, 'jadwal' => '3x seminggu', 'info' => 'Konsep inti, trik pengerjaan soal, dan pembahasan tuntas.'],
            ['slug' => 'utbk-intensif',   'nama' => 'Intensif UTBK',                  'jenjang' => 'UTBK', 'harga' => 450000, 'jadwal' => '4x seminggu', 'info' => 'Persiapan UTBK lengkap dengan tryout berkala dan evaluasi.'],
            ['slug' => 'olimpiade-sains', 'nama' => 'Persiapan Olimpiade Sains',      'jenjang' => 'SMA',  'harga' => 400000, 'jadwal' => '2x seminggu', 'info' => 'Pembinaan soal tingkat lanjut untuk olimpiade sains.'],
        ];
    }

    private function dataPengajar(): array
    {
        return [
            ['nama' => 'Kak Rina Safitri, S.Pd.',   'mapel' => 'Matematika',     'pengalaman' => 8, 'inisial' => 'R'],
            ['nama' => 'Kak Andi Pratama, M.Si.',   'mapel' => 'Fisika',         'pengalaman' => 6, 'inisial' => 'A'],
            ['nama' => 'Kak Dewi Lestari, S.Pd.',   'mapel' => 'Bahasa Inggris', 'pengalaman' => 5, 'inisial' => 'D'],
            ['nama' => 'Kak Fajar Hidayat, S.Si.',  'mapel' => 'IPA Terpadu',    'pengalaman' => 4, 'inisial' => 'F'],
            ['nama' => 'Kak Nadia Rahma, S.Pd.',    'mapel' => 'Calistung SD',   'pengalaman' => 7, 'inisial' => 'N'],
            ['nama' => 'Kak Yusuf Ramadhan, M.Pd.', 'mapel' => 'Strategi UTBK',  'pengalaman' => 9, 'inisial' => 'Y'],
        ];
    }

    private function dataJadwal(): array
    {
        return [
            'Senin' => [
                ['jam' => '15.00 - 16.30', 'program' => 'Calistung dan Matematika Dasar', 'pengajar' => 'Kak Nadia', 'ruang' => 'Ruang A'],
                ['jam' => '16.30 - 18.00', 'program' => 'Matematika dan IPA',             'pengajar' => 'Kak Rina',  'ruang' => 'Ruang B'],
                ['jam' => '19.00 - 21.00', 'program' => 'Intensif UTBK',                  'pengajar' => 'Kak Yusuf', 'ruang' => 'Ruang C'],
            ],
            'Selasa' => [
                ['jam' => '15.00 - 16.30', 'program' => 'Bahasa Inggris',        'pengajar' => 'Kak Dewi', 'ruang' => 'Ruang A'],
                ['jam' => '16.30 - 18.00', 'program' => 'Matematika dan Fisika', 'pengajar' => 'Kak Andi', 'ruang' => 'Ruang B'],
            ],
            'Rabu' => [
                ['jam' => '15.00 - 16.30', 'program' => 'Calistung dan Matematika Dasar', 'pengajar' => 'Kak Nadia', 'ruang' => 'Ruang A'],
                ['jam' => '16.30 - 18.00', 'program' => 'Matematika dan IPA',             'pengajar' => 'Kak Fajar', 'ruang' => 'Ruang B'],
                ['jam' => '19.00 - 21.00', 'program' => 'Intensif UTBK',                  'pengajar' => 'Kak Yusuf', 'ruang' => 'Ruang C'],
            ],
            'Kamis' => [
                ['jam' => '15.00 - 16.30', 'program' => 'Bahasa Inggris',            'pengajar' => 'Kak Dewi', 'ruang' => 'Ruang A'],
                ['jam' => '16.30 - 18.00', 'program' => 'Persiapan Olimpiade Sains', 'pengajar' => 'Kak Andi', 'ruang' => 'Ruang B'],
            ],
            'Jumat' => [
                ['jam' => '15.00 - 16.30', 'program' => 'Calistung dan Matematika Dasar', 'pengajar' => 'Kak Nadia', 'ruang' => 'Ruang A'],
                ['jam' => '16.30 - 18.00', 'program' => 'Matematika dan Fisika',          'pengajar' => 'Kak Andi',  'ruang' => 'Ruang B'],
                ['jam' => '19.00 - 21.00', 'program' => 'Intensif UTBK',                  'pengajar' => 'Kak Yusuf', 'ruang' => 'Ruang C'],
            ],
            'Sabtu' => [
                ['jam' => '09.00 - 11.00', 'program' => 'Tryout UTBK Mingguan', 'pengajar' => 'Kak Yusuf',       'ruang' => 'Aula'],
                ['jam' => '13.00 - 15.00', 'program' => 'Konsultasi Belajar',   'pengajar' => 'Semua Pengajar', 'ruang' => 'Ruang B'],
            ],
        ];
    }

    public function beranda()
    {
        $statistik = [
            ['label' => 'Siswa Aktif',            'jumlah' => 850, 'warna' => 'text-sky-600'],
            ['label' => 'Pengajar Berpengalaman', 'jumlah' => 24,  'warna' => 'text-indigo-600'],
            ['label' => 'Alumni Lolos PTN',       'jumlah' => 320, 'warna' => 'text-amber-500'],
        ];

        $keunggulan = [
            ['judul' => 'Kelas Kecil',      'isi' => 'Maksimal 10 siswa per kelas agar setiap anak diperhatikan.'],
            ['judul' => 'Pengajar Ahli',    'isi' => 'Lulusan kampus terbaik yang sabar dan komunikatif.'],
            ['judul' => 'Tryout Berkala',   'isi' => 'Evaluasi rutin dengan laporan perkembangan belajar.'],
            ['judul' => 'Jadwal Fleksibel', 'isi' => 'Pilih jam belajar sesuai kegiatan sekolah.'],
        ];

        $testimoni = [
            ['nama' => 'Siti, orang tua siswa SMP', 'isi' => 'Nilai matematika anak saya naik dalam dua bulan. Pengajarnya sabar sekali.'],
            ['nama' => 'Budi, siswa SMA',           'isi' => 'Tryout UTBK-nya sangat membantu saya tahu bagian yang masih lemah.'],
            ['nama' => 'Hana, siswa SD',            'isi' => 'Belajarnya seru, jadi tidak takut lagi sama pelajaran berhitung.'],
        ];

        $programUnggulan = array_slice($this->dataProgram(), 0, 3);

        $batas = now('Asia/Makassar')->endOfMonth()->format('Y-m-d\TH:i:s');

        return view('home', compact('statistik', 'keunggulan', 'testimoni', 'programUnggulan', 'batas'));
    }

    public function program()
    {
        $program = $this->dataProgram();
        $jenjang = ['SD', 'SMP', 'SMA', 'UTBK'];

        return view('program', compact('program', 'jenjang'));
    }

    public function pengajar()
    {
        $pengajar = $this->dataPengajar();

        return view('pengajar', compact('pengajar'));
    }

    public function jadwal()
    {
        $jadwal = $this->dataJadwal();
        $hariIni = now('Asia/Makassar')->locale('id')->translatedFormat('l');

        return view('jadwal', compact('jadwal', 'hariIni'));
    }

    public function daftar()
    {
        $program = $this->dataProgram();

        return view('daftar', compact('program'));
    }

    public function simpanDaftar(Request $request)
    {
        $program = $this->dataProgram();
        $slugValid = array_column($program, 'slug');

        $data = $request->validate([
            'nama'    => ['required', 'string', 'min:3', 'max:100'],
            'wa'      => ['required', 'regex:/^[0-9]{9,15}$/'],
            'program' => ['required', 'in:' . implode(',', $slugValid)],
            'durasi'  => ['required', 'integer', 'between:1,12'],
            'catatan' => ['nullable', 'string', 'max:300'],
        ], [
            'nama.required'    => 'Nama siswa wajib diisi.',
            'nama.min'         => 'Nama minimal 3 huruf.',
            'wa.required'      => 'Nomor WhatsApp wajib diisi.',
            'wa.regex'         => 'Nomor WhatsApp harus berupa angka, 9 sampai 15 digit.',
            'program.required' => 'Silakan pilih program.',
            'program.in'       => 'Program yang dipilih tidak tersedia.',
            'durasi.between'   => 'Durasi harus antara 1 sampai 12 bulan.',
        ]);

        $dipilih = collect($program)->firstWhere('slug', $data['program']);
        $total = $dipilih['harga'] * $data['durasi'];

        $pesan = 'Terima kasih, ' . $data['nama'] . '! Pendaftaran program '
            . $dipilih['nama'] . ' selama ' . $data['durasi'] . ' bulan dengan total Rp '
            . number_format($total, 0, ',', '.') . ' sudah kami catat. Kami akan menghubungi Anda lewat WhatsApp.';

        return redirect('/daftar')->with('sukses', $pesan);
    }

    public function kontak()
    {
        return view('contact');
    }
}
