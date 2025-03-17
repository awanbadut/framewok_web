@extends('akademik.layouts.main')
@section('title')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->prodi }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
       