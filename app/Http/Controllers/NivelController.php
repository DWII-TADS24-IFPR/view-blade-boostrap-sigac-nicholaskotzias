<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
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
        $request->validate(
            ['nome'=>'required|string|min:3']
        );

        Nivel::create($request->all());
        return redirect()->route('niveis.index')->with(['success'=>'Nivel']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nivel $nivel)
    {
        //
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
    public function destroy(Nivel $nivel)
    {
        //
    }
}
