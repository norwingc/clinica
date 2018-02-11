<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NeurosonografiaFeto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "vitalidad_feto", "presentacion", "situacion", "posicion", "fcf", "dbp_medida", "dbp_semanas", "cc_medida", "cc_semanas", "ca_medida",
        "ca_semanas", "lf_medida", "lf_semanas", "fetometria_promedio", "percentil", "peso_fetal", "fecha_parto", "percentil_ip_medio", "interpretacion_ip_medio",
        "percentil_notch_izquierda", "interpretacion_notch_izquierda", "percentil_notch_derecha", "interpretacion_notch_derecha", "percentil_cerebro_placentario",
        "interpretacion_cerebro_placentario", "percentil_arteria_cerebral", "interpretacion_arteria_cerebral", "percentil_arteria_umbilical", "interpretacion_arteria_umbilical",
        "percentil_flojo_diasotolico", "interpretacion_flojo_diasotolico", "percentil_itsmo_aortico", "interpretacion_itsmo_aortico", "percentil_ducto_venenoso",
        "interpretacion_ducto_venenoso", "percentil_flujo_dicto_venenoso", "interpretacion_flujo_dicto_venenoso", "percentil_vena_umbilical", "interpretacion_vena_umbilical", "craneo",
        "dolicocefalia", "braquicefalia", "craneo_tamano", "craneo_situras", "craneo_compresion", "craneo_interhemisferica", "craneo_hemisferios", "cavum_septum",
        "diametro_anteroposterior", "asta_frontales", "comunicacion_asta_ateriores", "plexo_coroideos", "presencia_quiste", "cisura_parietooccipital",
        "atrios_ventruculares", "atrio_derecho", "atrio_izquierdo", "area_ventricular", "talamos_normales", "giro_hipocampal_presente", "ventriculo_diametros",
        "ambos_hemisferios_simetricos", "vermis", "central_ecogenico", "morfologia_normal", "cisterna_magna", "comunicacion_4_ventriculo", "pliegue_nucal", "liena_intergemisferica",
        "asta_anteriores", "hueso_esfenoides", "asta_aterior_derecha", "asta_aterior_izquierda", "nucleos_caudado", "espacio_subaracnoideo", "espacio_craneocotical", "cisura_silvio",
        "tetorio_situs", "cisura_interhemisferica", "cuernos_occipitales", "presencia_calloso", "disgenesia", "saginal_longitud", "saginal_grosor", "csp_cavum", "fornix",
        "tronco_encefalico", "torcula_tendorio", "doppler_visualiza", "pericallosa", "vena_galeno", "cisuras_silvio", "cisura_occipital", "cisura_calcarina", "cisura_cingulada",
        "cortes_sagitales", "identifica_cono", "observa_osificacion", "integridad_cuerpos", "evidencia_mielocele", "evidencia_mielocele_descripcion", "evidencia_mielomeningocele",
        "evidencia_mielomeningocele_descripcion", "evidencia_mielosquisis", "evidencia_mielosquisise_descripcion", "placenta_numero", "placenta_posocion", "placenta_grado",
        "presencia_patologicas", "areas_infarto", "longitud_cervix", "funneling", "porcentaje_funneling", "sludge", "liquido_amniotico", "clasificacion_liquido_amniotico",
        "valor_ila"
    ];

    /**
     * [fetos description]
     * @return [type] [description]
     */
    public function examen()
    {
        return $this->belongsTo('App\Models\Neurosonografia', 'examen_id');
    }

}
