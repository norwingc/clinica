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
            $table->string('email')->nullable();
            $table->string('id_number')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('compania_phone')->nullable();
            $table->string('referido')->nullable();
            $table->date('birthday')->nullable();
            $table->string('convencional')->nullable();
            $table->string('address')->nullable();
            $table->string('estado_civil')->nullable();
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
