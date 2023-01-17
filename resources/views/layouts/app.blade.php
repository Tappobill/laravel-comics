<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo-pagina')</title>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
</head>

<body>
    <header>
        @include('components.header')

    </header>
    <main class="black">
        @yield('main-content')
        @include('components.main')
    </main>
    <footer>
        @include('components.footer')
    </footer>



    <script src=" {{ asset('js/app.js') }} "></script>
</body>

</html>
