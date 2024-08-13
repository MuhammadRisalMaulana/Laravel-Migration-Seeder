<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    //
    public function index () {
        // tambah data
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)' , ['CUS' , 'Pelanggan' , now()]);
        // return 'insert data baru berhasil';

        // update data
        // $row = DB::insert('update m_level set level_nama = ? where level_kode = ?' , ['Custumer' , 'CUS']);
        //return 'Update data berhasil. Jumlah data yang diupdate: ' . $row. 'baris';

        // menghapus data
        // $row = DB::delete('delete from m_level where level_kode = ?' , ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang di hapus: ' . $row. 'baris';

        // menampilkan data
        $data = DB::select('select * from m_level');
        return view( 'level',['data'=>$data]);
    }
}