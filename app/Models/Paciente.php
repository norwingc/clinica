<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Paciente extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'name', 'id_number', 'celular', 'referido', 'email', 'birthday', 'convencional',
        'address', 'contacto', 'parentesco', 'contacto_celular', 'trabajo', 'escolaridad'
    ];

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
