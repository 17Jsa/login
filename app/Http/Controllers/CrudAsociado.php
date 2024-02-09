<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\requestAsociado;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class CrudAsociado extends Controller
{
    
    public function index()
    {
        return view ('Admin.asociado');
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(requestAsociado $request)
    {
        $aso = new User();
        $aso->name = $request->input('nombre');
        $aso->email = $request->input('email');
        $aso->Identificacion = $request->input('identificacion');
        $aso->num_telefono = $request->input('telefono');
        $aso->Direccion = $request->input('direccion');
        $aso->password = Hash::make($request->input('contrasena'));
        $aso->save();
        return redirect('admin');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aso =  User::find($id); 
        $aso->delete();
        return redirect('admin');
    }
}
