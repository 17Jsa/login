<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="wall-contact" style="background-image: url('{{asset('img/contactos/Wall-contac.jpg')}}')">
        <div class="contact-icon"><a href="index"><img src="img/contactos/icon-2.png" alt=""></a></div>
        <div class="contact-content">
            <form action="{{ route('enviarCorreo') }}" method="POST" id="contact-form">
                @csrf
                <div class="contact-logo"><img src="img/contactos/logo.png" alt=""></div>
                <div class="contact-info">
                    <div class="empresa">
                        <input type="text" id="empresa" name="empresa" placeholder="Empresa" required>
                    </div>
                    <div class="info-persona">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="email">
                        <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="comentario">
                        <textarea id="comentario" name="comentario" placeholder="Escribe tu comentario aquí"
                            required></textarea>
                    </div>
                </div>
                <div class="contact-icons-content">
                    <div class="contact-icons">
                        <div class="icon-contact-info">
                            <img src="{{asset('img/contactos/carta.png')}}" alt="">
                            <p>bla bla bla</p>
                        </div>
                        <div class="icon-contact-info">
                            <img src="{{asset('img/contactos/ubicacion.png')}}" alt="">
                            <p>bla bla bla</p>
                        </div>
                        <div class="icon-contact-info">
                            <img src="{{asset('img/contactos/telefono.png')}}" alt="">
                            <p>bla bla bla</p>
                        </div>
                    </div>
                </div>
                <div class="contact-enviar">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
