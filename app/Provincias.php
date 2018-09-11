<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    protected $table='provincias';
    protected $fillable=['provincia_nombre','region_id'];
    protected $dates = ['deleted_at'];

    public static function provincias($id){
    	return Provincia::where('region_id','=',$id)->get();
    }
}
