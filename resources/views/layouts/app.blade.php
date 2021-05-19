<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="container mt-3">
        @yield('contain')
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
