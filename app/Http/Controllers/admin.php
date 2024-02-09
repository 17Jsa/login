<?php

namespace App\Http\Controllers;
use App\Models\Imagen;
use App\Models\Catalogo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function edicion(Request $request){
        $edi = Imagen::All();
        return view ('Admin.edicion',compact('edi'));
    } 
    public function edicion2(){
        $Catalogo = Catalogo::all();
        return view ('Admin.edicion-2',compact('Catalogo'));
    }
    public function edicion3(){
        $edi = Imagen::All();
        return view ('Admin.edicion-3',compact('edi') );
    }
    public function appedi(){
        return view ('Admin.appedi');
    }
}
