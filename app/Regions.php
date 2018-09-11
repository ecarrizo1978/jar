<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table='regions';
    protected $fillable=['region_nombre','region_ordinal'];
    protected $dates = ['deleted_at'];
}
