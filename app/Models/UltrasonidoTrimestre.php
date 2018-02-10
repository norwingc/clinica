<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltrasonidoTrimestre extends Model
{

    use SoftDeletes;

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "edad", "date", "paridad", "feto", "historia_preecampsia_mama", "historia_hipertension_mama", "historia_preecampsia_hermana", "historia_hipertension_personal", "peso", "talla",
        "imc", "pa_derecho", "pa_izquierdo", "ip_artrias", "bidimensional", "doppler_color", "conclusion_lcc", "conclusion_riesago_cromosomopatias", "conclusion_riesago_preeclampsia",
        "conclusion_riesago_hipertensivos", "conclusion_riesago_restiaccion", "conclusion_riesago_parto_pretermino", "recomendaciones", "comentarios", "recordatorio"
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
        return $this->hasMany('App\Models\UltrasonidoTrimestreFeto', 'examen_id');
    }
}
