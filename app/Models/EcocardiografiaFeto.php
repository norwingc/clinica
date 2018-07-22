<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EcocardiografiaFeto extends Model
{
    use SoftDeletes;

    /**
     * [$fillable description]
     * @var array
     */
    protected $fillable = [
        "vitalidad_feto", "localizacion_feto", "presentacion", "situacion", "posicion", "fcf", "sexo_feto", "dbp_medida", "dbp_semanas", "cc_medida", "cc_semanas", "ca_medida",
        "ca_semanas", "lf_medida", "lf_semanas", "fetometria_promedio", "percentil", "peso_fetal", "fecha_parto", "percentil_ip_medio", "interpretacion_ip_medio",
        "percentil_notch_izquierda", "interpretacion_notch_izquierda", "percentil_notch_derecha", "interpretacion_notch_derecha", "percentil_cerebro_placentario",
        "interpretacion_cerebro_placentario", "percentil_arteria_cerebral", "interpretacion_arteria_cerebral", "percentil_arteria_umbilical", "interpretacion_arteria_umbilical",
        "percentil_flojo_diasotolico", "interpretacion_flojo_diasotolico", "percentil_itsmo_aortico", "interpretacion_itsmo_aortico", "percentil_ducto_venenoso",
        "interpretacion_ducto_venenoso", "percentil_flujo_dicto_venenoso", "interpretacion_flujo_dicto_venenoso", "percentil_vena_umbilical", "interpretacion_vena_umbilical",
        "situs", 'situs_ambiguo', "isomerismo", "corazon_tamano", "corazon_posicion", "corte", "auriculas", "ventriculos", "dominancia", "foramen", "valvula_mitral_implantacion",
        "valvula_mitral_funcionalidad", "valvula_tricuspide_implantacion", "valvula_tricuspide_funcionalidad", "tabique_interaventricular", "tabique_interaventricular_defecto",
        "tracto_salida_derecho", "tracto_salida_izquierdo", "tipo_conexion_ventricular", "modo_conexion_ventricular", "funcion_contractilidad",
        "funcion_rendimiento_cardiaco", "funcion_ritmo", "funcion_extrasistoles", "numero_vasos", "pulmonar", "aorta", "vena_cava", "tamano_vasos", "tamano_vasos_normal",
        "tamano_vasos_anormal", "arteria_pulmonar_izquierda", "aorta_medio", "vena_cava_derecha", "disposicion_normal", "disposicion_anormal", "vista_bi_cava", "vestibulo_venoso",
        "arco_aortico", "arco_ductal", "eje_corto_vasos", "eje_corto_centriculos", "placenta_numero", "placenta_posocion", "placenta_grado", "presencia_patologicas", "areas_infarto",
        "longitud_cervix", "funneling", "porcentaje_funneling", "sludge", "liquido_amniotico", "clasificacion_liquido_amniotico", "valor_ila",
    ];

    /**
     * [fetos description]
     * @return [type] [description]
     */
    public function examen()
    {
        return $this->belongsTo('App\Models\Ecocardiografia', 'examen_id');
    }
}
