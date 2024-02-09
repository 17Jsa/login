<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @yield('scripts')
    <title>@yield('title')</title>
</head>
<body>
    <div class="content">
        <div class="line-vino"></div>
        <div class="border-withs"><div class="border-relleno"></div></div>
        <div class="icon"><img src="{{ asset('img/img/icon.png') }}" alt=""></div>
        <div class="left">
            <div class="logo"><img src="{{ asset ('img/img/Logo.png')}}" alt=""></div>
            <div class="left-content">
                <div class="left-list">
                    <div class="text-left">
                        <ul>
                            <li><a href="admin">Tablas</a></li>
                            <li><a href="#">Edicion</a></li>
                            <li><a href="galeria">Galeria</a></li>
                            <li><a href="envios">Envios</a></li>
                            <li><a href="graficos">Graficos</a></li>
                        </ul>
                        
                    </div>
                    <div class="end-left"><p>© Asoagrotambo 2013 - 2024</p></div>
                </div>
                <div class="left-line"></div>
            </div>
        </div>
        <div class="content-center">
            @yield('content')
        </div>
        </div>
    </div>
</body>
</html>