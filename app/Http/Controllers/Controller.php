<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Cliente;
use App\Models\pedido;
use App\Models\Imagen;
use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth; 

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function log(){
        return view ('login');
    }

    public function index(){
        $local = Imagen::all();
        return view('index', compact('local'));
    }

    public function nosotros(){
        $local = Imagen::all();
        return view ('nosotros',compact('local') );
    }
    
    public function contactos(){
       
        return view ('contactos');
    }

    public function catalogo (){
        $Catalogo = Catalogo::all();
        return view ('catalogo1', compact('Catalogo'));
    }

    public function galeria (){
        return view ('galeria');
    }
    public function Admin(){
        $pedi =  pedido::with('cliente','catalogo')->get();
        $asociado = User::all();
        $cliente = Cliente::all();
        $Catalogo = Catalogo::all();
        return view ('Admin.admin', compact('asociado','cliente','pedi','Catalogo'));
    }

    public function acceder(Request $request)
    {
        $roles = $request->input('role');
    
        if ($roles == 'asociado') {
            $credentials = $request->validate([
                'identificacion' => ['required'],
                'password' => ['required'],
            ]);
    
            if (Auth::guard('web')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
    
            return back()->withErrors([
                'identificacion' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
    
        } elseif ($roles == 'cliente') {
            $credentials = $request->validate([
                'identificacion' => ['required'],
                'password' => ['required'],
            ]);
    
            if (Auth::guard('client')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
    
            return back()->withErrors([
                'IDENTIFICACION' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }
    }
    
}
