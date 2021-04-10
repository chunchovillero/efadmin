<?php

namespace App\Http\Controllers;

use App\Notificacionpush;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NotificacionpushController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic xxx'
        ];

        $client = new Client([
            'headers' => $headers,
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            'timeout'  => 2.0,
        ]);

        $body = '{
            "app_id": "xxxxxx",
            "include_player_ids": ["xxxx"],
            "data": {"usuario": "hola"},
            "contents": {"en": "english mensaje", "es": "mensaje en español desde laravel"},
            "headings": {"en": "postman en ingles", "es": "postamn en español"}
        }';

        $r = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
            'body' => $body
        ]);
        $response = $r->getBody()->getContents();
        dd($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function enviar(Request $request)
    {

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic xxxx'
        ];

        $client = new Client([
            'headers' => $headers,
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            'timeout'  => 2.0,
        ]);

        $body = '{
            "app_id": "xxxxx",
            "include_player_ids": ["'. $request->pushid .'"],
            "data": {"urñ": "'. $request->url .'"},
            "contents": {"en": "'. $request->mensaje .'", "es": "'. $request->mensaje .'"},
            "headings": {"en": "'. $request->header .'", "es": "'. $request->header .'"}
        }';

        $r = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
            'body' => $body
        ]);
        $response = $r->getBody()->getContents();

        return response()->json($response);
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
     * @param  \App\Notificacionpush  $notificacionpush
     * @return \Illuminate\Http\Response
     */
    public function show(Notificacionpush $notificacionpush)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notificacionpush  $notificacionpush
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificacionpush $notificacionpush)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notificacionpush  $notificacionpush
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacionpush $notificacionpush)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notificacionpush  $notificacionpush
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificacionpush $notificacionpush)
    {
        //
    }
}
