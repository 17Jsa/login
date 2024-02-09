<?php


// app/Http/Controllers/ContactoController.php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Resend\Laravel\Facades\Resend;


class ContactoController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        $request->validate([
            'empresa' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'comentario' => 'required',
        ]);

        
        $htmlContent = "
            <p><strong>Empresa:</strong> {$request->input('empresa')}</p>
            <p><strong>Nombre:</strong> {$request->input('nombre')} {$request->input('apellido')}</p>
            <p><strong>Correo:</strong> {$request->input('correo')}</p>
            <p><strong>Comentario:</strong> {$request->input('comentario')}</p>
        ";
        Resend::emails()->send([
            'from' => 'Acme <onboarding@resend.dev>',
            'to' => 'sebdyjxjig@gmail.com',
            'subject' => 'CONTACTARNOS',
            'html' => $htmlContent ,
        ]);

        return redirect('index');
    }
}

