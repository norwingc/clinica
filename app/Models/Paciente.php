<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PacienteHistoriaClinica;
use Carbon\Carbon;

class Paciente extends Model
{
    use SoftDeletes;

    /**
     * Undocumented variable
     * @var array
     */
    protected $fillable = [
        'name', 'id_number', 'convencional', 'phone_claro', 'phone_movistar', 'referido', 'referido_paciente',
        'email', 'birthday', 'address', 'estado_civil', 'contacto', 'parentesco', 'contacto_celular', 'trabajo',
        'escolaridad', 'tipo_rh', 'paridad', 'morbilidad', 'embarazada', 'ultima_regla', 'personal_comentarios',
        'nombre_bebe', 'actualizado_por'
    ];

    /**
     * Undocumented function
     * @return void
     */
    public function getAgeFullAttribute()
    {
        if ($this->birthday == null) return '';
        return Carbon::parce($this->attributes['birthday'])->diff(Carbon::now())->format('%y años, %m meses y %d dias');
    }

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['birthday'])->age;
    }

    /**
     * Undocumented function
     * @return void
     */
    public function historia_clinica()
    {
        return $this->hasOne(PacienteHistoriaClinica::class);
    }
}
