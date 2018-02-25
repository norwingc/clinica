<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colposcopia extends Model
{
    /**
     * [protected description]
     * @var [type]
     */
    protected $fillable =[
        "referido", "edad", "date", "historia", "interpretacion_ivaa", "interpretacion_lugol", "clasificacion", "descripcion_colposcopia", "descripcion", "sugestivo_carcinoma",
        "descripcion_carcinoma", "toma_biopsia", "vaginoscopia", "vaginoscopia_descipcion", "vulvoscopia", "vulvoscopia_descipcion", "lesiones_perianales",
        "lesiones_perianales_descipcion", "comentarios", "recordatorio",
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
