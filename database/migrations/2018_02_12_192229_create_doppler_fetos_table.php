<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDopplerFetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doppler_fetos', function (Blueprint $table) {
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
            $table->string('semanas')->nullable();
            $table->string('movimiento_respiratorios', 10)->nullable();
            $table->string('tono_fetal', 10)->nullable();
            $table->string('movimiento_corporales', 10)->nullable();
            $table->string('liquido_amoniotico', 5)->nullable();
            $table->string('integridad_cardiaca', 5)->nullable();
            $table->string('examen_nst', 5)->nullable();
            $table->string('analisis_nst')->nullable();
            $table->string('datos_nst')->nullable();
            $table->string('examen_maduracion', 5)->nullable();
            $table->string('indice_maduracion_torax', 10)->nullable();
            $table->string('indice_maduracion_basal', 10)->nullable();
            $table->string('indice_maduracion_pulmonar', 10)->nullable();
            $table->string('riesgo_distres', 10)->nullable();

            $table->string('examen_oportunidad', 5)->nullable();
            $table->string('parto_espontaneo')->nullable();
            $table->string('cesarea_espontaneo')->nullable();
            $table->string('cesarea_induccion')->nullable();

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
        Schema::dropIfExists('doppler_fetos');
    }
}
