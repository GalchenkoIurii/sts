<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile-320.css') }}" media="(min-width: 320px)">

    <title>@yield('page-title')</title>

</head>
<body>

@yield('header')
@yield('content')
@yield('footer')

@yield('scripts')
</body>
</html>