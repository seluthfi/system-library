<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Muhammad Luthfi Ramadhan',
            'Muhammad Syifaaur Rahman',
            'Muhammad Sayyid Zhilan Hifzhullah',
            'Muhammad Zaki Riyanto',
            'Muhammad Rizqi Rahmatullah',
        ];

        foreach ($names as $name) {
            Member::firstOrCreate(['name' => $name]);
        }
    }
}
