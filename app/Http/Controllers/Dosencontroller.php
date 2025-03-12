<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosencontroller extends Controller
{
    public function index()
    {
        $arrdosen = ['Jokowi', 'Prabowo', 'Anies', 'Ridwan', 'Ganjar'];
        return view('akademik.layouts.dosen', ['dsn' => $arrdosen]);
    }
}
