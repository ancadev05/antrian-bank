<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap5/css/bootstrap.css') }}" />
    <!-- icon bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <!-- costum layout -->
    <link rel="stylesheet" href="{{ asset('assets/css/ambil-antrian.css') }}" />
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body class="bg-light">
    
    <div class="border m-2 ">
        <span class="d-block text-center" id="date"></span>
        <span class="d-block text-center" id="clock"></span>
    </div>

    @yield('antrian-ambil')

    @yield('teller')


    <!-- bootstrap 5 -->
    <script src="{{ asset('assets/vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
    {{-- script --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('script')
</body>

</html>
