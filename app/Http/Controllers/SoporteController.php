<?php

namespace App\Http\Controllers;

use App\Soporte;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soporte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //primero validamos los datos

        // dd($request);
        //validacion de datos que el usuario introduce  primer paso 

        $this->validate($request, [
            'name' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'responsable' => 'required|string',
            'note' => 'required|string'
            ]);
        // almacenamiento

        $soporte = new soporte;
        // el name es el nombre de la base de datos podemos revisar en migraciones 
        $soporte->name = $request->name;
        $soporte->status = $request->status;
        $soporte->description = $request->description;
        $soporte->responsable = $request->responsable;
        $soporte->note = $request->note;
       // $task->user_id = Auth::user()->id;
        $soporte->save();
        //re direccion
        return view('prueba');  
        //return response()->json(['mes
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function show(Soporte $soporte)
    {
        return view('soporte.show', compact('soporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Soporte $soporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soporte $soporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soporte $soporte)
    {
        //
    }
}
