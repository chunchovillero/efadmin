<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comentarios = Comentario::with(['usuario'])->get();
        return response()->json($comentarios);
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

    public function insertarcomentario(Request $request)
    {

        $insertarcomentario = Comentario::create([
            'comentario' => $request->comentario,
            'post_id'    => $request->id,
            'usuario_id' => $request->uid,
            'respuesta'  => $request->respuesta
        ]);

        return response()->json($insertarcomentario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {

    }

    public function comentariobypost($postid)
    {
        $comentarios = Comentario::with('usuario')->where('post_id','=',$postid)->where('respuesta', '=', 'no')->get();
        return response()->json($comentarios);
    }

    public function comentario($comentarioid)
    {
        $comentario = Comentario::with('usuario')->where('id','=',$comentarioid)->first();
        return response()->json($comentario);
    }

    public function respuestas ($respuestaid)
    {
        $respuestas = Comentario::with('usuario')->where('respuesta','=',$respuestaid)->get();
        return response()->json($respuestas);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
