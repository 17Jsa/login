<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @foreach ($local as $item)
    @if ($loop->iteration == 6)
    <nav class="navbar-2">
        <a href="index" class="logo-3"><img src="{{asset('img/Q-Somos/icon.png')}}" alt="El logo"></a>
    </nav>
    <header class="header-2" style="background-image: linear-gradient(rgba(0, 0, 0, 0.453), rgba(0, 0, 0, 0.525)),url('{{ asset('img/Q-Somos/'.$item->imagen) }}')">
        <div class="header-content-2">
            <h2>NOSOTROS</h2>
            <div class="line-2"></div> 
            <h1>
                {{$item->Texto}}
            </h1>
        </div>
    </header>
    @elseif ($loop->iteration == 7)
    <div class="mas">
        <div class="titulo">
            <h2>Conoce mas</h2>
            <div class="line-2"></div>
        </div>
        <div class="cuadros">
            <div class="cuadro-info">
                <img src="{{asset('img/Q-Somos/'.$item->imagen)}}" alt="">
                <div class="info-cuadro">
                    <h1>Mision</h1>
                    <div class="line-3"></div>
                    <p> {{ $item->Texto }}</p>
                </div>
            </div>
         @endif
         @endforeach  
            <div class="cuadro-info">
                <img src="{{asset('img/Q-Somos/vision.jpg')}}" alt="">
                <div class="info-cuadro">
                    <h1>vision</h1>
                    <div class="line-3"></div>
                    <p> ea magni ad debitis temporibus accusamus, voluptatum adipisci!
                        id dolores hic illum ullam et ut delectus obcaecati modi eum dolor nisi,
                        ea magni ad debitis temporibus accusamus, voluptatum adipisci!</p>
                </div>
            </div>

            <div class="cuadro-info">
                <img src="{{asset('img/Q-Somos/valores.jp')}}g" alt="">
                <div class="info-cuadro">
                    <h1>valores</h1>
                    <div class="line-3"></div>
                    <p> ea magni ad debitis temporibus accusamus, voluptatum adipisci!
                        id dolores hic illum ullam et ut delectus obcaecati modi eum dolor nisi,
                        ea magni ad debitis temporibus accusamus, voluptatum adipisci!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="historia" style="background-image:url('{{ asset('img/Q-Somos/historia.jpg') }}') ">
        <div class="fondo"></div>
        <div class="linea"></div>
        <div class="history">
            <div class="history-content">
                <h1>HISTORIA</h1>
                <p> ea magni ad debitis temporibus accusamus, voluptatum adipisci!
                    id dolores hic illum ullam et ut delectus obcaecati modi eum dolor nisi,
                    ea magni ad debitis temporibus accusamus, voluptatum adipisci!
                </p>
            </div>
        </div>
    </div>
  
    <footer>
        <div class="Info-h-1">
            <div class="logo-h-2">
                <img src="{{  asset('img/Q-Somos/logo.png')}}" alt="">
            </div>
            <div class="info-footer-h-1">
                <h1>Titulo</h1>
                <p>Asociación Agropecuaria de la vereda el Tambo de Ibagué – Tolima</p>
            </div>
        </div>
        
        <div class="Info-2-h">
            <div class="conten">
                <div class="info-icon-h">
                    <div class="icon-footer-h">
                        <img src="{{asset('img/Q-Somos/carta.png')}} " alt="">
                    </div>
                    <p>bla bla bla bla bla</p>
                </div>
                <br/>
                <div class="info-icon-h">
                    <div class="icon-footer-h">
                        <img src="{{asset('img/Q-Somos/telefono-2.png')}}" alt="">
                    </div>
                    <p>bla bla bla bla bla</p>
                </div>
                <br/>
                <div class="info-icon-h">
                    <div class="icon-footer-h">
                        <img src="{{asset('img/Q-Somos/ubicacion.png')}}" alt="">
                    </div>
                    <p>bla bla bla bla bla</p>
                </div>
            </div>
        </div>

        <div class="Info-3-h">
            <div class="icon-6-h">
                <img src="{{asset('img/Q-Somos/icon.png')}}" alt="">
            </div>
            <div class="info-footer-3-h">
                <div class="info-foo3">
                <h1>Acerca del creador</h1>
                    <p>Conocido como el exito Huberth solo hizo esta pagina por la chimbiadera de sebastian, 
                    se aclara que al momento de hacer esto NO SE QUIERE ESCUCHAR QUEJAS cualquiere reclamo 
                    se lo tiene que decir a sebastian o a brayan :v</p>
                </div>
            </div>
            <div class="info-extra-h">
                <p> © ASOAGROTAMBO 2018 - 2023 </p>
            </div>
        </div>
    </footer>
</body>
</html>