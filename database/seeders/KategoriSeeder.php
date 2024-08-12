<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['id' => 1 , 'kategori_kode' => 'ELTK' ,'kategori_nama' => 'Elektronik'],
            ['id' => 2 , 'kategori_kode' => 'FSHN' ,'kategori_nama' => 'Fashion'],
            ['id' => 3 , 'kategori_kode' => 'KSTN' ,'kategori_nama' => 'Kesehatan'],
            ['id' => 4 , 'kategori_kode' => 'OLGA' ,'kategori_nama' => 'Olahraga'],
            ['id' => 5 , 'kategori_kode' => 'PLRT' ,'kategori_nama' => 'Perlengkapan Rumah']
        ];
        DB::table('m_kategori')->insert($data);
    }
}
