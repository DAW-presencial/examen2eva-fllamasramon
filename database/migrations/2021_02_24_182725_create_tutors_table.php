<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('empresa_nombre');
            $table->string('tutor_nombre');
            $table->string('tutor_apellido1');
            $table->string('tutor_apellido2');
            $table->string('estado');   
            $table->string('email');   
            $table->string('phone');
            $table->string('pais');
            $table->string('provincia');   
            $table->string('municipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
