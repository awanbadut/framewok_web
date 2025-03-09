<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title','TI')</title>
    <style>
        main >.container {
            padding: 60px 15px 0;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    @include('akademik.layouts.header1')

    {{-- bagian ini akan diisi oleh konten --}}

    <main class=flex-shrink-0>
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('akademik.layouts.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>