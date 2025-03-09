<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('akademik.home');
});

// Route::get('/mahasiswa', function () {
//     return view('akademik.mahasiswa');
// });

Route::get('/profil', function () {
    echo '<h1>Profil Saya</h1>';
    echo '<p>Nama Saya : Zikry Kurniawan</p>';
    return '<p>Saya adalah seorang programmer</p>';
});

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return '<p>Belajar Laravel itu menyenangkan <b>' . $nama .'</b></p>';
// });

// Route::get('/mahasiswa/{nama}/{nim}', function ($nama, $nim) {
//     return '<p>Belajar Laravel itu menyenangkan <b>' . $nama .'</b> <br> NIM : ' . $nim . '</p>';
// });

// Route::get('/dosen/{nama?}/{nip?}', function ($a='admin', $b='123') {
//     return 'Nama Dosen : ' . $a . '<br>NIP : ' . $b;
// });
  
// Route::get('/user/{id}', function ($id) {
//     return 'Id user kamu : ' . $id;
// })->where('id', '[0-9]+');

// Route::get('/bukutamu', function () {
//     return '<h2>bukutamu</h2>';
// });
// Route::redirect('/guest-book', '/bukutamu');

// Route::prefix('/login')->group(function () {
//     Route::get('/mahasiswa', function () {
//         return 'Anda sedang login sebagai mahasiswa';
//     });
//     Route::get('/dosen', function () {
//         return 'Anda sedang login sebagai dosen';
//     });
//     Route::get('/superadmin', function () {
//         return 'Anda sedang login sebagai superadmin';
//     });
// });

Route::fallback(function () {
    return 'Maaf, alamat yang Anda cari tidak ditemukan bodoh';
});

// Route::get('/nilai_mahasiswa', function () {
//     $nama = 'Zikry Kurniawan';
//     $nim = '2311081042';
//     $total_nilai = 75;
//     return view('akademik.nilai_mahasiswa', compact('nama', 'nim', 'total_nilai'));
// });

// Route::get('/perulangan',function(){
//     return view('akademik.perulangan');
// });

// Route::get('/perulangan', function () {
//     $nama = 'Zikry Kurniawan';
//     $nim = '2311081042';
//     $total_nilai = [90, 80, 70, 60, 50];
//     return view('akademik.perulangan', compact('nama', 'nim', 'total_nilai'));
// });


Route::get('/mahasiswa',function(){
    $arrmhs=['Zikry kurniawan','lisa','jennie','rose','jisoo'];
    return view('akademik.layouts.mahasiswa',['mhs'=>$arrmhs]);
});

Route::get('/dosen',function(){
    $arrdosen=['Jokowi','Prabowo','Anies','Ridwan','Ganjar'];
    return view('akademik.layouts.dosen',['dsn'=>$arrdosen]);
});

Route::get('/pnp/{jurusan}/{prodi}',function($jurusan,$prodi){
    $data=[$jurusan,$prodi];
    return view('akademik.layouts.prodi')-> with('data',$data);
})->name('prodi');


