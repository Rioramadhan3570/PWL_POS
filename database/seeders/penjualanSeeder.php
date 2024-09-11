<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P01',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P02',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P03',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P04',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P05',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P06',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P07',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P08',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P09',
                'penjualan_tanggal' => '2024-08-31',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Ryan',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2024-08-31',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
