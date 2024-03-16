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
        $data = [
            [
                'barang_id' =>1,
                'kategori_id' =>1,
                'barang_kode' => 'A01',
                'barang_nama' => 'Oreo',
                'harga_beli' => 15000,
                'harga_jual' => 18000
            ],
            [
                'barang_id' =>2,
                'kategori_id' =>1,
                'barang_kode' => 'A02',
                'barang_nama' => 'SilverQueen',
                'harga_beli' => 7000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' =>3,
                'kategori_id' =>2,
                'barang_kode' => 'A03',
                'barang_nama' => 'Susu Indomilk',
                'harga_beli' => 5000,
                'harga_jual' => 7000
            ],
            [
                'barang_id' =>4,
                'kategori_id' =>2,
                'barang_kode' => 'A04',
                'barang_nama' => 'Frestea',
                'harga_beli' => 5000,
                'harga_jual' => 7500
            ],
            [
                'barang_id' =>5,
                'kategori_id' =>3,
                'barang_kode' => 'A05',
                'barang_nama' => 'Baju Anak',
                'harga_beli' => 20000,
                'harga_jual' => 25000
            ],
            [
                'barang_id' =>6,
                'kategori_id' =>3,
                'barang_kode' => 'A06',
                'barang_nama' => 'Kaos Dalam',
                'harga_beli' => 25000,
                'harga_jual' => 30000
            ],
            [
                'barang_id' =>7,
                'kategori_id' =>4,
                'barang_kode' => 'A07',
                'barang_nama' => 'Freshcare',
                'harga_beli' => 20000,
                'harga_jual' => 23000
            ],
            [
                'barang_id' =>8,
                'kategori_id' =>4,
                'barang_kode' => 'A08',
                'barang_nama' => 'Panadol',
                'harga_beli' => 7000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' =>9,
                'kategori_id' =>5,
                'barang_kode' => 'A09',
                'barang_nama' => 'Kampu LED Philips',
                'harga_beli' => 20000,
                'harga_jual' => 30000
            ],
            [
                'barang_id' =>10,
                'kategori_id' =>5,
                'barang_kode' => 'A010',
                'barang_nama' => 'Blender Panasonic',
                'harga_beli' => 30000,
                'harga_jual' => 40000
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
