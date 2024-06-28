<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ini judul</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="{{Vite::asset('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{Vite::asset('resources/css/app.css')}}">
</head>
<header>
@include('layouts.nav')
</header>
<body>
    @yield('content')
    @vite('resources/js/app.js')
</body>
<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js"crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>