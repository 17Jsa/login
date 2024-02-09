<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    <title>Document</title>
</head>
<body>
    <div class="login-wall" style="background-image: linear-gradient(#0564317c, #0564317c), url('{{ asset('img/Login/Wallpaper.jpeg') }}')">
        <div class="login-icon"><a href="index"><img src="{{ asset('img/Login/Icon.png')}}" alt=""></a></div>
        <div class="login-content">
            <div class="logo-login"><img src="{{ asset('img/Login/Logo.png') }}" alt=""></div>
            <div class="login">
                <form action=" {{ route('acceder')}}  " method="post">
                    @csrf
                    <div class="input-container">
                        <div class="icon-container">
                            <img src="{{ asset('img/Login/cliente.png')}}" alt="">
                        </div>
                        <select id="role" name="role">
                            <option value="" disabled selected hidden></option>
                            <option value="cliente">Cliente</option>
                            <option value="asociado">Asociado</option>
                        </select>
                        <label for="role" >Rol</label>
                    </div>
                    <div class="input-container">
                        <div class="icon-container">
                            <img src="{{ asset('img/Login/usuario.png')}}" alt="">
                        </div>
                        <input type="text" id="username" name="identificacion" required>
                        
                    </div>
                    <div class="input-container">
                        <div class="icon-container">
                            <img src="{{ asset('img/Login/cerrar-con-llave.png')}}" alt="">
                        </div>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="login-boton">
                    <button type="submit">Iniciar Sesión</button>
                </div>  
                </form>
               
                <div class="text-login"><p> © ASOAGROTAMBO 2013 - 2024</p></div>
            </div>
        </div>
    </div>
</body>
</html>
