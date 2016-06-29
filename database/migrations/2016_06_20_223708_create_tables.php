<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('CI_USU');
            $table->string('NOM_USU',100);
            $table->string('APA_USU',100);
            $table->string('AMA_USU',100);
            $table->string('CAR_USU',100);
            $table->integer('CEL_USU');
            $table->string('NICK',100);
            $table->integer('NIV_USU');
            $table->string('password', 60);
            $table->string('email', 60);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('equipo', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('NOM_EQI',100);
            $table->string('DES_EQI',100);
            $table->string('MAR_EQI',100);
            $table->string('MOD_EQI',100);
            $table->string('PRO_EQI',100);
            $table->string('SO_EQI',100);
            $table->string('IP_EQI',100);
            $table->string('SE_EQI',100);
            $table->string('CS_EQI',100);
            $table->integer('DIS_EQI');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('siniestro', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('OBS_SIN');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('area', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('NOM_ARE',100);
            $table->string('DES_ARE',100);
        });


        //RELACIONES DE LAS TABLAS
        Schema::table('users', function($table)
        {
            $table->integer('EQUIPO')->unsigned();
            $table->foreign('EQUIPO')->references('id')->on('equipo');

            $table->integer('AREA')->unsigned();
            $table->foreign('AREA')->references('id')->on('area');
        });
        
        Schema::table('siniestro', function($table)
        {
            $table->integer('EQUIPO')->unsigned();
            $table->foreign('EQUIPO')->references('id')->on('equipo');

            $table->integer('USUARIO')->unsigned();
            $table->foreign('USUARIO')->references('id')->on('users');

            $table->integer('AREA')->unsigned();
            $table->foreign('AREA')->references('id')->on('area');

        });
        
        Schema::table('equipo', function($table)
        {
            $table->integer('AREA')->unsigned();
            $table->foreign('AREA')->references('id')->on('area');
        });
        
       

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
