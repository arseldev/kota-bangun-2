<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'about' => 'Desa yang asri dengan pemandangan alam yang indah.',
            'population' => 2500,
            'area' => 150,
            'family' => 600,
            'visi' => 'Menjadi desa wisata unggulan di wilayah Kutai Kartanegara.',
            'misi' => 'Meningkatkan kesejahteraan masyarakat melalui pengembangan pariwisata dan pertanian.'
        ]);
    }
}
