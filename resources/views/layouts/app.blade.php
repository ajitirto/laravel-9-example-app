<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi - HRIS</title>
</head>
<body>
    <div class="">
        @include('layouts.navigation')
        @yield('content')
        @include('layouts.footer')
    </div>
    @stack('prepend-script')
    @include('layouts.script')
    @stack('addon-script')
</body>
</html>
