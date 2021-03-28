<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{   
	protected $fillable = ['usuario_id', 'post_id'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario','usuario_id','id');
    }
}
