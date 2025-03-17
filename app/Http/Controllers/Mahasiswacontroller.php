<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mahasiswacontroller extends Controller
{
    public function index()
    {
        $arrmhs = ['Zikry kurniawan', 'lisa', 'jennie', 'rose', 'jisoo'];
        return view('akademik.layouts.mahasiswa', ['mhs' => $arrmhs]);
    }


    public function show()
    {
        $nama = 'Zikry Kurniawan';
        $nim = '2311081042';
        $total_nilai = 100;

        return view('akademik.nilai_mahasiswa', compact('nama', 'nim', 'total_nilai'));
    }

    public function insertsql()
    {
       $query=DB::insert("INSERT INTO mahasiswas(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES ('2311081042','Zikry Kurniawan','Jakarta','2002-10-24','diniazik2006@gmail.com','TRPL','Jl. Cempaka Putih Tengah No. 12',now(),now())");
    }

    public function insertPrepared()
    {
        $query=DB::insert("INSERT INTO mahasiswas(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES (?,?,?,?,?,?,?,?,?)", ['2311081042','Zikry Kurniawan','Jakarta','2002-10-24','diniazik2006@gmail.com','TRPL','Jl. Cempaka Putih Tengah No. 12',now(),now()]);
    }

    public function insertBinding()
    {
        $query=DB::insert("INSERT INTO mahasiswas(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES (:nim,:nama_lengkap,:tempat_lahir,:tgl_lahir,:email,:prodi,:alamat,:created_at,:updated_at)", 
        [
            'nim'=>'2311081042',
            'nama_lengkap'=>'Sabrina naura mikayla',
            'tempat_lahir'=>'Agam',
            'tgl_lahir'=>'2022-5-20',
            'email'=>'diniazik2006@gmai.com',
            'prodi'=>'TK',
            'alamat'=>'Jl. Cempaka Putih Tengah No. 12',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }

    public function update()
    {
        $query=DB::update("UPDATE mahasiswas SET nama_lengkap='Koncek Kuah' WHERE nim='2311081042'");
    }

    public function delete()
    {
        $query=DB::delete("DELETE FROM mahasiswas WHERE tempat_lahir='Agam'");
    }

    public function select()
    {
        $query=DB::select("SELECT * FROM mahasiswas");
        dd($query);
    }

    public function selectTampil()
    {
        $query=DB::select("SELECT * FROM mahasiswas");
        echo "<h1>Daftar Mahasiswa</h1>";
        echo "<table border='10'>
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>";
        foreach($query as $q)
        {
            echo "<tr>
            <td>".$q->nim."</td>
            <td>".$q->nama_lengkap."</td>
            <td>".$q->tempat_lahir."</td>
            <td>".$q->tgl_lahir."</td>
            <td>".$q->email."</td>
            <td>".$q->prodi."</td>
            <td>".$q->alamat."</td>
            <td>".$q->created_at."</td>
            <td>".$q->updated_at."</td>
            </tr>";
        }
        echo "</table>";
    }

    public function selectView()
    {
        $query=DB::select("SELECT * FROM mahasiswas");
        return view('akademik.layouts.mahasiswa',['mahasiswas'=>$query]);
    }


    public function selectWhere()
    {
        $query=DB::select("SELECT * FROM mahasiswas WHERE prodi=? ORDER BY nim ASC",['TRPL']);
        return view('akademik.layouts.mahasiswa',['mahasiswas'=>$query]);
    }

    public function statment()
    {
        $query=DB::statement("TRUNCATE mahasiswas");
        return 'Tabel Mahasiswa telah dikosongkan';
    }
}
