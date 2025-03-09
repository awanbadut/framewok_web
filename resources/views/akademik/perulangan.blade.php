<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Perulangan</title>
</head>
<body>
    {{-- <h2>Perulangan for</h2>
    {{-- <div>
        <h2 class=col-md-6>
            @for ($i = 0; $i < 5; $i++)
                <li>Ini adalah perulangan ke {{ $i }}</li>
            @endfor
        </h2>
    </div> --}}
    {{-- <h2>Perulangan while</h2>
    <div class="col-md-6">
            php $i = 1 ?>
        @while ($i <= 5)
            <li>Ini adalah perulangan ke {{ $i }}</li>
            {{$i++}}
        @endwhile
    </div> --}}

    {{-- <h2>perulangan Foreach</h2>
    <div class=col-md-6> 
        <h4>
            Nama = {{ $nama }}, Nim = {{$nim}} 
        </h4>
        @foreach ( $total_nilai as $nilai)
            <div class="alert alert-info d-inline-block">Nilai = {{ $nilai }}</div>
            
        @endforeach
    </div> --}}

    <h2>Perulangan Forelse</h2>
    <div class="col-md-6">
        <h4>
            Nama = {{ $nama }}, Nim = {{$nim}} 
        </h4>
        @forelse ($total_nilai as $nilai)
            <div class="alert alert-info d-inline-block">Nilai = {{ $nilai }}</div>
        @empty
            <div class="alert alert-danger">Data Nilai Mahasiswa Kosong</div>
        @endforelse


</body>
</html>