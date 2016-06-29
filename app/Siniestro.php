<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    	protected $table = 'siniestro';
	    protected $fillable = [
	    'equipo','area','usuario','observaciones','fecha',
    ];

    protected $hidden = ['id_sin',];
    public $timestamps = false;
}
