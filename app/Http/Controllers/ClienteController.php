<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Para consumir APIs
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cedula' => 'required|string|max:20',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes,correo',
        ]);

        try {
            $cliente = Cliente::create($validated);
            return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al crear cliente: ' . $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->back()->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy(string $id)
    {
        Cliente::destroy($id);
        return redirect()->back()->with('success', 'Cliente eliminado correctamente');
    }
}
