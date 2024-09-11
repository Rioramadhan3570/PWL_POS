<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 1,
                'supplier_nama' => 'Putra Jaya',
                'supplier_alamat' => 'Malang',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 2,
                'supplier_nama' => 'Eka Jaya',
                'supplier_alamat' => 'Pasuruan',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 3,
                'supplier_nama' => 'Solikhin Jaya',
                'supplier_alamat' => 'Sidoarjo',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
