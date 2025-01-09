<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Pertanian',
                'description' => 'Kategori pada sektor pertanian'
            ],
            [
                'name' => 'Perkebunan',
                'description' => 'Kategori pada sektor perkebunan'
            ],
            [
                'name' => 'Pertambangan',
                'description' => 'Kategori pada sektor pertambangan'
            ],
            [
                'name' => 'Perdagangan',
                'description' => 'Kategori pada sektor perdagangan'
            ],
            [
                'name' => 'Pertambangan',
                'description' => 'Kategori pada sektor pertambangan'
            ],
        ]);
    }
}
