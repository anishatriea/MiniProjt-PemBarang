<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode' => 'mg',
                'nama' => 'miligram',
            ],
            [
                'kode' => 'g',
                'nama' => 'gram',
            ],
            [
                'kode' => 'kg',
                'nama' => 'kilogram',
            ],
        ]);
    }
}
