<?php

namespace Database\Seeders;

use App\Models\Government;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Government::insert([
            [
                'name' => 'Joko Purnomo, S.I.P, NL.P',
                'position' => 'Kepala Desa',
                'image' => 'https://via.placeholder.com/300'
            ],
            [
                'name' => 'Khoirul Anam',
                'position' => 'Sekretaris',
                'image' => 'https://via.placeholder.com/300'
            ]
        ]);
    }
}
