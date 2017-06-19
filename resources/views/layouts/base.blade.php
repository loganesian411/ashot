<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ashot Kartalyan">
    <title>Ashot Kartalyan</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
    @yield('additional-css')
    
</head>

<body>
    <!-- Navbar -->
    <header style="background-image: url({{ asset('images/header.jpg') }})">
        @yield('header')
    </header>

    <!-- Body Content -->
    @yield('body')

    <!--Source Javascript scripts-->
    <!-- Load jQuery, Google Analytics, and Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>

    @yield('additional-js')
</body>

</html>