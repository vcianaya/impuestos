<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = [
'ci_usu','nom_usu','app_usu','apm_usu','cel_usu','nick_USU','password','email_usu','equipo','area',
    ];

    protected $hidden = ['id_usu',];
    public $timestamps = false;
}
