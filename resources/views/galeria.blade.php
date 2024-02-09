<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Galeria</title>
    <script src="{{ asset('js/script.js')}}"></script>
</head>

<body>
    <section class="galeria">
        <div class="blur">
            <div class="slider-container">
                <div class="slider" id="slider-1">
                        <div class="box-1">
                            <img src="{{ asset('img/Galeria/1-1.jpg')}}" alt="">
                        </div>
                        <div class="box-2">
                            <img src="{{ asset('img/Galeria/1-2.jpg')}}" alt="">
                        </div>
                        <div class="box-3">
                            <img src="{{ asset('img/Galeria/1-3.jpg')}}" alt="">
                        </div>
                        <div class="box-4">
                            <img src="{{ asset('img/Galeria/1-4.jpg')}}" alt="">
                        </div>
                        <div class="box-5">
                            <img src="{{ asset('img/Galeria/1-5.jpg')}}" alt="">
                        </div>
                        <div class="box-6">
                            <img src="{{ asset('img/Galeria/1-6.jpg')}}" alt="">
                        </div>
                        <div class="box-7">
                            <img src="{{ asset('img/Galeria/1-7.jpg')}}" alt="">
                        </div>
                        <div class="box-8">
                            <img src="{{ asset('img/Galeria/1-8.jpg')}}" alt="">
                        </div>
                        <div class="box-9">
                            <img src="{{ asset('img/Galeria/1-9.jpg')}}" alt="">
                        </div>
                </div>

                <div class="slider" id="slider-2">
                    <div class="box-2-1">
                        <img src="{{ asset('img/Galeria/2-1.jpg')}}" alt="">
                    </div>
                    <div class="box-2-2">
                        <img src="{{ asset('img/Galeria/2-2.jpg')}}" alt="">
                    </div>
                    <div class="box-2-3">
                        <img src="{{ asset('img/Galeria/2-3.jpg')}}" alt="">
                    </div>
                    <div class="box-2-4">
                        <img src="{{ asset('img/Galeria/2-4.jpg')}}" alt="">
                    </div>
                    <div class="box-2-5">
                        <img src="{{ asset('img/Galeria/2-5.jpg')}}" alt="">
                    </div>
                    <div class="box-2-6">
                        <img src="{{ asset('img/Galeria/2-6.jpg')}}" alt="">
                    </div>
                    <div class="box-2-7">
                        <img src="{{ asset('img/Galeria/2-7.jpg')}}" alt="">
                    </div>
                    <div class="box-2-8">
                        <img src="{{ asset('img/Galeria/2-8.jpg')}}" alt="">
                    </div>
                    <div class="box-2-9">
                        <img src="{{ asset('img/Galeria/2-9.jpg')}}" alt="">
                    </div>
                </div>
                
                <div class="slider" id="slider-3">
                    <div class="box-3-1">
                        <img src="{{ asset('img/Galeria/3-1.jpg')}}" alt="">
                    </div>
                    <div class="box-3-2">
                        <img src="{{ asset('img/Galeria/3-2.jpg')}}" alt="">
                    </div>
                    <div class="box-3-3">
                        <img src="{{ asset('img/Galeria/3-3.jpg')}}" alt="">
                    </div>
                    <div class="box-3-4">
                        <img src="{{ asset('img/Galeria/3-4.jpg')}}" alt="">
                    </div>
                    <div class="box-3-5">
                        <img src="{{ asset('img/Galeria/3-5.jpg')}}" alt="">
                    </div>
                    <div class="box-3-6">
                        <img src="{{ asset('img/Galeria/3-6.jpg')}}" alt="">
                    </div>
                    <div class="box-3-7">
                        <img src="{{ asset('img/Galeria/3-7.jpg')}}" alt="">
                    </div>
                    <div class="box-3-8">
                        <img src="{{ asset('img/Galeria/3-8.jpg')}}" alt="">
                    </div>
                    <div class="box-3-9">
                        <img src="{{ asset('img/Galeria/3-9.jpg')}}" alt="">
                    </div>
                    <div class="box-3-10">
                        <img src="{{ asset('img/Galeria/3-10.jpg')}}" alt="">
                    </div>
                    <div class="box-3-11">
                        <img src="{{ asset('img/Galeria/3-11.jpg')}}" alt="">
                    </div>
                </div>

                <div class="controls-container">
                    <a href="index" class="logo-button">
                        <img src="{{ asset('img/Galeria/logo.png')}}" alt="Logo">
                    </a>
                
                    <button onclick="changeSlider(1)" class="slider-button"></button>
                    <button onclick="changeSlider(2)" class="slider-button"></button>
                    <button onclick="changeSlider(3)" class="slider-button"></button>
                </div>
                
            </div>
        </div>
    </section>

   
    
</body>

</html>