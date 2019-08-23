<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestadoresModel extends Model
{
    //
	public $table = "prestador";
	public $primaryKey = "id";
	public $timestamps = false;
	public $guarded = [];
}