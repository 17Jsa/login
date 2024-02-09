<?php

namespace App\Http\Controllers;
use App\Models\Catalogo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudCatalogo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogo1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo-producto' => 'required',
            'informacion-basica' => 'required',
            'beneficios' => 'required',
        ]);

        $catalogo = new Catalogo();
        $catalogo->TIPO_PRODUCTO = $request->input('tipo-producto');
        $catalogo->INFORMACION_BASICA = $request->input('informacion-basica');
        $catalogo->BENEFICIOS = $request->input('beneficios');

        $catalogo->save();
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $edi)
    {
        $edicion = Catalogo::find($edi);
            
            if ($request->hasFile('Imagenes')) {  
                $fileToDelete = public_path('pu-resources/img/'.$edicion->Imagenes);

                unlink($fileToDelete);
        
                $name=time();
                $request->file('Imagenes')->move(public_path('pu-resources/img/Catalogo'),$name);
                $edicion->Imagenes = $name;
            }
            if ($request->filled('Descripcion')){
            $edicion->Descripcion = $request->Descripcion;
            }
            $edicion->save();
            
            return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
