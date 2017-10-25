<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoriaClinica extends Model
{
    use SoftDeletes;


     /*
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'date', 'doctor', 'costo', 'examen_type'
    ];

     /**
     * [paciente description]
     * @return [type] [description]
     */
    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente', 'paciente_id');
    }
}
