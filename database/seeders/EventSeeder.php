<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'title' => 'Pemasangan Bendera Menyambut Kemerdekaan RI yang Ke 79',
                'date' => '2024-08-02 08:00:00'
            ],
            [
                'title' => 'Kegiatan Peningkatan Jalan Usaha Tani Lembong',
                'date' => '2024-08-01 00:00:00'
            ],
            [
                'title' => 'Kegiatan Peningkatan Jalan Usaha Tani Lembong',
                'date' => '2024-07-01 00:00:00'
            ],
            [
                'title' => 'Pelatihan Pengolahan Hasil Pertanian',
                'date' => '2024-06-15 00:00:00'
            ],
            [
                'title' => 'Musyawarah Desa Tentang Pembangunan',
                'date' => '2024-06-25 00:00:00'
            ],
            [
                'title' => 'Kegiatan Gotong Royong Pembersihan Lingkungan',
                'date' => '2024-05-10 00:00:00'
            ],
            [
                'title' => 'Kunjungan Ke Sekolah Dasar',
                'date' => '2024-05-20 00:00:00'
            ],
            [
                'title' => 'Pelatihan Keterampilan Masyarakat',
                'date' => '2024-04-12 00:00:00'
            ],
            [
                'title' => 'Festival Budaya Desa',
                'date' => '2024-03-30 00:00:00'
            ],
            [
                'title' => 'Kegiatan Penyuluhan Kesehatan Masyarakat',
                'date' => '2024-03-18 00:00:00'
            ],
        ]);
    }
}
