<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    protected $table='comunas';
    protected $fillable=['comuna_nombre','provincia_id'];
    protected $dates = ['deleted_at'];

    public static function comunas($id){
    	return Comuna::where('provincia_id','=',$id)->get();
    }
}
