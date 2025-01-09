<?php

namespace Database\Seeders;

use App\Models\Potential;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PotentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Potential::insert([
            [
                'name' => 'Padi',
                'location' => 'Jawa Tengah',
                'image' => 'https://via.placeholder.com/300',
                'category_id' => 1
            ],
            [
                'name' => 'Ikan',
                'location' => 'Jawa Timur',
                'image' => 'https://via.placeholder.com/300',
                'category_id' => 2
            ]

        ]);
    }
}
