<?php

namespace App\Http\Controllers;
use App\Models\Imagen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Http\Requests\imgvalidate; 


class Editar extends Controller
{
    public function header(imgvalidate $request, $edi){ 

            $edicion = Imagen::find($edi);
            
            if ($request->hasFile('file')) {
                $fileToDelete = public_path('pu-resources/img/'.$edicion->imagen);

                unlink($fileToDelete);
        
                $name=time();
                $request->file->move(public_path('pu-resources/img/'),$name);
                
                $edicion->imagen = $name;
            }
            if ($request->filled('name')){
            $edicion->Texto = $request->Texto;
            }
            $edicion->save();
            
            return redirect()->route('index');
        }
        public function aliados(imgvalidate $request, $edi){
            $edicion = Imagen::find($edi);
            if ($request->hasFile('file')) {
                $fileToDelete = public_path('pu-resources/img/'.$edicion->imagen);
                unlink($fileToDelete);

                $name=time();
                $request->file->move(public_path('pu-resources/img/'),$name);
                $edicion->imagen = $name;

            }
            if($request->hasFile('Texto_2')){
                $leatoria = Str::random(3);
                $fileToDelete1 = public_path('pu-resources/img/'.$edicion->Texto_2);
                unlink($fileToDelete1);
                $name1=time().$leatoria;
                $request->file('Texto_2')->move(public_path('pu-resources/img/'),$name1);
                $edicion->Texto_2 = $name1;
                
            }
            if ($request->filled('name')){
            $edicion->Texto = $request->Texto;
            }
            $edicion->save();
            
            return redirect()->route('index');
        }
        public function gale(Request $request, $edi){
            
            $edicion = Imagen::find($edi);
            if ($request->hasFile('file')) {
                $fileToDelete = public_path('pu-resources/img/'.$edicion->imagen);
                unlink($fileToDelete);
                $name=time();
                $request->file->move(public_path('pu-resources/img/'),$name);
                $edicion->imagen = $name;

            }
            if($request->hasFile('Texto_2')){
                $leatoria = Str::random(3);
                $fileToDelete1 = public_path('pu-resources/img/'.$edicion->Texto_2);
                unlink($fileToDelete1);
                $name1=time().$leatoria;
                $request->file('Texto_2')->move(public_path('pu-resources/img/'),$name1);
                $edicion->Texto_2 = $name1;
                
            }
            if($request->hasFile('name')){

                $leatoria = Str::random(4);
                $fileToDelete1 = public_path('pu-resources/img/'.$edicion->Texto_2);
                unlink($fileToDelete1);
                $name1=time().$leatoria;
                $request->file('name')->move(public_path('pu-resources/img/'),$name1);
                $edicion->name = $name1;
                
            }
            
            $edicion->save();
            
            return redirect()->route('index');
        }
        
        public function edinosotros(Request $request, $edi){
            
            $edicion = Imagen::find($edi);
            
            if ($request->hasFile('file')) {
                $fileToDelete = public_path('pu-resources/img/'.$edicion->imagen);
                unlink($fileToDelete);
                $name=time();
                $request->file->move(public_path('pu-resources/img/'),$name);
                $edicion->imagen = $name;
            }
            if ($request->filled('name')){
            $edicion->Texto = $request->Texto;
            }
            $edicion->save();
            
            return redirect()->route('index'); 
        }
        public function footer(Request $request, $edi){
            
            $edicion = Imagen::find($edi);
            if ($request->filled('name')){$edicion->name = $request->name;}
            if ($request->filled('Texto_2')){ $edicion->Texto_2 = $request->Texto_2; }
            if ($request->filled('Texto')){$edicion->Texto = $request->Texto;}
            $edicion->save();
            return redirect()->route('index'); 
        }
        public function Q_Somos(Request $request , $edi){
            $edicion = Imagen::find($edi);
            if ($request->hasFile('file')) {
                
                //$fileToDelete = public_path('pu-resources/img/Q-Somos'.$edicion->imagen);
                //unlink($fileToDelete);
                $name=time();
                $request->file->move(public_path('pu-resources/img/Q-Somos'),$name);
                $edicion->imagen = $name;
            }
            if ($request->filled('Texto')){
            $edicion->Texto = $request->Texto;
            }
            $edicion->save();
            
            return redirect()->route('index');
        }
}
