<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Paciente extends Model
{
    use SoftDeletes;

    /*
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'name', 'id_number', 'celular', 'referido', 'email', 'birthday', 'convencional',
        'address', 'contacto', 'parentesco', 'contacto_celular', 'trabajo', 'escolaridad'
    ];


    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta', 'paciente_id');
    }

    public function historia()
    {
        return $this->hasOne('App\Models\HistoriaClinica', 'paciente_id');
    }

    public function fecha_procedimiento()
    {
        return $this->hasMany('App\Models\FechaProcedimiento', 'paciente_id');
    }

     /**
     * [getAge description]
     * @return [type] [description]
     */
    public function getAge()
    {
        if($this->birthday == null) return 'Ingresar Fecha de nacimiento';

        $nacimiento = $this->birthday;
        $date = explode("-", $nacimiento);

        return Carbon::createFromDate($date[0], $date[1], $date[2])->diff(Carbon::now())->format('%y años, %m meses y %d dias');
    }


}
