@extends('Admin.appedi')
@section('title', 'edicio catalogo')
@section('scripts')
<script src=" {{ asset('js/scrip-edicion-2.js') }}"></script>
@endsection
@section('content')
            <div class="edicion" id="edicion">
                <div class="content-edicion">
                    <div class="edicion-top">
                        <div class="edicion-bar-vino"></div>
                        <div class="content-bar-edicion">
                            <ul class="horizontal-list" id="secciones-lista">
                                <li><a href="edicion">Principal</a></li>
                                <li><a href="#">Catalogo</a></li>
                                <li><a href="edicion-3">Somos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="edicion-center">
                        <div class="edicion-principal">
                            @foreach($Catalogo as $a)
                            <div class="inicio" id="{{ $a->name}}">
                                <form action="{{ route('catalogo.update', $a->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Texto Descriptico Del Producto - Banano</h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                Texto existente...
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="Descripcion"placeholder="Escribe tu nuevo texto aquí"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="edicion-imagen">
                                        <div class="Title-inicio"><h1>Imagen Del Producto </h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <p>IMAGEN </p>
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="Imagenes" type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="seguerencia">
                                        <div class="sugerencia-text"><p>⚠ Se recomienda que para cambiar la imagen de fondo la imagen tenga más alto que ancho, que casi le duplique Ejemplo: 4000x2000 px.</p></div>
                                        <button type="submit">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                            

                        </div>
                        <div class="edicion-lista">
                            <div class="lista-edicion">
                                <ul>
                                    @foreach($Catalogo as $a)
                                    <li onclick="mostrarSeccion('{{ $a->name }}')">{{ $a->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
    @endsection       