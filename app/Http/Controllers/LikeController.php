<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
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
        //
    }

    public function likespost($postid)
    {
        $likes = Like::with('usuario')->where('post_id', '=', $postid)->get();
        return response()->json($likes);
    }

    public function crearlike(Request $request)
    {
        $crearlike = Like::create([
            'usuario_id' => $request->usuarioid,
            'post_id' => $request->postid
        ]);

        return response()->json($crearlike);
    }



     public function eliminarlike(Request $request)
    {
        $eliminarlike = Like::where('post_id', $request->postid)->where('usuario_id', $request->usuarioid)->delete();
        return response()->json($eliminarlike);
    }
    
}
