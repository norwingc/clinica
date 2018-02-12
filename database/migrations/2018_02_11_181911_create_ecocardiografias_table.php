<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcocardiografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecocardiografias', function (Blueprint $table) {
            $table->integer('consulta_id');
            $table->integer('edad')->nullable();
            $table->string('date')->nullable();
            $table->string('paridad')->nullable();
            $table->string('feto');
            $table->string('revision')->nullable();
            $table->string('concluciones')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('recordatorio')->nullable();
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
        Schema::dropIfExists('ecocardiografias');
    }
}
