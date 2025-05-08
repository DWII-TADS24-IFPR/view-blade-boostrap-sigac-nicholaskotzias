<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;


class NivelController extends Controller
{
    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index')->with(['niveis'=>$niveis]);
    }

    public function create()
    {
        return view('niveis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|min:3|unique:niveis,nome'
        ], [
            'nome.unique' => 'O nome já foi registrado. Por favor, escolha outro.'
        ]);

        Nivel::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('niveis.index')->with('success', 'Nível criado com sucesso!');
    }

    public function show(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('niveis.show')->with(['nivel' => $nivel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nivel $nivel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nivel $nivel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $nivel = Nivel::findOrFail($id);
        $nivel -> delete();

        return redirect()->route('niveis.index')->with('success', 'Nível excluido com sucesso!');
    }
}
