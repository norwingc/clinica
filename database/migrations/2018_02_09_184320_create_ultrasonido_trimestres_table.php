<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltrasonidoTrimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultrasonido_trimestres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consulta_id');
            $table->integer('edad')->nullable();
            $table->string('date')->nullable();
            $table->string('paridad')->nullable();
            $table->string('feto');
            $table->string('historia_preecampsia_mama')->nullable();
            $table->string('historia_hipertension_mama')->nullable();
            $table->string('historia_preecampsia_hermana')->nullable();
            $table->string('historia_hipertension_personal')->nullable();
            $table->double('peso')->nullable();
            $table->double('talla')->nullable();
            $table->string('imc')->nullable();
            $table->string('pa_derecho')->nullable();
            $table->string('pa_izquierdo')->nullable();
            $table->string('ip_artrias')->nullable();
            $table->string('bidimensional')->nullable();
            $table->string('doppler_color')->nullable();
            $table->string('conclusion_lcc')->nullable();
            $table->string('conclusion_riesago_cromosomopatias')->nullable();
            $table->string('conclusion_riesago_preeclampsia')->nullable();
            $table->string('conclusion_riesago_hipertensivos')->nullable();
            $table->string('conclusion_riesago_restiaccion')->nullable();
            $table->string('conclusion_riesago_parto_pretermino')->nullable();
            $table->string('recomendaciones')->nullable();
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
        Schema::dropIfExists('ultrasonido_trimestres');
    }
}
