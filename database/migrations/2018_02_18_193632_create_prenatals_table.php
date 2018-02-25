<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrenatalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenatals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consulta_id');
            $table->string('referido')->nullable();
            $table->string('date')->nullable();
            $table->string('edad_gestacional')->nullable();
            $table->integer('numero')->nullable();
            $table->string('diagnostico_previo')->nullable();
            $table->string('presion_arterial_derecho')->nullable();
            $table->string('presion_arterial_izquierdo')->nullable();
            $table->string('presion_arterial_media')->nullable();
            $table->string('signos_vitales_fc')->nullable();
            $table->string('signos_vitales_fr')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('peso_actual')->nullable();
            $table->string('incremento_peso')->nullable();
            $table->string('subjetivo')->nullable();
            $table->string('estado_general')->nullable();
            $table->string('alteraciones_hermodinamicas', 5)->nullable();
            $table->string('alteraciones_cardiopulmonar', 5)->nullable();
            $table->string('pezon_areola')->nullable();
            $table->string('movimientos_fetales', 20)->nullable();
            $table->string('fcf_minuto')->nullable();
            $table->string('actividad_uterina')->nullable();
            $table->string('utero_gravido', 5)->nullable();
            $table->string('presentacion')->nullable();
            $table->string('situacion')->nullable();
            $table->string('posicion')->nullable();
            $table->string('utero_intrapelvico', 5)->nullable();
            $table->string('peristalsis')->nullable();
            $table->string('afu')->nullable();
            $table->string('examen_ginecologico', 5)->nullable();
            $table->string('genitales_externos', 10)->nullable();
            $table->string('vagina_normo_termica', 5)->nullable();
            $table->string('vagina_normo_elastica', 5)->nullable();
            $table->string('vagina_lesiones', 5)->nullable();
            $table->string('vagina_lesiones_si')->nullable();
            $table->string('vagina_leucorrea', 5)->nullable();
            $table->string('vagina_leucorrea_descripcion')->nullable();
            $table->string('vagina_fetidez', 5)->nullable();
            $table->string('vagina_sangrado')->nullable();
            $table->string('vagina_hidrorrea', 5)->nullable();
            $table->string('vagina_cervix')->nullable();
            $table->string('vagina_consistencia')->nullable();
            $table->string('borramiento')->nullable();
            $table->string('dilatacion')->nullable();
            $table->string('vagina_calotas', 20)->nullable();
            $table->string('vagina_membranas_integras', 20)->nullable();
            $table->string('vagina_plano', 20)->nullable();
            $table->string('vagina_pelvis')->nullable();
            $table->string('vagina_desproporcion_cefalopelvica')->nullable();
            $table->string('vagina_desproporcion_cefalopelvica_descripcion')->nullable();
            $table->string('vagina_miembros_inferiores_edema')->nullable();
            $table->string('vagina_miembros_inferiores_edema_si')->nullable();
            $table->string('vagina_ceurologico_conservado', 5)->nullable();
            $table->string('vagina_ceurologico_conservado_si')->nullable();
            $table->string('porta_examen', 5)->nullable();
            $table->string('leocitos')->nullable();
            $table->string('segmentos')->nullable();
            $table->string('linfocitos')->nullable();
            $table->string('hemoglobina')->nullable();
            $table->string('hematocrito')->nullable();
            $table->string('eosinofilos')->nullable();
            $table->string('resticulocitos')->nullable();
            $table->string('glicemia')->nullable();
            $table->string('pospandrial_una')->nullable();
            $table->string('pospandrial_dos')->nullable();
            $table->string('creatinina')->nullable();
            $table->string('ego_leucocitos')->nullable();
            $table->string('nitritos')->nullable();
            $table->string('glucosa')->nullable();
            $table->string('proteinas')->nullable();
            $table->string('cilindros')->nullable();
            $table->string('papanicolaou', 5)->nullable();
            $table->date('fecha_papanicolaou')->nullable();
            $table->string('resultado_papanicolaou')->nullable();
            $table->string('cultivos_vaginales')->nullable();
            $table->string('rpr_positivo', 10)->nullable();
            $table->string('vih_positivo', 10)->nullable();
            $table->string('urocultivo')->nullable();
            $table->string('transaminasas')->nullable();
            $table->string('billiruinas')->nullable();
            $table->string('ldh')->nullable();
            $table->string('tp')->nullable();
            $table->string('tpt')->nullable();
            $table->string('fibrinogeno')->nullable();
            $table->string('acido_urico')->nullable();
            $table->string('ultrasonido', 5)->nullable();
            $table->string('ultrasonido_si')->nullable();
            $table->string('edad_gestional_semanas')->nullable();
            $table->string('edad_gestional_dias')->nullable();
            $table->string('ila')->nullable();
            $table->string('planceta_grado')->nullable();
            $table->string('doppler_normal', 5)->nullable();
            $table->string('incremento_peso_materno', 20)->nullable();
            $table->string('incremento_curva_fetal', 20)->nullable();
            $table->string('maduracion_pulmonar', 5)->nullable();
            $table->string('maduracion_pulmonal_semanas')->nullable();
            $table->text('plan_medico')->nullable();
            $table->text('examen_laboratorio')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('recordatorio')->nullable();
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
        Schema::dropIfExists('prenatals');
    }
}
