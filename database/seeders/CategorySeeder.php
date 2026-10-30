<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Pemrograman', 'Basis Data', 'Jaringan Komputer', 'Sistem Informasi', 'Algoritma'];
        foreach ($names as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}
