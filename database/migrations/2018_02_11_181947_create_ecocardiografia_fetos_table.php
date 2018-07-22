<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcocardiografiaFetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecocardiografia_fetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examen_id');
            $table->string('vitalidad_feto')->nullable();
            $table->string('localizacion_feto')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('situacion')->nullable();
            $table->string('posicion')->nullable();
            $table->string('fcf')->nullable();
            $table->string('sexo_feto')->nullable();
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
            $table->string('peso_fetal')->nullable();
            $table->date('fecha_parto')->nullable();
            $table->string('percentil_ip_medio')->nullable();
            $table->string('interpretacion_ip_medio', 10)->nullable();
            $table->string('percentil_notch_izquierda')->nullable();
            $table->string('interpretacion_notch_izquierda', 10)->nullable();
            $table->string('percentil_notch_derecha')->nullable();
            $table->string('interpretacion_notch_derecha', 10)->nullable();
            $table->string('percentil_cerebro_placentario')->nullable();
            $table->string('interpretacion_cerebro_placentario', 10)->nullable();
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
            $table->string('situs')->nullable();
            $table->string('situs_ambiguo', 5)->nullable();
            $table->string('isomerismo', 10)->nullable();
            $table->string('corazon_tamano')->nullable();
            $table->string('corazon_posicion')->nullable();
            $table->string('corte', 10)->nullable();
            $table->string('auriculas', 5)->nullable();
            $table->string('ventriculos', 5)->nullable();
            $table->string('dominancia')->nullable();
            $table->string('foramen')->nullable();
            $table->string('valvula_mitral_implantacion')->nullable();
            $table->string('valvula_mitral_funcionalidad')->nullable();
            $table->string('valvula_tricuspide_implantacion')->nullable();
            $table->string('valvula_tricuspide_funcionalidad')->nullable();
            $table->string('tabique_interaventricular', 5)->nullable();
            $table->string('tabique_interaventricular_defecto')->nullable();
            $table->string('tipo_civ')->nullable();
            $table->string('tracto_salida_derecho')->nullable();
            $table->string('tracto_salida_izquierdo')->nullable();
            $table->string('tipo_conexion_ventricular')->nullable();
            $table->string('modo_conexion_ventricular')->nullable();
            $table->string('funcion_contractilidad', 10)->nullable();
            $table->string('funcion_rendimiento_cardiaco', 10)->nullable();
            $table->string('funcion_ritmo')->nullable();
            $table->string('funcion_extrasistoles', 10)->nullable();
            $table->string('numero_vasos')->nullable();
            $table->string('pulmonar', 5)->nullable();
            $table->string('aorta', 5)->nullable();
            $table->string('vena_cava', 5)->nullable();
            $table->string('tamano_vasos', 5)->nullable();
            $table->string('tamano_vasos_normal', 5)->nullable();
            $table->string('tamano_vasos_anormal')->nullable();
            $table->string('arteria_pulmonar_izquierda', 5)->nullable();
            $table->string('aorta_medio', 5)->nullable();
            $table->string('vena_cava_derecha', 5)->nullable();
            $table->string('disposicion_normal', 5)->nullable();
            $table->string('disposicion_anormal')->nullable();
            $table->string('vista_bi_cava', 10)->nullable();
            $table->string('vestibulo_venoso', 10)->nullable();
            $table->string('arco_aortico', 20)->nullable();
            $table->string('arco_ductal', 20)->nullable();
            $table->string('eje_corto_vasos', 10)->nullable();
            $table->string('eje_corto_centriculos', 10)->nullable();
            $table->string('placenta_numero')->nullable();
            $table->string('placenta_posocion')->nullable();
            $table->text('placenta_grado')->nullable();
            $table->string('presencia_patologicas', 5)->nullable();
            $table->string('areas_infarto', 5)->nullable();
            $table->string('longitud_cervix')->nullable();
            $table->string('funneling')->nullable();
            $table->string('porcentaje_funneling')->nullable();
            $table->string('sludge', 10)->nullable();
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
        Schema::dropIfExists('ecocardiografia_fetos');
    }
}
