<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cwModel extends Model
{
    //
	public $table = "proyectos";
	public $primaryKey = "id";
	public $timestamps = false;
	public $guarded = [];
	//public $fillable = ['prueba'];
}
