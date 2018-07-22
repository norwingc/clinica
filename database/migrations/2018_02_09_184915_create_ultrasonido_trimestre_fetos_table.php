<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltrasonidoTrimestreFetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultrasonido_trimestre_fetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examen_id');
            $table->string('vitalidad_feto')->nullable();
            $table->string('localizacion_feto')->nullable();
            $table->string('somatometria_lcc')->nullable();
            $table->string('somatometria_semanas')->nullable();
            $table->string('somatometria_dbp')->nullable();
            $table->string('somatometria_cc')->nullable();
            $table->string('somatometria_ca')->nullable();
            $table->string('somatometria_lf')->nullable();
            $table->string('somatometria_fcf')->nullable();
            $table->string('somatometria_fetometria')->nullable();
            $table->string('somatometria_tn')->nullable();
            $table->date('somatometria_fecha_estimada_parto')->nullable();
            $table->string('craneo')->nullable();
            $table->string('craneo_forma')->nullable();
            $table->string('pexos_caroideos')->nullable();
            $table->string('quiste_plexos')->nullable();
            $table->string('quiste_plexos_si')->nullable();
            $table->string('hueso_nasal')->nullable();
            $table->string('medicion_nasal')->nullable();
            $table->string('torax_normal')->nullable();
            $table->string('localizacion_intratoracica')->nullable();
            $table->string('ectopia_cordis')->nullable();
            $table->string('anomalia_cardica')->nullable();
            $table->string('descripcion_anomalia_cardica')->nullable();
            $table->string('insercion_cordon')->nullable();
            $table->string('presencia_vasos')->nullable();
            $table->string('arteria_umbilical')->nullable();
            $table->string('pared_integra')->nullable();
            $table->string('localizacion_defecto_abdominal')->nullable();
            $table->string('defecto_medida')->nullable();
            $table->string('cubierta_membrana')->nullable();
            $table->string('asas_intestino_delgado')->nullable();
            $table->string('asas_intestino_grueso')->nullable();
            $table->string('dilatacion_intra_abdominal')->nullable();
            $table->string('medicion_intra_abdominal')->nullable();
            $table->string('dilatacion_extra_abdominal')->nullable();
            $table->string('medicion_extra_abdominal')->nullable();
            $table->string('sospecha_peritonitis')->nullable();
            $table->string('camara_gastrica')->nullable();
            $table->string('vejiga_urinaria')->nullable();
            $table->string('vejiga')->nullable();
            $table->string('extremidades_superiores')->nullable();
            $table->string('extremidades_superiores_integras')->nullable();
            $table->string('extremidades_superiores_afectada')->nullable();
            $table->string('extremidades_inferiores')->nullable();
            $table->string('extremidades_inferiores_integras')->nullable();
            $table->string('extremidades_inferiores_afectada')->nullable();
            $table->string('placenta_numero')->nullable();
            $table->string('placenta_posocion')->nullable();
            $table->string('fusion_membranas')->nullable();
            $table->string('placenta_grado')->nullable();
            $table->string('longitud_cervix')->nullable();
            $table->string('funneling')->nullable();
            $table->string('porcentaje_funneling')->nullable();
            $table->string('sludge')->nullable();
            $table->string('liquido_amniotico')->nullable();
            $table->string('basal')->nullable();
            $table->string('edad_tn')->nullable();
            $table->string('edad_tn_marcadores')->nullable();
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
        Schema::dropIfExists('ultrasonido_trimestre_fetos');
    }
}
