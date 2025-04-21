<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>evenements</title>
</head>
<body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav class="navbar">
                @include('components.navbar.navbar')
            </nav>

            @yield('content')


            <footer >
                @include('components.navbar.footer')
            </footer>
</body>
</html>