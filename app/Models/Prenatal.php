<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Prenatal extends Model
{
    use SoftDeletes;

    /*
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'date', 'doctor', 'costo', 'examen_type'
    ];

    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta', 'consulta_id');
    }

}
