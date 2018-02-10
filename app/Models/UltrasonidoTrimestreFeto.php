<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltrasonidoTrimestreFeto extends Model
{

    use SoftDeletes;

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "vitalidad_feto", "somatometria_lcc", "somatometria_semanas", "somatometria_dbp", "somatometria_cc", "somatometria_ca", "somatometria_lf", "somatometria_fcf",
        "somatometria_fetometria", "somatometria_tn", "somatometria_fecha_estimada_parto", "craneo", "craneo_forma", "pexos_caroideos", "quiste_plexos", "hueso_nasal",
        "medicion_nasal", "torax_normal", "localizacion_intratoracica", "ectopia_cordis", "anomalia_cardica", "descripcion_anomalia_cardica", "insercion_cordon", "presencia_vasos",
        "arteria_umbilical", "pared_integra", "localizacion_defecto_abdominal", "defecto_medida", "cubierta_membrana", "asas_intestino_delgado", "asas_intestino_grueso",
        "dilatacion_intra_abdominal", "medicion_intra_abdominal", "dilatacion_extra_abdominal", "medicion_extra_abdominal", "sospecha_peritonitis", "camara_gastrica", "vejiga_urinaria",
        "vejiga", "extremidades_superiores", "extremidades_superiores_integras", "extremidades_superiores_afectada", "extremidades_inferiores", "extremidades_inferiores_integras",
        "extremidades_inferiores_afectada", "placenta_numero", "placenta_posocion", "fusion_membranas", "placenta_grado", "longitud_cervix",  "funneling", "porcentaje_funneling",
        "sludge", "liquido_amniotico", "basal", "edad_tn", "edad_tn_marcadores"
    ];

    /**
     * [fetos description]
     * @return [type] [description]
     */
    public function exaamen()
    {
        return $this->belongsTo('App\Models\UltrasonidoTrimestre', 'examen_id');
    }
}
