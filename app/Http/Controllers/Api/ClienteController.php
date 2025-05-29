<?php

namespace App\Http\Controllers\Api;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Listado de clientes',
            'data' => Cliente::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required|unique:clientes',
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:clientes',
        ]);

        if (Cliente::where('cedula', $request->cedula)->exists()) {
            return response()->json(['message' => 'El cliente ya existe'], 409);
        }

        return Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Cliente::find($id)) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }
        return Cliente::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cliente::destroy($id);
        return response()->json(['message' => 'Cliente eliminado']);
    }
}
