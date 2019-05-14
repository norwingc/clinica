<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteOrdenIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_orden_ingresos', function (Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->string('hospital');
			$table->string('sala');
			$table->text('procedimiento');
			$table->text('motivo_ingreso');
			$table->text('diagnostico_ingreso');
			$table->text('indicaciones');
			$table->integer('paciente_id');
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
        Schema::dropIfExists('paciente_orden_ingresos');
    }
}
