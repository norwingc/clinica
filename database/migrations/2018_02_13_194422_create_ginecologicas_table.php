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
        $table->string('date')->nullable();
        $table->string('numero')->nullable();
        $table->string('diagnostico_previo');
        $table->string('signos_vitales_fc')->nullable();
        $table->string('signos_vitales_fr')->nullable();
        $table->string('signos_vitales_pa')->nullable();
        $table->string('peso_actual')->nullable();
        $table->string('incremento_peso')->nullable();
        $table->string('subjetivo')->nullable();
        $table->string('estado_general')->nullable();
        $table->string('cardioplumonar')->nullable();
        $table->string('genitales_externos')->nullable();
        $table->string('cervix')->nullable();
        $table->string('examenes')->nullable();
        $table->string('ultrasonido')->nullable();
        $table->string('plan')->nullable();
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
        Schema::dropIfExists('ginecologicas');
    }
}
