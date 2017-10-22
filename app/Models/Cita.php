<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cita extends Model
{
    use SoftDeletes;

    /*
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'title', 'start', 'end', 'color'
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
