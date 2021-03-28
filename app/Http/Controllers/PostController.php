<?php

namespace App\Http\Controllers;

use App\Post;
use App\Postimagen;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Post::with(['usuario', 'imagenes'])->get();
        return response()->json($books);
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    public function postuser($postid)
    {
        $postuser = Post::with('usuario')->where('id', '=', $postid)->first();;
        return response()->json($postuser);
    }

    public function crearpost(Request $request)
    {
        $post = Post::create([
            'texto' => $request->comentario,
            'usuario_id' => $request->id,
            'tipopost_id' => $request->tipo
        ]);

        $cantidadimagenes = count($request->imagenes);

        for ($i=0; $i < $cantidadimagenes; $i++) {

            $guardarimagen = Postimagen::create([
                'nombre'  => $request->imagenes[$i]['nombre'],
                'tipo'    => $request->imagenes[$i]['tipo'],
                'url'     => $request->imagenes[$i]['url'],
                'post_id' => $post->id
            ]);

        }

        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
