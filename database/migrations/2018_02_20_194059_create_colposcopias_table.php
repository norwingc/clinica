<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColposcopiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colposcopias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consulta_id');
            $table->string('referido')->nullable();
            $table->string('edad', 30)->nullable();
            $table->string('date')->nullable();
            $table->string('historia')->nullable();
            $table->string('interpretacion_ivaa')->nullable();
            $table->string('interpretacion_lugol')->nullable();
            $table->string('clasificacion')->nullable();
            $table->string('descripcion_colposcopia')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('cambios_menores')->nullable();
            $table->string('cambios_mayores')->nullable();
            $table->string('sugestivo_carcinoma')->nullable();
            $table->string('descripcion_carcinoma')->nullable();
            $table->string('toma_biopsia')->nullable();
            $table->string('vaginoscopia')->nullable();
            $table->string('vaginoscopia_descipcion')->nullable();
            $table->string('vulvoscopia')->nullable();
            $table->string('vulvoscopia_descipcion')->nullable();
            $table->string('lesiones_perianales')->nullable();
            $table->string('lesiones_perianales_descipcion')->nullable();
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
        Schema::dropIfExists('colposcopias');
    }
}
