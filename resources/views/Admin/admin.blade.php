<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/admin.css') }} ">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <title>Admin</title>
</head>
<body>
    <div class="content">
        <div class="line-vino"></div>
        <div class="border-withs"><div class="border-relleno"></div></div>
        <div class="icon"><img src="img/icon.png" alt=""></div>
        <div class="left">
            <div class="logo"><img src="img/Logo.png" alt=""></div>
            <div class="left-content">
                <div class="left-list">
                    <div class="text-left">
                        <ul>
                            <li><a href="admin">Tablas</a></li>
                            <li><a href="edicion">Edicion</a></li>
                            <li><a href="galeria">Galeria</a></li>
                            <li><a href="envios">Envios</a></li>
                            <li><a href="graficos">Graficos</a></li>
                        </ul>
                    </div>
                    <div class="end-left"><p>© Asoagrotambo 2013 - 2024</p></div>
                </div>
                <div class="left-line"></div>
            </div>
        </div>
        
        <div class="tablas" id="tablas">
            <div class="line-vine-2"></div>
            <div class="graficos-content">
                <div class="parte-1">
                    <div class="space"></div>
                    <div class="bar"></div>
                </div>
                <div class="parte-2">
                    <div class="content-circle">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <div class="tablas-content">
                
                <div class="tablas-part-1" id="gestionar">
                    <div class="tables-content">
                        <div class="Title">
                            <h2>GESTIONAR</h2>
                            <div class="search-bar">
                                <input type="text" placeholder="Buscar...">
                                <button type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="gestionar-content">
                            <div class="gestionar-tablas">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Fecha Inicial</th>
                                            <th>Fecha Actualizada</th>
                                            <th>Cultivo</th>
                                            <th>Cantidad</th>
                                            <th>Asociado</th>
                                            <th>Columna 5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>
                                                <button class="edit"><img src="{{ asset('img/img/editar.png')}}" alt=""></button>
                                                <button class="delete"><img src="{{ asset('img/img/eliminar.png')}}" alt=""></button>
                                            </td>
                                        </tr>
                                        
                                </table>
                            </div>
                        </div>
                        <div class="extra"></div>
                    </div>
                </div>

                <div class="tablas-part-1" id="catalogo">
                    <div class="tables-content">
                        <div class="Title">
                            <h2>CATALOGO</h2>
                            <div class="search-bar">
                                <input type="text" placeholder="Buscar...">
                                <button type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="gestionar-content">
                            <div class="gestionar-tablas">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Tipo De Producto</th>
                                            <th>Informacion Basica</th>
                                            
                                            <th>Imagenes</th>
                                            <th>Columna 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Catalogo as $key )
                                        <tr>
                                            <td>{{$key->name}}</td>
                                            <td>{{$key->Descripcion}}</td>
                                           
                                            <td><img src="{{ asset('img/Catalogo/'.$key->Imagenes)}}" alt=""></td>
                                            <td>
                                                <button class="edit"><img src="{{ asset('img/img/editar.png')}}" alt=""></button>
                                                <button class="delete"><img src="{{ asset('img/img/eliminar.png')}}" alt=""></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="extra"><button type="button">Agregar</button></div>
                    </div>
                </div>

                <div class="tablas-part-1" id="cliente">
                    <div class="tables-content">
                        <div class="Title">
                            <h2>CLIENTE</h2>
                            <div class="search-bar">
                                <input type="text" placeholder="Buscar...">
                                <button type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="gestionar-content">
                            <div class="gestionar-tablas">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Identificacion</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Nombre Empresa</th>
                                            
                                            <th>Columna 5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cliente as $key)
                                        <tr>
                                            <td>{{$key->NOMBRE}}</td>
                                            <td>{{$key->identificacion}}</td>
                                            <td>{{$key->NUM_TELEFONO}}</td>
                                            <td>{{$key->EMAIL}}</td>
                                            <td>{{$key->DIRECCION}}</td>
                                            <td>{{$key->NOMBRE_EMPRESA}}</td>
                                            
                                            <td>
                                                <button class="edit"><img src="{{ asset('img/img/editar.png')}}" alt=""></button>
                                                <form action="{{ route('cliente.destroy',  $key->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  type="submit" class="delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este recurso?')"><img src="{{ asset('img/img/eliminar.png')}}" alt=""></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="extra"><button type="button"><a href=""></a></button></div>
                    </div>
                </div>

                <div class="tablas-part-1" id="Usuarios">
                    <div class="tables-content">
                        <div class="Title">
                            <h2>USUARIOS</h2>
                            <div class="search-bar">
                                <input type="text" placeholder="Buscar...">
                                <button type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="gestionar-content">
                            <div class="gestionar-tablas">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Identificacion</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($asociado as $key)
                                        <tr>
                                            <td>{{$key->name}}</td>
                                            <td>{{$key->Identificacion}}</td>
                                            <td>{{$key->num_telefono}}</td>
                                            <td>{{$key->email}}</td>
                                            <td>{{$key->Direccion}}</td>
                                            <td>
                                                <button class="edit"><img src="{{ asset('img/img/editar.png')}}" alt=""></button>
                                                <form action="{{ route('asociado.destroy',  $key->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  type="submit" class="delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este recurso?')"><img src="{{ asset('img/img/eliminar.png')}}" alt=""></button>
                                                </form>
                                            </td>s
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                        
                            <div class="extra"><button type="submit"><a href="asociado">Agregar</a></button></div>
                        
                    </div>
                </div>

                <div class="tablas-part-1" id="pedido">
                    <div class="tables-content">
                        <div class="Title">
                            <h2>PEDIDO</h2>
                            <div class="search-bar">
                                <input type="text" placeholder="Buscar...">
                                <button type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="gestionar-content">
                            <div class="gestionar-tablas">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>kilos</th>
                                            <th>Fecha_envio</th>
                                            <th>Cliente</th>
                                            <th>Producto</th>
                                            <th>Metodo Entrega</th>
                                            <th>Columna 5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pedi as $key )
                                        <tr>
                                            <td>{{$key->PESO}}</td>
                                            <td>{{$key->FECHA_DISPONIBLE}}</td>
                                            <td>{{$key->cliente->NOMBRE}}</td>
                                            <td>{{$key->catalogo->TIPO_PRODUCTO}}</td>
                                            <td>{{$key->METODO_ENTREGA}}</td>
                                            <td>
                                                <button class="edit"><img src="{{ asset('img/editar.png')}}" alt=""></button>
                                                <button class="delete"><img src="{{ asset('img/img/eliminar.png')}}" alt=""></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="extra"><button type="button">Agregar</button></div>
                    </div>
                </div>

                <div class="tablas-part-2">
                    <div class="view-content">
                        <div class="view"></div>
                    </div>
                    <div class="list-content">
                        <div class="list">
                            <ul>
                                <li><button type="button" onclick="mostrarSeccion('gestionar')">Gestionar</button></li>
                                <li><button type="button" onclick="mostrarSeccion('catalogo')">Catalogo</button></li>
                                <li><button type="button" onclick="mostrarSeccion('cliente')">Cliente</button></li>
                                <li><button type="button" onclick="mostrarSeccion('Usuarios')">Usuarios</button></li>
                                <li><button type="button" onclick="mostrarSeccion('pedido')">pedido</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
    </div>
</body>
</html>