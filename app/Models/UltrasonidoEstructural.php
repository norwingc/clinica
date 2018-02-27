<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltrasonidoEstructural extends Model
{
    use SoftDeletes;

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "referido", "edad", "date", "paridad", "feto", "revision", "conclusion_riesgo_parto_pretermino", "conclusion_riesgo_preeclampsia", "conclusion_riesgo_hipertension",
        "conclusion_riesgo_restriccion_crecimiento", "conclusion_embarazo_fetometria", "concluciones", "comentarios", "recomendaciones", "recordatorio"
    ];

    /**
     * [consulta description]
     * @return [type] [description]
     */
    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta', 'consulta_id');
    }

    /**
     * [fetos description]
     * @return [type] [description]
     */
    public function fetos()
    {
        return $this->hasMany('App\Models\UltrasonidoEstructuralFeto', 'examen_id');
    }
}
