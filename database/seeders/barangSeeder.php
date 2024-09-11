<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 1,
                'barang_nama' => 'Handphone',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 2,
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 3,
                'barang_nama' => 'Speaker',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 4,
                'barang_nama' => 'Kasur',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 5,
                'barang_nama' => 'Meja',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 6,
                'barang_nama' => 'Kursi',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 7,
                'barang_nama' => 'Mobil',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 8,
                'barang_nama' => 'Motor',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 9,
                'barang_nama' => 'Bus',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 10,
                'barang_nama' => 'Barbie',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 11,
                'barang_nama' => 'Hotwheels',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 12,
                'barang_nama' => 'Robot',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 13,
                'barang_nama' => 'Pecel',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 14,
                'barang_nama' => 'Rawon',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 15,
                'barang_nama' => 'Soto',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
