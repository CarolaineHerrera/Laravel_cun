<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = [
    	'editorial_id',
    	'titulo',
    	'sinopsis'
    ];


    public function editorial(){
    	return $this->belongsTo('App\Models\Editorial');
    }




}
