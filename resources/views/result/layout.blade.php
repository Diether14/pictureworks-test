<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    <title>User Card - @yield('user_name')</title>
</head>
<body>
    <div id="wrapper">
        @yield('content')
        {{-- @include('footer'); --}}
    </div>
</body>
</html>