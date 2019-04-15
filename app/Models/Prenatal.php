<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Prenatal extends Model
{
    use SoftDeletes;

    /*
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
		"referido", "edad", "date", "edad_gestacional", "paridad", "morbilidad", "rh_tipo", "numero", "diagnostico_previo", "presion_arterial_derecho",
		"presion_arterial_izquierdo", "presion_arterial_media", "signos_vitales_fc", "signos_vitales_fr", "temperatura", "peso_actual", "incremento_peso", "subjetivo",
		"alteraciones_hermodinamicas", "alteraciones_cardiopulmonar", "pezon_areola", "movimientos_fetales", "fcf_minuto", "actividad_uterina",
		"utero_gravido", "presentacion", "situacion", "posicion", "utero_intrapelvico", "peristalsis", "otros_hallazgos", "afu", "examen_ginecologico", "genitales_externos",
		"vagina_normo_termica", "vagina_normo_elastica", "vagina_lesiones", "vagina_lesiones_si", "vagina_leucorrea", "vagina_leucorrea_descripcion",
		"vagina_fetidez", "vagina_sangrado", "vagina_hidrorrea", "vagina_consistencia", "borramiento", "dilatacion", "vagina_calotas",
		"vagina_membranas_integras", "vagina_plano", "vagina_pelvis", "vagina_desproporcion_cefalopelvica", "vagina_desproporcion_cefalopelvica_descripcion",
		"vagina_miembros_inferiores_edema", "vagina_miembros_inferiores_edema_si", "vagina_ceurologico_conservado", "vagina_ceurologico_conservado_si",
		"porta_examen", "leocitos", "segmentos", "linfocitos", "hemoglobina", "hematocrito", "eosinofilos", "resticulocitos", "glicemia", "pospandrial_una",
		"pospandrial_dos", "creatinina", "ego_leucocitos", "nitritos", "glucosa", "proteinas", "cilindros", "papanicolaou", "fecha_papanicolaou",
		"resultado_papanicolaou", "cultivos_vaginales", "rpr_positivo", "vih_positivo", "urocultivo", "transaminasas", "billiruinas", "ldh", "tp", "tpt",
		"fibrinogeno", "acido_urico", "ultrasonido", "ultrasonido_si", "edad_gestional_semanas", "edad_gestional_dias", "ila", "planceta_grado",
		"doppler_normal", "incremento_peso_materno", "incremento_curva_fetal", "maduracion_pulmonar", "maduracion_pulmonal_semanas", "plan_medico_otro",
		'examen_laboratorio_otro', "comentarios", "diagnostico", "factores_riesgo", "recordatorio"
    ];

    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta', 'consulta_id');
    }

}
