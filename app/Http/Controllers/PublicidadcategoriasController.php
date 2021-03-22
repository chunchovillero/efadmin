<?php

namespace App\Http\Controllers;

use App\Publicidadcategoria;
use Illuminate\Http\Request;

class PublicidadcategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicidadescategorias = Publicidadcategoria::all();
        return response()->json($publicidadescategorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicidadcategoria  $publicidadcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidadcategoria $publicidadcategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicidadcategoria  $publicidadcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicidadcategoria $publicidadcategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicidadcategoria  $publicidadcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicidadcategoria $publicidadcategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicidadcategoria  $publicidadcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicidadcategoria $publicidadcategoria)
    {
        //
    }
}
