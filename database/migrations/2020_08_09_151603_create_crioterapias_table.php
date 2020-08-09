<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrioterapiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crioterapias', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('consulta_id');
			$table->string('referido')->nullable();
            $table->string('edad', 30)->nullable();
            $table->string('date')->nullable();
			$table->text('historia')->nullable();
			$table->text('diagnostico_preoperatorio')->nullable();
			$table->text('hallazgos')->nullable();
			$table->text('esquema_crioterapia')->nullable();
			$table->text('complicaciones')->nullable();
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
        Schema::dropIfExists('crioterapias');
    }
}
