<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 protected $fillable = ['name'];
     return this->morphMany('App\Photo', 'imageable');	

     function photos()
     {
     	return this->morphMany('App\Photo', 'imageable');
     }
}