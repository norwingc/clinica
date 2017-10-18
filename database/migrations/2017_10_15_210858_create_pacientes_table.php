<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('id_number')->unique();
            $table->string('email')->unique();
            $table->date('birthday');
            $table->string('convencional');
            $table->string('celular');
            $table->string('address');
            $table->string('contacto');
            $table->string('parentesco');
            $table->string('contacto_celular');
            $table->string('trabajo');
            $table->string('escolaridad');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
