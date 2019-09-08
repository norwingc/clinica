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
        'name', 'id_number', 'phone', 'compania_phone', 'referido', 'referido_paciente', 'email', 'birthday', 'convencional', 'address', 'estado_civil', 'contacto', 'parentesco',
        'contacto_celular', 'trabajo', 'escolaridad', 'tipo_rh', 'paridad', 'morbilidad', 'ultima_regla'
    ];


    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta', 'paciente_id');
    }

    public function historia()
    {
        return $this->hasOne('App\Models\HistoriaClinica', 'paciente_id');
	}

	public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'paciente_id');
    }

    public function fecha_procedimiento()
    {
        return $this->hasMany('App\Models\FechaProcedimiento', 'paciente_id');
    }

    /**
     * [lastConsulta description]
     * @return [type] [description]
     */
    public function lastConsulta()
    {
        return $this->hasOne('App\Models\Consulta', 'paciente_id')->latest();
	}

	/**
	 * [orden_ingreso description]
	 * @return  [type]  [return description]
	 */
	public function orden_ingreso()
    {
        return $this->hasMany('App\Models\PacienteOrdenIngreso', 'paciente_id');
	}

     /**
     * [getAge description]
     * @return [type] [description]
     */
    public function getAge()
    {
        if($this->birthday == null) return '';

        $nacimiento = $this->birthday;
        $date = explode("-", $nacimiento);

        return Carbon::createFromDate($date[0], $date[1], $date[2])->diff(Carbon::now())->format('%y años, %m meses y %d dias');
    }

    /**
     * [getAgeAttribute description]
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }


}
