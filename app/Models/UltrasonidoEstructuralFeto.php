<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltrasonidoEstructuralFeto extends Model
{
	use SoftDeletes;

	protected $fillable = [
		"vitalidad_feto", "localizacion_feto", "presentacion", "situacion", "posicion", "fcf", "sexo_feto", "dbp_medida", "dbp_semanas", "cc_medida", "cc_semanas",
		"ca_medida", "ca_semanas", "lf_medida", "lf_semanas", "humero_medida", "humero_semanas", "radio_medida", "radio_semanas", "cubito_medida", "cubito_semanas",
		"tibia_medida", "tibia_semanas", "perone_medida", "perone_semanas", "cerebelo_medida", "cerebelo_semanas", "cisterna_magna", "pliegue_nucal",
		"fetometria_promedio", "percentil", "peso_fetal", "fecha_parto", "percentil_ip_medio", "interpretacion_ip_medio", "percentil_notch_izquierda",
		"interpretacion_notch_izquierda", "percentil_notch_derecha", "interpretacion_notch_derecha", "percentil_cerebro_placentario",
		"interpretacion_cerebro_placentario", "percentil_arteria_cerebral", "interpretacion_arteria_cerebral", "percentil_arteria_umbilical",
		"interpretacion_arteria_umbilical", "percentil_flojo_diasotolico", "interpretacion_flojo_diasotolico", "percentil_itsmo_aortico", "interpretacion_itsmo_aortico",
		"percentil_ducto_venenoso", "interpretacion_ducto_venenoso", "percentil_flujo_dicto_venenoso", "interpretacion_flujo_dicto_venenoso", "percentil_vena_umbilical",
		"interpretacion_vena_umbilical", "craneo", "dolicocefalia", "braquicefalia", "craneo_tamano", "craneo_situras", "craneo_compresion", "craneo_interhemisferica",
		"craneo_hemisferios", "cavum_septum", "diametro_anteroposterior", "asta_frontales", "comunicacion_asta_ateriores", "plexo_coroideos", "presencia_quiste",
		"cisura_parietooccipital", "atrios_ventruculares", "atrio_derecho", "atrio_izquierdo", "area_ventricular", "ambos_hemisferios_simetricos", "vermis", "central_ecogenico",
		"morfologia_normal", "comunicacion_4_ventriculo", "cortes_sagitales", "identifica_cono", "observa_osificacion", "integridad_cuerpos", "evidencia_intracraneales",
		"columna_descipcion", "hueso_nasal", "retrognatia", "labio_normal", "clasificacion_labio", "torax_pulmon", "torax_lesion", "torax_masa_quistica", "torax_masa_solida",
		"torax_descripcion", "torax_nutricion_masa", "corazon_situs", "corazon_tamano", "corazon_cardiomegalia", "corazon_cardiomegalia_severa", "corazon_corte_camaras",
		"corazon_tracto_derecho", "corazon_tracto_izquierdo", "corazon_corte_vasos", "insercion_cordon", "presencia_vasos", "arteria_umbilical", "pared_integra", "defecto_umbilical",
		"defecto_cordon", "defecto_medida", "cubierta_membrana", "asas_intestino_delgado", "asas_intestino_grueso", "dilatacion_intra_abdominal", "medicion_intra_abdominal",
		"dilatacion_extra_abdominal", "medicion_extra_abdominal", "sospecha_peritonitis", "camara_gastrica", "vejiga_urinaria", "camara_gastrica_insitu",
		"rinon_derecho", "rinon_derecho_tanano", "pelvis_derecho", "hidronefosis_derecho", "grado_derecho", "glandulas_suprarrenales_derecho", "rinon_izquierdo",
		"rinon_izquierdo_tanano", "pelvis_izquierdo", "hidronefosis_izquierdo", "grado_izquierdo", "glandulas_suprarrenales_izquierdo", "vejiga_urinaria_insitu",
		"engrosamiento_pared", "extremidades_superiores", "extremidades_superiores_integras", "extremidades_superiores_afectada", "extremidades_inferiores", "extremidades_inferiores_integras",
		"extremidades_inferiores_afectada", "placenta_numero", "placenta_posocion", "placenta_grado", "presencia_patologicas", "areas_infarto", "longitud_cervix", "funneling",
		"porcentaje_funneling", "sludge", "liquido_amniotico", "clasificacion_liquido_amniotico", "valor_ila"
	];

	/**
	 * [fetos description]
	 * @return [type] [description]
	 */
	public function examen()
	{
		return $this->belongsTo('App\Models\UltrasonidoEstructural', 'examen_id');
	}
}
