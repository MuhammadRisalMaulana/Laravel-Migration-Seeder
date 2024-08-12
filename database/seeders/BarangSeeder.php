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
        //
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'ELEC001', 'harga_beli' => 4000000, 'harga_jual' => 4500000, 'nama_barang' => 'Smartphone'],
            ['kategori_id' => 1, 'barang_kode' => 'ELEC002', 'harga_beli' => 7000000, 'harga_jual' => 7500000, 'nama_barang' => 'Laptop'],
            ['kategori_id' => 2, 'barang_kode' => 'FASH001', 'harga_beli' => 50000, 'harga_jual' => 75000, 'nama_barang' => 'Kaos'],
            ['kategori_id' => 2, 'barang_kode' => 'FASH002', 'harga_beli' => 150000, 'harga_jual' => 200000, 'nama_barang' => 'Sepatu'],
            ['kategori_id' => 3, 'barang_kode' => 'HEAL001', 'harga_beli' => 10000, 'harga_jual' => 15000, 'nama_barang' => 'Vitamin C'],
            ['kategori_id' => 4, 'barang_kode' => 'SPRT001', 'harga_beli' => 500000, 'harga_jual' => 600000, 'nama_barang' => 'Alat Olahraga'],
            ['kategori_id' => 4, 'barang_kode' => 'SPRT002', 'harga_beli' => 1500000, 'harga_jual' => 1750000, 'nama_barang' => 'Sepeda'],
            ['kategori_id' => 5, 'barang_kode' => 'HOME001', 'harga_beli' => 200000, 'harga_jual' => 250000, 'nama_barang' => 'Kursi'],
            ['kategori_id' => 5, 'barang_kode' => 'HOME002', 'harga_beli' => 500000, 'harga_jual' => 600000, 'nama_barang' => 'Meja'],
            ['kategori_id' => 5, 'barang_kode' => 'HOME003', 'harga_beli' => 100000, 'harga_jual' => 125000, 'nama_barang' => 'Lampu'],
        ];
        DB::table('m_barang')->insert($data);
    }
}
