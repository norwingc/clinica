<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGinecologicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ginecologicas', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('consulta_id');
        $table->string('referido')->nullable();
        $table->string('date')->nullable();
        $table->string('numero')->nullable();
        $table->text('diagnostico_previo')->nullable();
        $table->string('signos_vitales_fc')->nullable();
        $table->string('signos_vitales_fr')->nullable();
        $table->string('signos_vitales_pa')->nullable();
        $table->string('peso_actual')->nullable();
        $table->string('incremento_peso')->nullable();
        $table->text('subjetivo')->nullable();
        $table->string('estado_general')->nullable();
        $table->string('cardioplumonar')->nullable();
        $table->string('genitales_externos')->nullable();
        $table->string('cervix')->nullable();
        $table->string('ultrasonido')->nullable();
        $table->text('comentarios')->nullable();
        $table->text('recordatorio')->nullable();
        $table->text('examen_laboratorio')->nullable();
        $table->text('examen_laboratorio_otro')->nullable();
        $table->text('plan_medico')->nullable();
        $table->text('plan_medico_otro')->nullable();
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
        Schema::dropIfExists('ginecologicas');
    }
}
