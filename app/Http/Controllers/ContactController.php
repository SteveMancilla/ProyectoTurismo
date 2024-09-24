<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Aquí puedes enviar un correo electrónico, guardar el mensaje en la base de datos, etc.
        // Ejemplo:
        // Mail::to('admin@example.com')->send(new ContactMessage($validated));

        // Aquí puedes enviar un correo electrónico, guardar el mensaje en la base de datos, etc.

        return response()->json(['success' => 'Mensaje enviado correctamente.']);
    }
}

