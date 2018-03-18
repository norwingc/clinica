<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DopplerFeto extends Model
{
    use SoftDeletes;

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "vitalidad_feto", "presentacion", "situacion", "posicion", "fcf", "dbp_medida", "dbp_semanas", "cc_medida", "cc_semanas", "ca_medida", "ca_semanas", "lf_medida", "lf_semanas",
        "fetometria_promedio", "percentil", "peso_fetal", "fecha_parto", "percentil_ip_medio", "interpretacion_ip_medio", "percentil_notch_izquierda", "interpretacion_notch_izquierda",
        "percentil_notch_derecha", "interpretacion_notch_derecha", "percentil_cerebro_placentario", "interpretacion_cerebro_placentario", "percentil_arteria_cerebral",
        "interpretacion_arteria_cerebral", "percentil_arteria_umbilical", "interpretacion_arteria_umbilical", "percentil_flojo_diasotolico", "interpretacion_flojo_diasotolico",
        "percentil_itsmo_aortico", "interpretacion_itsmo_aortico", "percentil_ducto_venenoso", "interpretacion_ducto_venenoso", "percentil_flujo_dicto_venenoso",
        "interpretacion_flujo_dicto_venenoso", "percentil_vena_umbilical", "interpretacion_vena_umbilical", "semanas", "movimiento_respiratorios", "tono_fetal",
        "movimiento_corporales", "liquido_amoniotico", "integridad_cardiaca", "examen_nst", "analisis_nst", "datos_nst", "examen_maduracion", "indice_maduracion_torax",
        "indice_maduracion_basal", "indice_maduracion_pulmonar", "riesgo_distres", "examen_oportunidad", "parto_espontaneo", "cesarea_espontaneo",
        "cesarea_induccion", "placenta_numero", "placenta_posocion", "placenta_grado", "presencia_patologicas", "areas_infarto","longitud_cervix",
        "funneling", "porcentaje_funneling", "sludge", "liquido_amniotico", "clasificacion_liquido_amniotico", "valor_ila",
    ];

    /**
     * [fetos description]
     * @return [type] [description]
     */
    public function examen()
    {
        return $this->belongsTo('App\Models\Doppler', 'examen_id');
    }
}
