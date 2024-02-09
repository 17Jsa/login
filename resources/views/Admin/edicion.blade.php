@extends('Admin.appedi')
        @section('title', 'Página de edicion')
        @section('scripts')
<script src=" {{ asset('js/scrip-edicion.js') }}"></script>
@endsection
            @section('content')
            <div class="edicion" id="edicion">
                <div class="content-edicion">
                    <div class="edicion-top">
                        <div class="edicion-bar-vino"></div>
                        <div class="content-bar-edicion">
                            <ul class="horizontal-list" id="secciones-lista">
                                <li><a href="#">Principal</a></li>
                                <li><a href="edicion-2">Catalogo</a></li>
                                <li><a href="edicion3">Somos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="edicion-center">
                        <div class="edicion-principal">
                            @foreach($edi as $item)
                            @if ($loop->first)
                            <div class="inicio" id="inicio">
                                
                                <form action="{{ route('header', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                
                                    {{-- Sección de edición de texto --}}
                                    <div class="edicion-texto">
                                        <div class="Title-inicio">
                                            <h1>Texto Descriptico Del Header</h1>
                                        </div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                <h1>{{ $item->Texto }}</h1>
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="Texto" placeholder="Escribe tu nuevo texto aquí">{{ $item->Texto }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    {{-- Sección de edición de imagen --}}
                                    <div class="edicion-imagen">
                                        <div class="Title-inicio">
                                            <h1>Imagen De Fondo del Header</h1>
                                        </div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <img src="{{ asset('img/' . $item->imagen) }}" alt="Imagen existente">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="file" type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="seguerencia">
                                        <div class="sugerencia-text">
                                            <p>⚠ Se recomienda que para cambiar la imagen de fondo la imagen tenga más ancho que alto, que casi le duplique Ejemplo: 4000x2500 px.</p>
                                        </div>
                                        <button type="submit">Guardar Cambios</button>
                                    </div>
                                </form>
                                
                                
                            </div>
                            
                            @elseif ($loop->iteration == 2)
                            <div class="inicio" id="aliados">
                                <form action="{{ route('aliados', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                
                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Texto Descriptico Del Los Aliados</h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                {{ $item->Texto }}
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="Texto" placeholder="Escribe tu nuevo texto aquí">{{ $item->Texto }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="edicion-imagen">
                                        <div class="Title-inicio"><h1>Imagen 1.</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="file" type="file"  accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="edicion-imagen">
                                        <div class="Title-inicio"><h1>Imagen 2.</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="Texto_2" type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="seguerencia">
                                        <div class="sugerencia-text"><p>⚠ Se recomienda que la imagen sea con las mismas medidas, ejemplo 1000x1000 y que la imagen sea PNG.</p></div>
                                        <button type="submit">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                            @elseif ($loop->iteration == 3)
                            <div class="inicio" id="galeria">
                                <form action="{{ route('gale', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="edicion-imagen">
                                        <p>⚠ Se recomienda que el ancho duplique el alto ejemplo 1000x500</p>
                                        <div class="Title-inicio"><h1>Imagen 1</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name='file' type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="edicion-imagen">
                                        <p>⚠ Se recomienda que el ancho sea levemente mayor que el alto ejemplo 1300x1000</p>
                                        <div class="Title-inicio"><h1>Imagen 2</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name='Texto_2' type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="edicion-imagen">
                                        <p>⚠ Se recomienda que el alto duplique el ancho ejemplo 500x1000</p>
                                        <div class="Title-inicio"><h1>Imagen 3</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name='name' type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <button type="submit">Guardar Cambios</button>
                                </form>
                            </div>
                            @elseif ($loop->iteration == 4)
                            <div class="inicio" id="somos">
                                <form action="{{ route('edinosotros', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Texto Descriptico De Quienes Somos</h1></div>
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
                                        <div class="Title-inicio"><h1>Imagen De Fondo del Quienes somos</h1></div>
                                        <div class="imagen-edicion">
                                            <div class="imagen-existente">
                                                <input type="file" accept="image/*">
                                            </div>
                                            <div class="nueva-imagen">
                                                <input name="file" type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="seguerencia">
                                        <div class="sugerencia-text"><p>⚠ Se recomienda que para la imagen de fondo se utiliza una imagen  de medidas iguales ejemplo: 1000x1000</div>
                                        <button type="submit">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                            @elseif ($loop->iteration == 5)
                            <div class="inicio" id="footer">
                                    <form action="{{ route('footer', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Contactos-Correo</h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                Texto existente...
                                            </div>
                                            <div class="nuevo-texto"> 
                                                <textarea name="Texto" placeholder="Escribe tu nuevo texto aquí"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Contactos-Numero</h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                Texto existente...
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="Texto_2"placeholder="Escribe tu nuevo texto aquí"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="edicion-texto">
                                        <div class="Title-inicio"><h1>Contactos-Direccion</h1></div>
                                        <div class="texto-edicion">
                                            <div class="texto-existente">
                                                Texto existente...
                                            </div>
                                            <div class="nuevo-texto">
                                                <textarea name="name" placeholder="Escribe tu nuevo texto aquí"></textarea>
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
                                    <li onclick="mostrarSeccion('inicio')">Inicio</li>
                                    <li onclick="mostrarSeccion('aliados')">Aliados</li>
                                    <li onclick="mostrarSeccion('galeria')">Galeria</li>
                                    <li onclick="mostrarSeccion('somos')">Somos</li>
                                    <li onclick="mostrarSeccion('footer')">Footer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            @endsection