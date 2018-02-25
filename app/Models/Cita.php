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
        'title', 'start', 'end'
    ];


    /**
     * [consulta description]
     * @return [type] [description]
     */
    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'cita_id');
    }

    /**
     * [getCitasToday description]
     * @return [type] [description]
     */
    public static function getCitasToday()
    {
        return self::where('date', date('Y-m-d'));
    }
}
