@extends('Admin.appedi')
@section('title', 'edicio catalogo')
@section('scripts')
<script src=" {{ asset('js/scrip-edicion-3.js') }}"></script>
@endsection
@section('content')

            <div class="edicion" id="edicion">
                <div class="content-edicion">
                    <div class="edicion-top">
                        <div class="edicion-bar-vino"></div>
                        <div class="content-bar-edicion">
                            <ul class="horizontal-list" id="secciones-lista">
                                <li><a href="edicion">Principal</a></li>
                                <li><a href="edicion-2">Catalogo</a></li>
                                <li><a href="#">Somos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="edicion-center">
                        <div class="edicion-principal">
                            @foreach($edi as $item)
                            @if ($loop->iteration > 5)
                            <div class="inicio" id="{{ $item->name }}">
                                <form action="{{ route('Q_Somos', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                
                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Texto Descriptico De {{ $item->name }} </h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                Texto existente...
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="Texto" placeholder="Escribe tu nuevo texto aquí"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="edicion-imagen">
                                        <div class="Title-inicio"><h1>Imagen De Fondo De {{ $item->name }}</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input name="file" type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="file" value="imagen" type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="seguerencia">
                                        <div class="sugerencia-text"><p>⚠ Se recomienda que para cambiar la imagen de fondo la imagen tenga más ancho que alto, que casi le duplique Ejemplo: 4000x2500 px.</p></div>
                                        <button type="submit">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="edicion-lista">
                            <div class="lista-edicion">
                                <ul>
                                    @foreach($edi as $a)
                                    @if ($loop->iteration > 5)
                                    <li onclick="mostrarSeccion('{{ $a->name }}')">{{ $a->name }}</li>
                                    @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        @endsection