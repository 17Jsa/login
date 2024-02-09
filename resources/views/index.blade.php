<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <!-- Navbar-->
    <nav class="navbar">
        <a href="login" class="logo-1"><img src="{{ asset('img/logo-1.png')}} " alt="El logo"></a>
        <div class="links">
            <a href="#">Home</a>
            <a href="galeria">Galeria</a>
            <a href="catalogo1">Catalogo</a>
            <a href="contactos" class="btn-1"><button>Contactos</button></a>
        </div>
    </nav><!-- En tu archivo Blade -->
    @foreach($local as $item)
    @if ($loop->first)
    <header style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(' {{ asset('img/'.$item->imagen)}} ')">
        <div class="header-content">
            <h2>NOSOTROS</h2>
            <div class=" line"></div>
            
            <h1> {{ $item->Texto }}</h1>
        
        </div>
        <div class="blanco">
            <div class="blanco-letra"><p>lololo</p></div>
        </div>
    </header>
    @elseif ($loop->iteration == 2)
    <!--Aliados-->
    <div class="allies">
        <div class="fly-1"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-2"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-3"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-4"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-5"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-6"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        <div class="fly-7"><img src="{{ asset('img/Tomates-fly.png')}}" alt=""></div>
        
        <div href="#" class="icon-1">
            <img src="{{ asset('img/icon-1.png')}}" alt="logo 2">
        </div>

        <div class="aliados">
            <div class="aliados-1">
                <h1>ALIADOS</h1>
                <p>{{ $item->Texto}}                </p>
                <div class="aliado-img">
                    <a href="#" class="img-1"><img src="{{ asset('img/'.$item->imagen) }}" alt="mercacentro"></a>
                    <a href="#" class="img-2"><img src="{{ asset('img/'.$item->Texto_2) }}" alt="surtiplaza"></a>
                </div>
            </div>
            
            <div class="aliados-2">
            <img src="{{ asset('img/Tomate-principal.png') }}" alt="">
            </div>
        </div>
    </div>

    @elseif ($loop->iteration == 3)
    <!--Galeria-->
    <div class="galery">
        <div class="gale-titu">
            <h1>Galeria</h1>
        </div>
        <div class="galety-text">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Numquam, debitis? Nihil Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Numquam, debitis? Nihil Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Numquam, debitis? Nihil at maxime quis. Doloremque repellendus
                perspiciatis fugiat harum. Illo fugiat iure eius culpa molestias modi.
            </p>
            <a href="galeria" class="btn-2"><button>Mas Fotos.</button></a>
        </div>
        <div class="gale-img">
            <!--Recomendacion: Imagenes que tripliquen el ancho que la aultura, ejemplo:600x200-->
            <div class="g-img-1" style="background-image:url('{{ asset('img/'.$item->imagen) }}')"></div>

            <!--Recomendacion: Imagenes que sean un casi de mas mismas dimensiones, ejemplo:600x400-->
            <div class="g-img-2" style="background-image: url('{{ asset('img/'.$item->Texto_2)}}')"></div>

            <!--Recomendacion: Imagenes que el alto sea el doble que el ancho, ejemplo:800x400-->
            <div class="g-img-3" style="background-image: url('{{ asset('img/'.$item->name)}}')"></div>
        </div>
        <div class="linea-verde-1"></div>
        <div class="linea-verde-2"></div>
        <div class="linea-verde-3"></div>
    </div>
    <div class="icon-2">
        <img src="{{ asset('ima/icon-2.png') }}" alt="">
    </div>
    
    @elseif ($loop->iteration == 4)
    <!--Quienes Somos-->
    <div class="Q-Somos">
        <div class="somos-content">
            <h1>Quienes Somos?</h1>
                <p> {{ $item->Texto}}  </p>
                <a href="nosotros" class="btn-3"><button>Mas de nosotros</button></a>
        </div>
        <div class="linea-vino"></div>
        <div class="wall-somos" style="background-image: url('{{ asset('img/'.$item->imagen)}}')">
        </div>
    </div>
    <div class="icon-5">
        <img src="{{ asset('img/icon-5.png')}}" alt="">
    </div>
    @elseif ($loop->iteration == 5)
    <!--footer-->
    <footer>
        <div class="Info-1">
            <div class="logo-2">
                <img src="{{ asset('img/logo-2.png')}}" alt="">
            </div>
            <div class="info-footer-1">
                <h1>Titulo</h1>
                <p>Asociación Agropecuaria de la vereda el Tambo de Ibagué – Tolima</p>
            </div>
        </div>
       
        <div class="Info-2">
            <div class="conten">
                <div class="info-icon">
                    <div class="icon-footer">
                        <img src="{{asset('img/carta.png')}}" alt="">
                    </div>
                    <p> {{$item->Texto}} </p>
                </div>
                <br/>
                <div class="info-icon">
                    <div class="icon-footer">
                        <img src="{{asset('img/telefono.png')}}" alt="">
                    </div>
                    <p> {{$item->Texto_2}}</p>
                </div>
                <br/>
                <div class="info-icon">
                    <div class="icon-footer">
                        <img src="{{asset('img/ubicacion.png')}}" alt="">
                    </div>
                    <p>{{$item->name}} </p>
                </div>
            </div>
        </div>

        <div class="Info-3">
            <div class="icon-6">
                <img src="{{asset('img/icon-2.png')}}" alt="">
            </div>
            <div class="info-footer-3">
                <div class="info-foo3">
                <h1>Acerca del creador</h1>
                    
                </div>
            </div>
            <div class="info-extra">
                <p> © ASOAGROTAMBO 2018 - 2023 </p>
            </div>
        </div>
        @endif
        @endforeach
    </footer>
</html>