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
            $table->string('celular');
            $table->string('referido');
            $table->string('email')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('convencional')->nullable();
            $table->string('address')->nullable();
            $table->string('contacto')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('contacto_celular')->nullable();
            $table->string('trabajo')->nullable();
            $table->string('escolaridad')->nullable();
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
