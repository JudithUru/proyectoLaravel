<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//Habilita el acceso a una base de datos

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       // echo("Hola");
        //$proyectos es el nombre del array
        $proyectos=DB::table('proyectos')->get();
        return view("projects/index", ['proyectos'=> $proyectos]); //es clave valor
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect('project/') -> with('success', 'Proyecto creado satisfactoriamente'); //el project es por la rutas
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto=Proyecto::find($id);
        return view("projects/update", compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
