<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ginecologica extends Model
{
  use SoftDeletes;

  protected $fillable = [
    "date", "numero", "diagnostico_previo", "signos_vitales_fc", "signos_vitales_fr", "signos_vitales_pa", "peso_actual", "incremento_peso", "subjetivo",
    "estado_general", "cardioplumonar", "genitales_externos", "cervix", "examenes", "ultrasonido", "plan", "comentarios", "recordatorio"
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
