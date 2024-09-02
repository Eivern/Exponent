<!DOCTYPE html>
<html lang="en" class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exponent Team offers expert web development services, coding courses, and consultation on custom software solutions, system architecture, and performance optimization. Join our vibrant community and enhance your skills through competitions and weekly challenges.">
    <meta name="keywords" content="web development, coding courses, custom software solutions, system architecture, performance optimization, tech consultation, Exponent Team, code competition, coding challenges, tech community, web development services">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/exponent-light.png') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-funny-egg">
    @include('partials.navbar')
    <div class="pt-20 min-h-60">
        @yield('main')
    </div>
    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded',(e)=>{
            AOS.init()
        })
    </script>
</body>
</html>