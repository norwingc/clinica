<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtencionPrenatalCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion_prenatal_citas', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fecha');
			$table->string('edad_gestacional');
			$table->string('peso');
			$table->string('precion_arterial');
			$table->string('afu');
			$table->string('presentacion');
			$table->string('fcf');
			$table->string('movimientos_fetales');
			$table->string('morbilidad');
			$table->integer('paciente_atencion_prenatal_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atencion_prenatal_citas');
    }
}
