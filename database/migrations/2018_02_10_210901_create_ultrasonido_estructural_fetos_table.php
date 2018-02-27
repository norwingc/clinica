<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltrasonidoEstructuralFetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultrasonido_estructural_fetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examen_id');
            $table->string('vitalidad_feto')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('situacion')->nullable();
            $table->string('posicion')->nullable();
            $table->string('fcf')->nullable();
            $table->string('dbp_medida', 20)->nullable();
            $table->string('dbp_semanas', 20)->nullable();
            $table->string('cc_medida', 20)->nullable();
            $table->string('cc_semanas', 20)->nullable();
            $table->string('ca_medida', 20)->nullable();
            $table->string('ca_semanas', 20)->nullable();
            $table->string('lf_medida', 20)->nullable();
            $table->string('lf_semanas', 20)->nullable();
            $table->string('humero_medida', 20)->nullable();
            $table->string('humero_semanas', 20)->nullable();
            $table->string('radio_medida', 20)->nullable();
            $table->string('radio_semanas', 20)->nullable();
            $table->string('cubito_medida', 20)->nullable();
            $table->string('cubito_semanas', 20)->nullable();
            $table->string('tibia_medida', 20)->nullable();
            $table->string('tibia_semanas', 20)->nullable();
            $table->string('perone_medida', 20)->nullable();
            $table->string('perone_semanas', 20)->nullable();
            $table->string('cerebelo_medida', 20)->nullable();
            $table->string('cerebelo_semanas', 20)->nullable();
            $table->string('cisterna_magna', 20)->nullable();
            $table->string('pliegue_nucal', 20)->nullable();
            $table->string('fetometria_promedio', 20)->nullable();
            $table->string('percentil', 20)->nullable();
            $table->string('peso_fetal', 20)->nullable();
            $table->string('fecha_parto')->nullable();
            $table->string('percentil_ip_medio')->nullable();
            $table->string('interpretacion_ip_medio', 10)->nullable();
            $table->string('percentil_notch_izquierda')->nullable();
            $table->string('interpretacion_notch_izquierda', 10)->nullable();
            $table->string('percentil_notch_derecha')->nullable();
            $table->string('interpretacion_notch_derecha', 10)->nullable();
            $table->string('percentil_cerebro_placentario')->nullable();
            $table->string('interpretacion_cerebro_placentario')->nullable();
            $table->string('percentil_arteria_cerebral')->nullable();
            $table->string('interpretacion_arteria_cerebral', 10)->nullable();
            $table->string('percentil_arteria_umbilical')->nullable();
            $table->string('interpretacion_arteria_umbilical', 10)->nullable();
            $table->string('percentil_flojo_diasotolico')->nullable();
            $table->string('interpretacion_flojo_diasotolico', 10)->nullable();
            $table->string('percentil_itsmo_aortico')->nullable();
            $table->string('interpretacion_itsmo_aortico', 10)->nullable();
            $table->string('percentil_ducto_venenoso')->nullable();
            $table->string('interpretacion_ducto_venenoso', 10)->nullable();
            $table->string('percentil_flujo_dicto_venenoso')->nullable();
            $table->string('interpretacion_flujo_dicto_venenoso', 10)->nullable();
            $table->string('percentil_vena_umbilical')->nullable();
            $table->string('interpretacion_vena_umbilical', 10)->nullable();
            $table->string('craneo', 5)->nullable();
            $table->string('dolicocefalia', 5)->nullable();
            $table->string('braquicefalia', 5)->nullable();
            $table->string('craneo_tamano', 5)->nullable();
            $table->string('craneo_situras', 5)->nullable();
            $table->string('craneo_compresion', 5)->nullable();
            $table->string('craneo_interhemisferica', 5)->nullable();
            $table->string('craneo_hemisferios', 5)->nullable();
            $table->string('cavum_septum')->nullable();
            $table->string('diametro_anteroposterior')->nullable();
            $table->string('asta_frontales', 5)->nullable();
            $table->string('comunicacion_asta_ateriores', 5)->nullable();
            $table->string('plexo_coroideos', 5)->nullable();
            $table->string('presencia_quiste', 5)->nullable();
            $table->string('presencia_quiste_si')->nullable();
            $table->string('cisura_parietooccipital', 5)->nullable();
            $table->string('atrios_ventruculares', 5)->nullable();
            $table->string('atrio_derecho')->nullable();
            $table->string('atrio_izquierdo', 5)->nullable();
            $table->string('area_ventricular', 20)->nullable();
            $table->string('ambos_hemisferios_simetricos', 5)->nullable();
            $table->string('vermis')->nullable();
            $table->string('central_ecogenico', 5)->nullable();
            $table->string('morfologia_normal', 5)->nullable();
            $table->string('comunicacion_4_ventriculo', 5)->nullable();
            $table->string('cortes_sagitales', 5)->nullable();
            $table->string('identifica_cono', 5)->nullable();
            $table->string('observa_osificacion', 5)->nullable();
            $table->string('integridad_cuerpos', 5)->nullable();
            $table->string('evidencia_intracraneales', 5)->nullable();
            $table->string('columna_descipcion')->nullable();
            $table->string('hueso_nasal', 5)->nullable();
            $table->string('retrognatia', 5)->nullable();
            $table->string('labio_normal')->nullable();
            $table->string('clasificacion_labio')->nullable();
            $table->string('torax_pulmon', 5)->nullable();
            $table->string('torax_lesion', 5)->nullable();
            $table->string('torax_masa_quistica', 5)->nullable();
            $table->string('torax_masa_solida', 5)->nullable();
            $table->string('torax_descripcion')->nullable();
            $table->string('torax_nutricion_masa')->nullable();
            $table->string('corazon_situs')->nullable();
            $table->string('corazon_tamano')->nullable();
            $table->string('corazon_cardiomegalia')->nullable();
            $table->string('corazon_cardiomegalia_severa')->nullable();
            $table->string('corazon_corte_camaras', 10)->nullable();
            $table->string('corazon_tracto_derecho', 20)->nullable();
            $table->string('corazon_tracto_izquierdo', 20)->nullable();
            $table->string('corazon_corte_vasos', 10)->nullable();
            $table->string('insercion_cordon', 5)->nullable();
            $table->string('presencia_vasos', 5)->nullable();
            $table->string('arteria_umbilical')->nullable();
            $table->string('pared_integra', 5)->nullable();
            $table->string('defecto_umbilical')->nullable();
            $table->string('defecto_cordon')->nullable();
            $table->string('defecto_medida')->nullable();
            $table->string('cubierta_membrana', 5)->nullable();
            $table->string('asas_intestino_delgado')->nullable();
            $table->string('asas_intestino_grueso')->nullable();
            $table->string('dilatacion_intra_abdominal', 5)->nullable();
            $table->string('medicion_intra_abdominal')->nullable();
            $table->string('dilatacion_extra_abdominal', 5)->nullable();
            $table->string('medicion_extra_abdominal')->nullable();
            $table->string('sospecha_peritonitis', 5)->nullable();
            $table->string('camara_gastrica', 5)->nullable();
            $table->string('vejiga_urinaria', 5)->nullable();
            $table->string('camara_gastrica_insitu')->nullable();
            $table->string('rinon_derecho', 20)->nullable();
            $table->string('rinon_derecho_tanano', 20)->nullable();
            $table->string('rinon_izquierdo', 20)->nullable();
            $table->string('rinon_izquierdo_tanano', 20)->nullable();
            $table->string('pelvis_derecha')->nullable();
            $table->string('pelvis_izquierda')->nullable();
            $table->string('hidronefosis', 5)->nullable();
            $table->string('grado')->nullable();
            $table->string('glandulas_suprarrenales', 20)->nullable();
            $table->string('vejiga_urinaria_insitu')->nullable();
            $table->string('engrosamiento_pared', 5)->nullable();
            $table->string('extremidades_superiores', 5)->nullable();
            $table->string('extremidades_superiores_integras', 5)->nullable();
            $table->string('extremidades_superiores_afectada')->nullable();
            $table->string('extremidades_inferiores', 5)->nullable();
            $table->string('extremidades_inferiores_integras', 5)->nullable();
            $table->string('extremidades_inferiores_afectada')->nullable();
            $table->string('placenta_numero')->nullable();
            $table->string('placenta_posocion')->nullable();
            $table->text('placenta_grado')->nullable();
            $table->string('presencia_patologicas', 5)->nullable();
            $table->string('areas_infarto', 5)->nullable();
            $table->string('longitud_cervix')->nullable();
            $table->string('funneling')->nullable();
            $table->string('porcentaje_funneling')->nullable();
            $table->string('sludge')->nullable();
            $table->string('liquido_amniotico', 10)->nullable();
            $table->string('clasificacion_liquido_amniotico')->nullable();
            $table->string('valor_ila')->nullable();
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
        Schema::dropIfExists('ultrasonido_estructural_fetos');
    }
}
