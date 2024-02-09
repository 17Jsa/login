<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js')}}" ></script>
    <title>Lista con Recuadro</title>
</head>
<body>
    <a href="index">
        <div class="cata-icon"><img src="{{ asset('img/Catalogo/icon.png')}} " alt=""></div>
    </a>
    <a href="">
        <div class="cata-logo"><img src="{{ asset('img/Catalogo/logo.png')}} " alt=""></div>
    </a>
    <div class="cata-cotent">
        <div class="wall-info" style="background-image: url('{{ asset('img/Wall-cata.jpg') }}') "></div>
        <div class="degra-cata"></div>
        <div class="cata-list">
            <ul cata-list-ul>
                @foreach($Catalogo as $key )
                <li
                    data-titulo="{{ $key->name}}"
                    data-texto="{{$key->Descripcion}}"
                    data-imagen="{{asset('img/Catalogo/'.$key->Imagenes)}}"
                    onclick="mostrarRecuadro(this)"
                >{{ $key->name }}</li>
                @endforeach
    
            </ul>
        </div>
    </div>
    <div class="recuadro" id="recuadro"></div>
</body>
</html>
