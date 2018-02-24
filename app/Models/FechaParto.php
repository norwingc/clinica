<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FechaParto extends Model
{

    /**
     * [protected description]
     * @var [type]
     */
    protected $fillable = [
        'hospital', 'via_nacimiento', 'date', 'costo'
    ];

    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente', 'paciente_id');
    }
}
