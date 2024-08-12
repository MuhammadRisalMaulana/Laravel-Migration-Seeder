<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2024-08-01 08:00:00', 'stok_jumlah' => 50],
            ['barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2024-08-02 08:00:00', 'stok_jumlah' => 30],
            ['barang_id' => 3, 'user_id' => 2, 'stok_tanggal' => '2024-08-03 08:00:00', 'stok_jumlah' => 100],
            ['barang_id' => 4, 'user_id' => 2, 'stok_tanggal' => '2024-08-04 08:00:00', 'stok_jumlah' => 25],
            ['barang_id' => 5, 'user_id' => 3, 'stok_tanggal' => '2024-08-05 08:00:00', 'stok_jumlah' => 75],
            ['barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => '2024-08-06 08:00:00', 'stok_jumlah' => 60],
            ['barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => '2024-08-07 08:00:00', 'stok_jumlah' => 40],
            ['barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => '2024-08-08 08:00:00', 'stok_jumlah' => 15],
            ['barang_id' => 9, 'user_id' => 2, 'stok_tanggal' => '2024-08-09 08:00:00', 'stok_jumlah' => 10],
            ['barang_id' => 10, 'user_id' => 2, 'stok_tanggal' => '2024-08-10 08:00:00', 'stok_jumlah' => 20],
        ];
        DB::table('t_stok')->insert($data);
    }
}
