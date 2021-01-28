<?php

namespace App\Models;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Model;

class PacienteHistoriaClinica extends Model
{
    /**
     * Undocumented variable
     * @var array
     */
    protected $fillable = [
        "motivo", "historia", "diabetes_familiar", "hipertension_arterial_familiar", "cardiopatia_familiar", "nefropatias_familiar",
        "tiroidea_familiar", "enfermedad_inmunologica_familiar", "enfermedad_oncologica_familiar", "enfermedad_oncologica_familiar_si",
        "malformacion_congenita_familiar", "malformacion_congenita_familiar_si", "pre_eclampsia_familiar", "alergias", "alergias_si", "fumado",
        "alcohol", "drogas", "drogas_si", "medicamentos", "medicamentos_si", "rh_paciente", "rh_esposo", "diabetes", "diabetes_si",
        "hipertension_arterial", "hipertension_arterial_tratamiento", "cardiopatia", "cardiopatia_tipo", "nefropatias", "nefropatias_tipo",
        "tiroidea", "tiroidea_tipo", "inmunologica", "oncologica", "oncologica_tipo", "malformacion_congenita", "malformacion_congenita_tipo",
        "pre_eclampsia", "manejo_pre_eclampsia", "cirugias_previas", "cirugias_previas_si", "hospitalizacion_previa", "hospitalizacion_previa_si",
        "menarca", "vida_sexual_inicio", "gesta", "gesta_parto", "gesta_legrado", "gesta_aborto", "gesta_cesarea", "gesta_embarazo_etopico", "gesta_gemelar_previo",
        "gesta_informacion", "gesta_nacidos_vivos", "gesta_nacidos_muertos", "gesta_muertos_primeros_dias", "gesta_muertos_mayor_dias", "planificacion",
        "planificacion_tipo", "menopausia", "menopausia_si", "papanicolaou", "papanicolaou_si", "ultima_regla", "embarazada", "edad_gestional",
        "fecha_ultrasonido", "fc_minuto", "fr_minuto", "persion_arterial_derecho", "persion_arterial_izquierdo", "temperatura", "peso", "talla",
        "imc", "conciente", "orientada", "febril", "condicion_hemodinamica", "alteraciones_cardiopulmonares", "piel_mucosas", "cabeza_cuello",
        "craneo", "orl", "boca", "cuello", "torax", "mamas_simetricas", "mamas_lesiones_vasculares", "mamas_nodulos", "mamas_localizacion_derecho",
        "mamas_tamanno_derecho", "mamas_localizacion_izquierdo", "mamas_tamanno_izquierdo", "mamas_galactorrea", "mamas_galactorragia",
        "mamas_campos_pulmonares", "mamas_campos_pulmonares_si", "mamas_cardiaco", "mamas_cardiaco_si", "peristalsis", "utero_gravido_abdominal",
        "presentacion", "situacion", "posicion", "frecuencia_cardiaca_fetal", "utero_intrapelvico", "afu", "otros_hallazgos_utero_gravido", "examen_ginecologico",
        "genitales_externos", "vagina_normo_terminca", "vagina_normo_elastica", "vagina_lesiones", "vagina_describa", "vagina_leucorrea",
        "vagina_fetidez", "vagina_sangrado", "vagina_hidrorrea", "vagina_cervix", "vagina_consistencia", "vagina_calotas",
        "vagina_membranas_integras", "vagina_calotas_solidas", "vagina_plano", "vagina_pelvis", "vagina_desproporcion_cefalopelvica",
        "vagina_miembros_inferiores", "vagina_miembros_inferiores_si", "vagina_neurologico_conservado", "vagina_neurologico_conservado_si", 'ultrasonido',
        'ultrasonido_observaciones', "observaciones", "diagnosticos", "recordatorio"
    ];

    /**
     * Undocumented function
     * @return void
     */
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
