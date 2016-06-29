<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	protected $table = 'equipo';
	    protected $fillable = [
'des_equ','se_equ','cd_equ','mar_equ','mod_equ','pro_equ','ip_equ','nom_equ','so_equ','dis_equ','area',
    ];

    protected $hidden = ['id_equ',];
    public $timestamps = false;
}
