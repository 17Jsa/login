<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios/cliente.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wallpaper" style="background-image: linear-gradient(#0e1211f0, #0e1211f0),  url('{{asset('img/asociados/IMG-20230309-WA0038.jpg')}}')">
        <div class="content">
            <div class="logo">
                <img src="{{ asset('img/cata/logo.png') }}" alt="">
            </div>
            <form action="{{ route('cliente.store')}} " method="post">
            @csrf
            <div class="formulario">
                <div class="cliente">
                    <div class="parte-1">
                        <div class="cliente-nombre">
                            <input type="text" id="nombre" name="nombre" class="input-nombre" placeholder="Nombre" required>
                        </div>
                        <div class="cliente-identificacion">
                            <input type="text" id="identificacion" name="identificacion" class="input-identificacion" placeholder="Identificación" required>
                        </div>
                    </div>
                    <div class="parte2">
                        <div class="cliente-email">
                            <input type="email" id="email" name="email" class="input-email" placeholder="Correo Electrónico" required>
                        </div>
                    </div>
                    <div class="parte-3">
                        <div class="cliente-telefono">
                            <input type="tel" id="telefono" name="telefono" class="input-telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="cliente-direccion">
                            <input type="text" id="direccion" name="direccion" class="input-direccion" placeholder="Dirección" required>
                        </div>
                    </div>
                    <div class="parte-4">
                        <div class="cliente-nombre-empresa">
                            <input type="text" id="nombre_empresa" name="nombre_empresa" class="input-nombre-empresa" placeholder="Nombre Empresa" required>
                        </div>
                    </div>
                    <div class="parte-5">
                        <div class="cliente-contrasena">
                            <input type="password" id="contrasena" name="contrasena" class="input-contrasena" placeholder="Contraseña" required>
                        </div>
                    </div>
                </div>
                <div class="contra">
                    <button type="submit" class="guardar">Guardar</button>
                </div>
            </div>
            </form>
        </div>
        <div class="icon">
            <div class="imagen"><img src="img/icon.png" alt=""></div>
            <div class="texto"><p>© Asoagrotambo 2013 - 2024</p></div>
        </div>
    </div>
</body>
</html>
