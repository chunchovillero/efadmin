<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['texto', 'usuario_id', 'tipopost_id'];
    
    public function usuario()
    {
        return $this->belongsTo('App\Usuario','usuario_id','id');
    }

    public function imagenes()
    {
    	return $this->hasMany('App\Postimagen','post_id','id');
    }

    public function comentarios()
    {
    	return $this->hasMany('App\Postcomentario','post_id','id');
    }
}
