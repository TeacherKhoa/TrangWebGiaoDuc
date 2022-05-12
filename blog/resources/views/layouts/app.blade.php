<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('link')
</head>
<body>
@yield('content')
@if(count($errors) > 0)
    <div id="messError" style="display: none;"> {{ json_encode($errors) }}</div>
@endif
@if (session('success'))
    <div id="messSuccess" style="display: none;"> {{ json_encode(session('success')) }}</div>
@endif
</body>
@yield('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Your jquery code
        var stringMess = $("#messError").html();
        if (stringMess) {
            var ErrorMess = JSON.parse(stringMess)
            ErrorMess.forEach(mess => toastr.error(mess));
        }
        var stringMess = $("#messSuccess").html();
        if (stringMess) {
            var messSuccess = JSON.parse(stringMess)
            toastr.success(messSuccess)
        }
    });
</script>
</html>
