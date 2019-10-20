<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ginecologica extends Model
{
  use SoftDeletes;

  protected $fillable = [
    "referido", "edad", "date", "edad_gestacional", "paridad", "morbilidad", "rh_tipo", "numero", "diagnostico_previo", "signos_vitales_fc", "signos_vitales_fr", "signos_vitales_pa", "peso_actual", "incremento_peso", "subjetivo",
    "estado_general", "cardioplumonar", "genitales_externos", "cervix", "ultrasonido", "comentarios", "recordatorio", 'plan_medico_otro', 'examen_laboratorio_otro'
  ];

  /**
  * [consulta description]
  * @return [type] [description]
  */
 public function consulta()
 {
     return $this->belongsTo('App\Models\Consulta', 'consulta_id');
 }
}
