<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','imobiliaria')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
</head>
<body>
    @section('menu')<br><br>
    <div>Menu Padrão</div><br>
    @show

    @yield('content')
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>