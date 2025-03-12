<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prodicontroller extends Controller
{
    public function index($jurusan, $prodi)
    {
        $data = [$jurusan, $prodi];
        return view('akademik.layouts.prodi')->with('data', $data);
    }
}
