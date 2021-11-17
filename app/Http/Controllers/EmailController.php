<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('contacto.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'nombre' => 'required',
          'contenido' => 'required',
        ]);

        $data = [
          'subject' => 'Nuevo Mensaje',
          'nombre' => $request->nombre,
          'email' => $request->email,
          'contenido' => $request->contenido
        ];

        Mail::send('contacto.email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => '¡Nos pondremos en contacto!']);
    }
}