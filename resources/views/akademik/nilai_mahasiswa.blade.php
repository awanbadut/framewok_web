<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nilai mahasiswa</title>
</head>
<body>
    {{-- <div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <div class="col-md-6">
        @if (($total_nilai >= 80) and ($total_nilai == 100))
            <div class="alert alert-success" role="alert">
                Nilai anda : {{$total_nilai}} , Anda dinyatakan lulus
            </div>
        @else
            <div class="alert alert-danger" role="alert">
                Nilai anda : {{$total_nilai}} , Anda dinyatakan tidak lulus
            </div>
            
        @endif
        </div> --}}

        @switch($total_nilai)
            @case(0)
            <div class="alert alert-danger"> Sangat jelek </div>
                @break
            @case(70)
            <div class="alert alert-primary"> Memuaskan </div>
                @break
            @case(100)
            <div class="alert alert-success"> Sangat Memuaskan </div>
                @break
            @default
            <div class="alert alert-warning"> Nilai Tidak Valid!! </div>
                
        @endswitch
        <div class="col-md-6">
            <table class="table table-dark table-striped bordered">
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nim</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>{{$nama}}</td>
                    <td>{{$nim}}</td>
                    <td>{{$total_nilai}}</td>
                </tr>
               
            </table>
        </div>
    </div> 
</body>
</html>