<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Rutas;
use App\Http\Controllers\CrudAsociado;
use App\Http\Controllers\admin;
use App\Http\Controllers\CrudCliente;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Editar;
use App\Http\Controllers\CrudCatalogo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // pagina principal 
Route::get('/login',[Controller::Class,'log'])->name('login');
Route::get('/',[Controller::class,'index']);
Route::get('/index',[Controller::Class,'index'])->name('index');
Route::get('/nosotros',[Controller::class,'nosotros'])->name('nosotros');
Route::get('/galeria',[Controller::class,'galeria'])->name('galeria');
Route::get('/catalogo1',[Controller::class,'catalogo'])->name('catalogo1');
Route::get('/contactos',[Controller::class,'contactos'])->name('contactos');
// login 
Route::post('/acceder',[Controller::Class,'acceder'])->name('acceder');
// enviar comentarios 
Route::post('/enviar-correo', [ContactoController::class, 'enviarCorreo'])->name('enviarCorreo');

Route::middleware(['auth'])->group(function () {
    //ADMIN
    Route::get('/admin',[Controller::class,'Admin'])->name('admin');
    Route::get('/appedi',[admin::class,'appedi'])->name('appedi');
    Route::get('/edicion',[admin::class,'edicion'])->name('edicion');
    Route::get('/edicion-2',[admin::class,'edicion2'])->name('edicion2');
    Route::get('/edicion-3',[admin::class,'edicion3'])->name('edicion3'); 
    Route::resource('/cliente', CrudCliente::class);
    Route::resource('/asociado', CrudAsociado::class);  
    Route::resource('/catalogo', CrudCatalogo::class);
    
    //EDICION
    Route::put('/header/{edi}', [Editar::class,'header'])->name('header');
    Route::put('/aliados/{edi}', [Editar::class,'aliados'])->name('aliados');
    Route::put('/gale/{edi}', [Editar::class,'gale'])->name('gale');
    Route::put('/edinosotros/{edi}', [Editar::class,'edinosotros'])->name('edinosotros');
    Route::put('/footer/{edi}', [Editar::class,'footer'])->name('footer');
    Route::put('/Q_Somos/{edi}', [Editar::class,'Q_Somos'])->name('Q_Somos');

    
});


