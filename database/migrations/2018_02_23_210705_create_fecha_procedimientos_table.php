<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechaProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha_procedimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('hospital');
			$table->string('procedimiento');
            $table->string('codigo');
			$table->string('anestesiologo');
			$table->string('hr_nacimiento');
			$table->string('peso_fetal');
			$table->string('complicacion_maternal');
			$table->string('complicacion_fetal');
			$table->string('pediatra');
			$table->text('comentario');
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
        Schema::dropIfExists('fecha_procedimientos');
    }
}
