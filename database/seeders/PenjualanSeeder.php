<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' =>1,
                'user_id' =>3,
                'pembeli' => 'Fitri',
                'penjualan_kode' => 'J1',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>2,
                'user_id' =>3,
                'pembeli' => 'Amanda',
                'penjualan_kode' => 'J2',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>3,
                'user_id' =>3,
                'pembeli' => 'Taufiq',
                'penjualan_kode' => 'J3',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>4,
                'user_id' =>3,
                'pembeli' => 'Naufal',
                'penjualan_kode' => 'J4',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>5,
                'user_id' =>3,
                'pembeli' => 'Reynal',
                'penjualan_kode' => 'J5',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>6,
                'user_id' =>3,
                'pembeli' => 'Triyana',
                'penjualan_kode' => 'J6',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>7,
                'user_id' =>3,
                'pembeli' => 'Icha',
                'penjualan_kode' => 'J7',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>8,
                'user_id' =>3,
                'pembeli' => 'Trio',
                'penjualan_kode' => 'J8',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>9,
                'user_id' =>3,
                'pembeli' => 'Dani',
                'penjualan_kode' => 'J9',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
            [
                'penjualan_id' =>10,
                'user_id' =>3,
                'pembeli' => 'Azka',
                'penjualan_kode' => 'J10',
                'penjualan_tanggal' => '2024-03-07 06:04:49',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
