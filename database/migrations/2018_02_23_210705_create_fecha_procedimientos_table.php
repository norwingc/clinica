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
            $table->integer('paciente_id');
            $table->string('hospital');
            $table->string('procedimiento');
            $table->date('date');
            $table->string('costo');
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
