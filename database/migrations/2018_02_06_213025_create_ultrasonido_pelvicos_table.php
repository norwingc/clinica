<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltrasonidoPelvicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultrasonido_pelvicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('referido')->nullable();
            $table->string('edad', 30)->nullable();
            $table->integer('gesta')->nullable();
            $table->integer('parto')->nullable();
            $table->integer('aborto')->nullable();
            $table->integer('cesarea')->nullable();
            $table->integer('legrado')->nullable();
            $table->string('bordes')->nullable();
            $table->string('ecos_interior')->nullable();
            $table->string('utero')->nullable();
            $table->string('forma')->nullable();
            $table->string('paredes')->nullable();
            $table->integer('longitud')->nullable();
            $table->integer('ancho')->nullable();
            $table->integer('grosor')->nullable();
            $table->string('masa_uterino')->nullable();
            $table->string('masa_uterino_cuantas')->nullable();
            $table->string('cara')->nullable();
            $table->string('localizacion_masa')->nullable();
            $table->string('mediciones')->nullable();
            $table->string('presencia_tabique')->nullable();
            $table->string('tabique_medicion')->nullable();
            $table->string('endometrio')->nullable();
            $table->string('endometrio_modo')->nullable();
            $table->string('cavidad_endometrial')->nullable();
            $table->string('dispositivo_intrauterino')->nullable();
            $table->string('saco_gestional')->nullable();
            $table->string('saco_gestional_bordes')->nullable();
            $table->string('saco_gestional_ubicacion')->nullable();
            $table->string('reaccion_coridodecidual')->nullable();
            $table->string('presencia_vesicula')->nullable();
            $table->string('presencia_yema')->nullable();
            $table->string('vitalidad')->nullable();
            $table->string('longitud_craneo')->nullable();
            $table->string('edad_gestacional')->nullable();
            $table->string('fecha_parto')->nullable();
            $table->string('ovario_izquierdo')->nullable();
            $table->string('ovario_izquierdo_1')->nullable();
            $table->string('ovario_izquierdo_2')->nullable();
            $table->string('presencia_masa_anexial_izquierdo')->nullable();
            $table->string('ovario_izquierdo_tipo')->nullable();
            $table->string('ovario_izquierdo_vegetaciones')->nullable();
            $table->string('ovario_izquierdo_septos')->nullable();
            $table->string('ovario_izquierdo_irregularidad_masa')->nullable();
            $table->string('ovario_izquierdo_vaso_nutricio')->nullable();
            $table->string('ovario_izquierdo_patron_vascular')->nullable();
            $table->string('ovario_derecho')->nullable();
            $table->string('ovario_derecho_1')->nullable();
            $table->string('ovario_derecho_2')->nullable();
            $table->string('presencia_masa_anexial_derecho')->nullable();
            $table->string('ovario_derecho_tipo')->nullable();
            $table->string('ovario_derecho_vegetaciones')->nullable();
            $table->string('ovario_derecho_septos')->nullable();
            $table->string('ovario_derecho_irregularidad_masa')->nullable();
            $table->string('ovario_derecho_vaso_nutricio')->nullable();
            $table->string('ovario_derecho_patron_vascular')->nullable();
            $table->string('liquido_libre')->nullable();
            $table->string('cantidad_liquido_libre')->nullable();
            $table->string('ovario_ascitis')->nullable();
            $table->string('embarazo_lcc_semanas')->nullable();
            $table->string('concluciones')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('recordatorios')->nullable();
            $table->integer('consulta_id');
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
        Schema::dropIfExists('ultrasonido_pelvicos');
    }
}
