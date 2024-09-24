<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
use App\Models\CategoriaDestino;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::with('categorias')->get();
        return view('destinos.index', compact('destinos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaDestino::all();
        return view('destinos.create', compact('categorias'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255|regex:/^[\p{L}\s]+$/', // Solo letras y espacios
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string|regex:/^[\p{L}\s]+$/', // Solo letras y espacios
            'precio' => 'required|numeric|min:0.01', // Mayor a 0
            'imagen_url' => 'required|string|url', // Validar que sea una URL
            'estado' => 'required|boolean',
            'categorias' => 'array',
        ]);

        $destino = Destino::create($data);

        return redirect()->route('destinos.index')->with('success', 'Destino creado correctamente.');
    }




    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        return view('destinos.show', compact('destino'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        $categorias = CategoriaDestino::all();
        $destinoCategorias = $destino->categorias->pluck('id')->toArray();
        return view('destinos.edit', compact('destino', 'categorias', 'destinoCategorias'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destino $destino)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required',
            'ubicacion' => 'required|string',
            'precio' => 'required|numeric',
            'imagen_url' => 'required|string',
            'estado' => 'required|boolean',
            'categorias' => 'array',
        ]);

        $destino->update($data);
        if (isset($data['categorias'])) {
            $destino->categorias()->sync($data['categorias']);
        } else {
            $destino->categorias()->detach();
        }

        return redirect()->route('destinos.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('destinos.index');
    }

}
