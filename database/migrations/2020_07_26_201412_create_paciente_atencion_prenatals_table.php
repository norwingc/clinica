<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteAtencionPrenatalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_atencion_prenatals', function (Blueprint $table) {
			$table->increments('id');
			$table->text('atencedenetes_familiares');
			$table->text('atencedenetes_personales');
			$table->string('fecha_ultimo_evento_obstetrico');
			$table->string('peso_inicio_embarazo');
			$table->string('aumento_peso_embarazo');
			$table->string('tipo_rh_esposo');
			$table->string('fur');
			$table->string('semana_gestacion');
			$table->string('peso_fetal');
			$table->string('maduracion_pulmonar_semanas_complidas');
			$table->unsignedInteger('paciente_id');
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
        Schema::dropIfExists('paciente_atencion_prenatals');
    }
}
