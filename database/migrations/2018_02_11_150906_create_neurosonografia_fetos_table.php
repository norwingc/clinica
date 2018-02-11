<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeurosonografiaFetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neurosonografia_fetos', function (Blueprint $table) {
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
            $table->string('fetometria_promedio', 20)->nullable();
            $table->string('percentil', 20)->nullable();
            $table->string('peso_fetal', 20)->nullable();
            $table->date('fecha_parto')->nullable();
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
            $table->string('cavum_septum', 5)->nullable();
            $table->string('diametro_anteroposterior', 5)->nullable();
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
            $table->string('talamos_normales', 5)->nullable();
            $table->string('giro_hipocampal_presente', 5)->nullable();
            $table->string('ventriculo_diametros', 5)->nullable();
            $table->string('ambos_hemisferios_simetricos')->nullable();
            $table->string('vermis', 10)->nullable();
            $table->string('central_ecogenico', 5)->nullable();
            $table->string('morfologia_normal', 5)->nullable();
            $table->string('cisterna_magna', 20)->nullable();
            $table->string('comunicacion_4_ventriculo', 5)->nullable();
            $table->string('pliegue_nucal')->nullable();
            $table->string('liena_intergemisferica', 5)->nullable();
            $table->string('asta_anteriores', 5)->nullable();
            $table->string('hueso_esfenoides', 5)->nullable();
            $table->string('asta_aterior_derecha')->nullable();
            $table->string('asta_aterior_izquierda')->nullable();
            $table->string('nucleos_caudado', 5)->nullable();
            $table->string('espacio_subaracnoideo', 5)->nullable();
            $table->string('espacio_craneocotical', 5)->nullable();
            $table->string('cisura_silvio', 5)->nullable();
            $table->string('tetorio_situs', 5)->nullable();
            $table->string('cisura_interhemisferica', 5)->nullable();
            $table->string('cuernos_occipitales', 5)->nullable();
            $table->string('presencia_calloso', 5)->nullable();
            $table->string('disgenesia', 5)->nullable();
            $table->string('saginal_longitud')->nullable();
            $table->string('saginal_grosor')->nullable();
            $table->string('csp_cavum')->nullable();
            $table->string('fornix')->nullable();
            $table->string('tronco_encefalico')->nullable();
            $table->string('torcula_tendorio')->nullable();
            $table->string('doppler_visualiza', 5)->nullable();
            $table->string('pericallosa', 5)->nullable();
            $table->string('vena_galeno', 5)->nullable();
            $table->string('cisuras_silvio', 10)->nullable();
            $table->string('cisura_occipital', 10)->nullable();
            $table->string('cisura_calcarina', 10)->nullable();
            $table->string('cisura_cingulada', 10)->nullable();
            $table->string('cortes_sagitales', 5)->nullable();
            $table->string('identifica_cono', 5)->nullable();
            $table->string('observa_osificacion', 5)->nullable();
            $table->string('integridad_cuerpos', 5)->nullable();
            $table->string('evidencia_mielocele', 5)->nullable();
            $table->string('evidencia_mielocele_descripcion')->nullable();
            $table->string('evidencia_mielomeningocele', 5)->nullable();
            $table->string('evidencia_mielomeningocele_descripcion')->nullable();
            $table->string('evidencia_mielosquisis', 5)->nullable();
            $table->string('evidencia_mielosquisise_descripcion')->nullable();
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
        Schema::dropIfExists('neurosonografia_fetos');
    }
}
