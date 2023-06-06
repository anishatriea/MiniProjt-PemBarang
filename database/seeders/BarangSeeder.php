<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebarang' => 'An01',
                'namabarang' => 'Basreng',
                'hargabarang'=> '30.000',
                'deskripsibarang' => 'Makanan yang menyehatkan',
                'satuan_id' => 1
            ],
            [
                'kodebarang' => 'An02',
                'namabarang' => 'Kripik Kaca',
                'hargabarang'=> '70.000',
                'deskripsibarang' => 'Membuat makanan yang sehat',
                'satuan_id' => 2
            ],
            [
                'kodebarang' => 'An03',
                'namabarang' => 'Mie Lidi',
                'hargabarang'=> '12.000',
                'deskripsibarang' => 'Makanan ini akan membuat anda bahagia',
                'satuan_id' => 3
            ],
        ]);
    }
}
