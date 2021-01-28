<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteHistoriaClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_historia_clinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('motivo')->nullable();
            $table->text('historia')->nullable();
            $table->string('diabetes_familiar', 5)->nullable();
            $table->string('hipertension_arterial_familiar', 5)->nullable();
            $table->string('cardiopatia_familiar', 5)->nullable();
            $table->string('nefropatias_familiar', 5)->nullable();
            $table->string('tiroidea_familiar', 5)->nullable();
            $table->string('enfermedad_inmunologica_familiar', 5)->nullable();
            $table->string('enfermedad_oncologica_familiar', 5)->nullable();
            $table->string('enfermedad_oncologica_familiar_si')->nullable();
            $table->string('malformacion_congenita_familiar', 5)->nullable();
            $table->string('malformacion_congenita_familiar_si')->nullable();
            $table->string('pre_eclampsia_familiar', 5)->nullable();
            $table->string('alergias', 5)->nullable();
            $table->string('alergias_si')->nullable();
            $table->string('fumado', 5)->nullable();
            $table->string('alcohol', 5)->nullable();
            $table->string('drogas', 5)->nullable();
            $table->string('drogas_si')->nullable();
            $table->string('medicamentos', 5)->nullable();
            $table->string('medicamentos_si')->nullable();
            $table->string('rh_paciente', 20)->nullable();
            $table->string('rh_esposo', 20)->nullable();
            $table->string('diabetes', 5)->nullable();
            $table->string('diabetes_si')->nullable();
            $table->string('hipertension_arterial', 5)->nullable();
            $table->string('hipertension_arterial_tratamiento')->nullable();
            $table->string('cardiopatia', 5)->nullable();
            $table->string('cardiopatia_tipo')->nullable();
            $table->string('nefropatias', 5)->nullable();
            $table->string('nefropatias_tipo')->nullable();
            $table->string('tiroidea', 5)->nullable();
            $table->string('tiroidea_tipo')->nullable();
            $table->string('inmunologica', 5)->nullable();
            $table->string('oncologica', 5)->nullable();
            $table->string('oncologica_tipo')->nullable();
            $table->string('malformacion_congenita', 5)->nullable();
            $table->string('malformacion_congenita_tipo')->nullable();
            $table->string('pre_eclampsia', 5)->nullable();
            $table->string('manejo_pre_eclampsia')->nullable();
            $table->string('cirugias_previas', 5)->nullable();
            $table->text('cirugias_previas_si')->nullable();
            $table->string('hospitalizacion_previa', 5)->nullable();
            $table->text('hospitalizacion_previa_si')->nullable();
            $table->string('menarca')->nullable();
            $table->string('vida_sexual_inicio')->nullable();
            $table->integer('gesta')->nullable();
            $table->integer('gesta_parto')->nullable();
            $table->integer('gesta_aborto')->nullable();
            $table->integer('gesta_cesarea')->nullable();
            $table->integer('gesta_embarazo_etopico')->nullable();
            $table->integer('gesta_legrado')->nullable();
            $table->integer('gesta_gemelar_previo')->nullable();
            $table->string('gesta_informacion')->nullable();
            $table->integer('gesta_nacidos_vivos')->nullable();
            $table->integer('gesta_nacidos_muertos')->nullable();
            $table->integer('gesta_muertos_primeros_dias')->nullable();
            $table->integer('gesta_muertos_mayor_dias')->nullable();
            $table->string('planificacion', 5)->nullable();
            $table->string('planificacion_tipo')->nullable();
            $table->string('menopausia', 5)->nullable();
            $table->string('menopausia_si')->nullable();
            $table->string('papanicolaou', 5)->nullable();
            $table->string('papanicolaou_si')->nullable();
            $table->string('ultima_regla')->nullable();
            $table->string('embarazada', 5)->nullable();
            $table->text('edad_gestional')->nullable();
            $table->string('fecha_ultrasonido')->nullable();
            $table->string('fc_minuto')->nullable();
            $table->string('fr_minuto')->nullable();
            $table->string('persion_arterial_derecho')->nullable();
            $table->string('persion_arterial_izquierdo')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->string('imc')->nullable();
            $table->string('conciente', 5)->nullable();
            $table->string('orientada', 5)->nullable();
            $table->string('febril', 5)->nullable();
            $table->string('condicion_hemodinamica', 5)->nullable();
            $table->string('alteraciones_cardiopulmonares', 5)->nullable();
            $table->string('piel_mucosas', 10)->nullable();
            $table->string('cabeza_cuello', 10)->nullable();
            $table->string('craneo', 10)->nullable();
            $table->string('orl', 10)->nullable();
            $table->string('boca', 10)->nullable();
            $table->string('cuello')->nullable();
            $table->string('torax', 10)->nullable();
            $table->string('mamas_simetricas', 5)->nullable();
            $table->string('mamas_lesiones_vasculares', 5)->nullable();
            $table->string('mamas_nodulos', 5)->nullable();
            $table->string('mamas_localizacion_derecho', 20)->nullable();
            $table->string('mamas_tamanno_derecho')->nullable();
            $table->string('mamas_localizacion_izquierdo', 20)->nullable();
            $table->string('mamas_tamanno_izquierdo')->nullable();
            $table->string('mamas_galactorrea', 5)->nullable();
            $table->string('mamas_galactorragia', 5)->nullable();
            $table->string('mamas_campos_pulmonares', 10)->nullable();
            $table->string('mamas_campos_pulmonares_si')->nullable();
            $table->string('mamas_cardiaco', 10)->nullable();
            $table->string('mamas_cardiaco_si')->nullable();
            $table->string('peristalsis', 20)->nullable();
            $table->string('utero_gravido_abdominal', 5)->nullable();
            $table->string('presentacion')->nullable();
            $table->string('situacion')->nullable();
            $table->string('posicion')->nullable();
            $table->string('frecuencia_cardiaca_fetal')->nullable();
            $table->string('utero_intrapelvico', 5)->nullable();
            $table->string('afu')->nullable();
            $table->text('otros_hallazgos_utero_gravido')->nullable();
            $table->string('examen_ginecologico', 5)->nullable();
            $table->string('genitales_externos', 10)->nullable();
            $table->string('vagina_normo_terminca', 5)->nullable();
            $table->string('vagina_normo_elastica', 5)->nullable();
            $table->string('vagina_lesiones', 5)->nullable();
            $table->string('vagina_describa')->nullable();
            $table->string('vagina_leucorrea', 5)->nullable();
            $table->string('vagina_fetidez', 5)->nullable();
            $table->string('vagina_sangrado', 5)->nullable();
            $table->string('vagina_hidrorrea', 5)->nullable();
            $table->string('vagina_cervix', 20)->nullable();
            $table->string('vagina_consistencia', 20)->nullable();
            $table->string('vagina_calotas', 5)->nullable();
            $table->string('vagina_membranas_integras', 20)->nullable();
            $table->string('vagina_calotas_solidas', 20)->nullable();
            $table->string('vagina_plano', 20)->nullable();
            $table->string('vagina_pelvis', 20)->nullable();
            $table->string('vagina_desproporcion_cefalopelvica', 20)->nullable();
            $table->string('vagina_miembros_inferiores', 5)->nullable();
            $table->string('vagina_miembros_inferiores_si')->nullable();
            $table->string('vagina_neurologico_conservado', 5)->nullable();
            $table->string('vagina_neurologico_conservado_si')->nullable();
            $table->string('ultrasonido', 5)->nullable();
            $table->text('ultrasonido_observaciones')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('diagnosticos')->nullable();
            $table->text('recordatorio')->nullable();
            $table->string('diabetes_familiar_si')->nullable();
            $table->string('hipertension_arterial_familiar_si')->nullable();
            $table->string('cardiopatia_familiar_si')->nullable();
            $table->string('nefropatias_familiar_si')->nullable();
            $table->string('tiroidea_si_emfermedad')->nullable();
            $table->string('tiroidea_si_familiar')->nullable();
            $table->string('enfermedad_inmunologica_familiar_si_efermedad')->nullable();
            $table->string('enfermedad_inmunologica_familiar_si_familiar')->nullable();
            $table->string('pre_eclampsia_familiar_si')->nullable();
            $table->string('inmunologica_tipo')->nullable();
            $table->unsignedBigInteger('paciente_id');
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
        Schema::dropIfExists('paciente_historia_clinicas');
    }
}
