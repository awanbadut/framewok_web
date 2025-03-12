<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
