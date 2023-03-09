<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('css/style.min.css?_v=20230227235809') }}">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="transition_disabled">

@include('navbars.main')

@yield('content')

<script src="{{ asset('js/app.min.js?_v=20230227235809') }}"></script>
</body>

</html>
