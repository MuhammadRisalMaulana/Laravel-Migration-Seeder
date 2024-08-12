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
        //
        $data = [
            ['user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'PJ001', 'penjualan_tanggal' => '2024-08-01 10:00:00'],
            ['user_id' => 2, 'pembeli' => 'Jane Smith', 'penjualan_kode' => 'PJ002', 'penjualan_tanggal' => '2024-08-02 11:00:00'],
            ['user_id' => 3, 'pembeli' => 'Michael Brown', 'penjualan_kode' => 'PJ003', 'penjualan_tanggal' => '2024-08-03 12:00:00'],
            ['user_id' => 1, 'pembeli' => 'Emily White', 'penjualan_kode' => 'PJ004', 'penjualan_tanggal' => '2024-08-04 13:00:00'],
            ['user_id' => 2, 'pembeli' => 'David Johnson', 'penjualan_kode' => 'PJ005', 'penjualan_tanggal' => '2024-08-05 14:00:00'],
            ['user_id' => 3, 'pembeli' => 'Sarah Green', 'penjualan_kode' => 'PJ006', 'penjualan_tanggal' => '2024-08-06 15:00:00'],
            ['user_id' => 1, 'pembeli' => 'Chris Martin', 'penjualan_kode' => 'PJ007', 'penjualan_tanggal' => '2024-08-07 16:00:00'],
            ['user_id' => 2, 'pembeli' => 'Olivia Adams', 'penjualan_kode' => 'PJ008', 'penjualan_tanggal' => '2024-08-08 17:00:00'],
            ['user_id' => 3, 'pembeli' => 'Matthew Wilson', 'penjualan_kode' => 'PJ009', 'penjualan_tanggal' => '2024-08-09 18:00:00'],
            ['user_id' => 1, 'pembeli' => 'Laura King', 'penjualan_kode' => 'PJ010', 'penjualan_tanggal' => '2024-08-10 19:00:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
