<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postimagen extends Model
{
	protected $fillable = ['nombre', 'tipo', 'url', 'post_id'];
   	protected $table = 'postimagenes';
}
