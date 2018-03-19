<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id');
            $table->text('motivo')->nullable();
            $table->text('diabetes_familiar', 5)->nullable();
            $table->text('hipertension_arterial_familiar', 5)->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
            $table->text('motivo')->nullable();
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
        Schema::dropIfExists('historia_clinicas');
    }
}
