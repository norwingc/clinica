<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecocardiografia extends Model
{

    use SoftDeletes;

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "referido", "edad", "date", "paridad", "feto", "revision", "comentarios", "recordatorio"
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
        return $this->hasMany('App\Models\EcocardiografiaFeto', 'examen_id');
    }
}
