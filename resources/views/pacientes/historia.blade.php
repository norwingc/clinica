@extends('templates._maintemplate')

@section('title') Historia Clinica @endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
@endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Informacion Personal: {{ $paciente->name }} / {{ $paciente->id_number }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('pacientes') }}">Pacientes</a></li>
    </ol>
</section>
<div class="header-paciente">
    <div class="row">
        <div class="personal-information col-xs-6 col-md-3"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
        <div class="history col-xs-6 col-md-3 active"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
        <div class="summary col-xs-6 col-md-3"><a href="{{ route('paciente.show', $paciente) }}">Summary</a></div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Historia Clinica</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                    @if($paciente->historia)
                    {!! Form::open(['route' => ['paciente.historia.update', $paciente->historia], 'class' => 'form-horizontal form-examen']) !!}
                    @else
                    {!! Form::open(['route' => ['paciente.historia.store', $paciente], 'class' => 'form-horizontal form-examen']) !!}
                    @endif

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Motivo de la consulta:</label>
                                <div>
                                    <textarea name="motivo" id="motivo" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-lg-12">
                                <label>Historia de la Enfermedad Actual:</label>
                                <div>
                                    <textarea name="historia" id="historia" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <p class="subtitul_form">Antecedentes Familiares Patológicos:</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Diabetes</label>
                                <div>
                                    <select name="diabetes_familiar" id="diabetes_familiar" class="form-control" data-target='diabetes_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 diabetes_familiar_si_form" style="display: none">
                                <label>Seleccione Diabetes</label>
                                <div>
                                    <select name="diabetes_familiar_si[]" id="diabetes_familiar_si" class="selectpicker form-control" multiple>
                                        <option value="Abuela Materno/Paterno">Abuela Materno/Paterno</option>
                                        <option value="Abuelo Materno/Paterno">Abuelo Materno/Paterno</option>
                                        <option value="Mama">Mama</option>
                                        <option value="Papa">Papa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hipertensión arterial crónica</label>
                                <div>
                                    <select name="hipertension_arterial_familiar" id="hipertension_arterial_familiar" class="form-control" data-target='hipertension_arterial_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 hipertension_arterial_familiar_si_form" style="display: none">
                                <label>Seleccione Hipertensión arterial</label>
                                <div>
                                    <select name="hipertension_arterial_familiar_si" id="hipertension_arterial_familiar_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Idem">Idem</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cardiopatía</label>
                                <div>
                                    <select name="cardiopatia_familiar" id="cardiopatia_familiar" class="form-control" data-target='cardiopatia_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 cardiopatia_familiar_si_form" style="display: none">
                                <label>Seleccione Cardiopatía</label>
                                <div>
                                    <select name="cardiopatia_familiar_si[]" id="cardiopatia_familiar_si" class="selectpicker form-control" multiple>
                                        <option value="Abuela Materno/Paterno">Abuela Materno/Paterno</option>
                                        <option value="Abuelo Materno/Paterno">Abuelo Materno/Paterno</option>
                                        <option value="Mama">Mama</option>
                                        <option value="Papa">Papa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nefropatías</label>
                                <div>
                                    <select name="nefropatias_familiar" id="nefropatias_familiar" class="form-control" data-target='nefropatias_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 nefropatias_familiar_si_form" style="display: none">
                                <label>Seleccione Nefropatías</label>
                                <div>
                                    <select name="nefropatias_familiar_si[]" id="nefropatias_familiar_si" class="selectpicker form-control" multiple>
                                        <option value="Abuela Materno/Paterno">Abuela Materno/Paterno</option>
                                        <option value="Abuelo Materno/Paterno">Abuelo Materno/Paterno</option>
                                        <option value="Mama">Mama</option>
                                        <option value="Papa">Papa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Enfermedad Tiroidea</label>
                                <div>
                                    <select name="tiroidea_familiar" id="tiroidea_familiar" class="form-control" data-target='tiroidea_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 tiroidea_familiar_si_form" style="display: none">
                                <label>Seleccione Enfermedad Tiroidea</label>
                                <div>
                                    <select name="tiroidea_si_familiar" id="tiroidea_si_familiar" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Hipertiroidismo">Hipertiroidismo</option>
                                        <option value="IDEM Hipotiroidismo">IDEM Hipotiroidismo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Enfermedad Inmunológica</label>
                                <div>
                                    <select name="enfermedad_inmunologica_familiar" id="enfermedad_inmunologica_familiar" class="form-control" data-target='enfermedad_inmunologica_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 enfermedad_inmunologica_familiar_si_form" style="display: none">
                                <label>Seleccione Enfermedad Inmunológica</label>
                                <div>
                                    <select name="enfermedad_inmunologica_familiar_si" id="enfermedad_inmunologica_familiar_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="IDEM Lupus Eritematoso">IDEM Lupus Eritematoso</option>
                                        <option value="Síndrome Anti Fosfolípido">Síndrome Anti Fosfolípido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Enfermedad Oncológica</label>
                                <div>
                                    <select name="enfermedad_oncologica_familiar" id="enfermedad_oncologica_familiar" class="form-control" data-target='enfermedad_oncologica_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 enfermedad_oncologica_familiar_si_form" style="display: none">
                                <label>Seleccione Enfermedad Oncológica</label>
                                <div>
                                   <input type="text" name="enfermedad_oncologica_familiar_si" id="enfermedad_oncologica_familiar_si" class="form-control" placeholder="Cual Enfermedad Oncológica">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Malformación Congénita</label>
                                <div>
                                    <select name="malformacion_congenita_familiar" id="malformacion_congenita_familiar" class="form-control" data-target='malformacion_congenita_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 malformacion_congenita_familiar_si_form" style="display: none">
                                <label>Seleccione Malformación Congénita</label>
                                <div>
                                   <input type="text" name="malformacion_congenita_familiar_si" id="malformacion_congenita_familiar_si" class="form-control" placeholder="Cual Malformación Congénita">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Pre Eclampsia</label>
                                <div>
                                    <select name="pre_eclampsia_familiar" id="pre_eclampsia_familiar" class="form-control" data-target='pre_eclampsia_familiar_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 pre_eclampsia_familiar_si_form" style="display: none">
                                <label>Seleccione Pre Eclampsia</label>
                                <div>
                                    <select name="pre_eclampsia_familiar_si[]" id="pre_eclampsia_familiar_si" class="selectpicker form-control" multiple>
                                        <option value="Hermana">Hermana</option>
                                        <option value="Mama">Mama</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <p class="subtitul_form">Antecedentes Personales No Patológicos:</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Alergias</label>
                                <div>
                                    <select name="alergias" id="alergias" class="form-control" data-target='alergias_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 alergias_si_form" style="display: none">
                                <label>Seleccione Alergias</label>
                                <div>
                                   <input type="text" name="alergias_si" id="alergias_si" class="form-control" placeholder="Cual Alergias">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fumado</label>
                                <div>
                                    <select name="fumado" id="fumado" class="form-control" required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Alcohol</label>
                                <div>
                                    <select name="alcohol" id="alcohol" class="form-control" required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Drogas</label>
                                <div>
                                    <select name="drogas" id="drogas" class="form-control" data-target='drogas_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 drogas_si_form" style="display: none">
                                <label>Seleccione Drogas</label>
                                <div>
                                   <input type="text" name="drogas_si" id="drogas_si" class="form-control" placeholder="Cuales Drogas">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Medicamentos</label>
                                <div>
                                    <select name="medicamentos" id="medicamentos" class="form-control" data-target='medicamentos_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 medicamentos_si_form" style="display: none">
                                <label>Seleccione Drogas</label>
                                <div>
                                   <input type="text" name="medicamentos_si" id="medicamentos_si" class="form-control" placeholder="Cuales Medicamentos">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tipo y Rh Paciente</label>
                                <div>
                                    <select name="rh_paciente" id="rh_paciente" class="form-control" required>
                                        <option value="">Selecione Uno</option>
                                        <option value="A negativo">A negativo</option>
                                        <option value="A positivo">A positivo</option>
                                        <option value="AB Negativo">AB Negativo</option>
                                        <option value="AB Positivo">AB Positivo</option>
                                        <option value="B Negativo">B Negativo</option>
                                        <option value="B positivo">B positivo</option>
                                        <option value="O negativo">O negativo</option>
                                        <option value="O positivo">O positivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tipo y Rh Esposo</label>
                                <div>
                                    <select name="rh_esposo" id="rh_esposo" class="form-control" required>
                                        <option value="">Selecione Uno</option>
                                        <option value="A negativo">A negativo</option>
                                        <option value="A positivo">A positivo</option>
                                        <option value="AB Negativo">AB Negativo</option>
                                        <option value="AB Positivo">AB Positivo</option>
                                        <option value="B Negativo">B Negativo</option>
                                        <option value="B positivo">B positivo</option>
                                        <option value="O negativo">O negativo</option>
                                        <option value="O positivo">O positivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <p class="subtitul_form">Antecedentes Personales Patológicos:</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Diabetes</label>
                                <div>
                                    <select name="diabetes" id="diabetes" class="form-control" data-target='diabetes_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 diabetes_si_form" style="display: none">
                                <label>Seleccione Diabetes</label>
                                <div>
                                    <select name="diabetes_si" id="diabetes_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Diabetes Gestacional">Diabetes Gestacional</option>
                                        <option value="Diabetes Tipo 1">Diabetes Tipo 1</option>
                                        <option value="Diabetes Tipo 2">Diabetes Tipo 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hipertensión Arterial Crónica</label>
                                <div>
                                    <select name="hipertension_arterial" id="hipertension_arterial" class="form-control" data-target='hipertension_arterial_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 hipertension_arterial_si_form" style="display: none">
                                <label>Seleccione Hipertensión Arterial</label>
                                <div>
                                    <select name="hipertension_arterial_si" id="hipertension_arterial_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Idem">Idem</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cardiopatía</label>
                                <div>
                                    <select name="cardiopatia" id="cardiopatia" class="form-control" data-target='cardiopatia_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 cardiopatia_si_form" style="display: none">
                                <label>Seleccione Cardiopatía</label>
                                <div>
                                   <input type="text" name="cardiopatia_si" id="cardiopatia_si" class="form-control" placeholder="Cuales Cardiopatía">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nefropatías</label>
                                <div>
                                    <select name="nefropatias" id="nefropatias" class="form-control" data-target='nefropatias_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 nefropatias_si_form" style="display: none">
                                <label>Seleccione Nefropatías</label>
                                <div>
                                   <input type="text" name="nefropatias_si" id="nefropatias_si" class="form-control" placeholder="Cuales Nefropatías">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Enfermedad Tiroidea</label>
                                <div>
                                    <select name="tiroidea" id="tiroidea" class="form-control" data-target='tiroidea_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 tiroidea_si_form" style="display: none">
                                <label>Seleccione Enfermedad Tiroidea</label>
                                <div>
                                    <select name="tiroidea_si" id="tiroidea_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Bocio Eutiroideo">Bocio Eutiroideo</option>
                                        <option value="Hipertiroidismo">Hipertiroidismo</option>
                                        <option value="Hipotiroidismo">Hipotiroidismo</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <label>Enfermedad Inmunológica</label>
                                <div>
                                    <select name="inmunologica" id="inmunologica" class="form-control" data-target='inmunologica_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 inmunologica_si_form" style="display: none">
                                <label>Seleccione Enfermedad Inmunológica</label>
                                <div>
                                    <select name="inmunologica_si" id="inmunologica_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Artritis Reumatoide">Artritis Reumatoide</option>
                                        <option value="Lupus Eritematoso">Lupus Eritematoso</option>
                                        <option value="Síndrome Anti Fosfolípido">Síndrome Anti Fosfolípido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Enfermedad Oncológica</label>
                                <div>
                                    <select name="oncologica" id="oncologica" class="form-control" data-target='oncologica_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 oncologica_si_form" style="display: none">
                                <label>Seleccione Enfermedad Oncológica</label>
                                <div>
                                   <input type="text" name="oncologica_si" id="oncologica_si" class="form-control" placeholder="Cuales Enfermedad Oncológica">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Malformación Congénita</label>
                                <div>
                                    <select name="malformacion_congenita" id="malformacion_congenita" class="form-control" data-target='malformacion_congenita_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 malformacion_congenita_si_form" style="display: none">
                                <label>Seleccione Malformación Congénita</label>
                                <div>
                                   <input type="text" name="malformacion_congenita_si" id="malformacion_congenita_si" class="form-control" placeholder="Cuales Malformación Congénita">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Pre eclampsia en embarazo previo</label>
                                <div>
                                    <select name="pre_eclampsia" id="pre_eclampsia" class="form-control" required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hospitalizaciones previas</label>
                                <div>
                                    <select name="hospitalizacion_previa" id="hospitalizacion_previa" class="form-control" data-target="hospitalizacion_previa_si_form" required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 hospitalizacion_previa_si_form" style="display: none">
                                <label>Fecha / Causa</label>
                                <div>
                                   <input type="text" name="hospitalizacion_previa_si" id="hospitalizacion_previa_si" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Cirugías pélvicas y de otro tipo</label>
                                <div>
                                    <select name="cirugias_pelvicas" id="cirugias_pelvicas" class="form-control" data-target='cirugias_pelvicas_si' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 cirugias_pelvicas_si" style="display: none">
                                <label>Cantidad</label>
                                <div>
                                    <input type="number" min="1" class="form-control" id="cantidad_cirugias_pelvicas">
                                </div>
                            </div>
                            <div class="col-sm-12 cirugias_pelvicas_si" style='display: none; margin-top: 1em'>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Procedimiento</th>
                                            <th class="text-center">Complicación</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_cantidad_cirugias_pelvicas">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p class="subtitul_form">Antecedentes Gineco Obstétricos:</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Menarca</label>
                                <div>
                                    <input type="month" name="menarca" id="menarca" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Inicio de vida sexual</label>
                                <div>
                                    <input type="month" name="vida_sexual_inicio" id="vida_sexual_inicio" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Gesta</label>
                                <div>
                                    <input type="number" name="gesta" id="gesta" class="form-control" required min="0" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group gesta_si" style="display: none">
                            <div class="col-sm-2">
                                <label>Parto</label>
                                <div>
                                    <input type="number" name="gesta_parto" id="gesta_parto" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Aborto</label>
                                <div>
                                    <input type="number" name="gesta_aborto" id="gesta_aborto" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Cesárea</label>
                                <div>
                                    <input type="number" name="gesta_cesarea" id="gesta_cesarea" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Embarazo Ectópico</label>
                                <div>
                                    <input type="number" name="gesta_embarazo_etopico" id="gesta_embarazo_etopico" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Legrado</label>
                                <div>
                                    <input type="number" name="gesta_parto" id="gesta_parto" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Gemelar Previo</label>
                                <div>
                                    <input type="number" name="gesta_gemelar_previo" id="gesta_gemelar_previo" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Informacion</label>
                                <div>
                                    <textarea name="gesta_informacion" id="gesta_informacion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nacidos Vivos</label>
                                <div>
                                    <input type="number" name="gesta_nacidos_vivos" id="gesta_nacidos_vivos" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nacidos Muertos</label>
                                <div>
                                    <input type="number" name="gesta_nacidos_muertos" id="gesta_nacidos_muertos" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Muertos primeros 7 días</label>
                                <div>
                                    <input type="number" name="gesta_muertos_primeros_dias" id="gesta_muertos_primeros_dias" class="form-control" min="0">
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <label>Muertos &gt; 7 días</label>
                                <div>
                                    <input type="number" name="gesta_muertos_mayor_dias" id="gesta_muertos_mayor_dias" class="form-control" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Planificación Familiar</label>
                                <div>
                                    <select name="planificacion" id="planificacion" class="form-control" data-target='planificacion_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 planificacion_si_form" style="display: none">
                                <label>Seleccione Planificación Familiar</label>
                                <div>
                                    <select name="planificacion_si" id="planificacion_si" class="form-control">
                                        <option value="">Seleccione Uno</option>
                                        <option value="Barrera">Barrera</option>
                                        <option value="Inyectables">Inyectables</option>
                                        <option value="Inyectable Trimestral">Inyectable Trimestral</option>
                                        <option value="Mensual">Mensual</option>
                                        <option value="Natural">Natural</option>
                                        <option value="Oral">Oral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Menopausia</label>
                                <div>
                                    <select name="menopausia" id="menopausia" class="form-control" data-target='menopausia_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 menopausia_si_form" style="display: none">
                                <label>Seleccione Menopausiar</label>
                                <div>
                                    <input type="month" name="menopausia_si" id="menopausia_si" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Papanicolaou</label>
                                <div>
                                    <select name="papanicolaou" id="papanicolaou" class="form-control" data-target='papanicolaou_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 papanicolaou_si_form" style="display: none">
                                <label>Fecha / Resultado</label>
                                <div>
                                    <input type="text" name="papanicolaou_si" id="papanicolaou_si" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fecha de ultima regla</label>
                                <div>
                                   <input type="date" name="ultima_regla" id="ultima_regla" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Embarazada</label>
                                <div>
                                    <select name="embarazada" id="embarazada" class="form-control" data-target='embarazada_si_form' required>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 embarazada_si_form" style="display: none">
                                <label>Edad Gestional</label>
                                <div>
                                    <p id="edad_gestional_view"></p>
                                    <textarea name="edad_gestional" id="edad_gestional" class="form-control" style="display: none"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3 embarazada_si_form" style="display: none">
                                <label>Fecha de parto por ultrasonido</label>
                                <div>
                                    <input type="date" name="fecha_ultrasonido" id="fecha_ultrasonido" class="form-control">
                                </div>
                            </div>
                        </div>

                        <p class="subtitul_form">Examen Físico:</p>
                        <p>Signos Vitales</p>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>FC (Por minuto)</label>
                                <div>
                                    <input type="number" name="fc_minuto" id="fc_minuto" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>FR (Por minuto)</label>
                                <div>
                                    <input type="number" name="fr_minuto" id="fr_minuto" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Presión arterial Derecho (mmhg)</label>
                                <div>
                                    <input type="number" name="persion_arterial_derecho" id="persion_arterial_derecho" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Presión arterial Izquierdo (mmhg)</label>
                                <div>
                                    <input type="number" name="persion_arterial_izquierdo" id="persion_arterial_izquierdo" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Temperatura (&deg;C)</label>
                                <div>
                                    <input type="number" name="temperatura" id="temperatura" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <p>Datos Antropométricos:</p>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>Peso (kgs)</label>
                                <div>
                                    <input type="number" name="peso" id="peso" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Talla (mts)</label>
                                <div>
                                    <input type="number" name="talla" id="talla" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>IMC</label>
                                <div>
                                    <input type="text" name="imc" id="imc" class="form-control" readonly required>
                                </div>
                            </div>
                        </div>
                        <p>General:</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Conciente</label>
                                <div>
                                    <select name="conciente" id="conciente" class="form-control">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Orientada</label>
                                <div>
                                    <select name="orientada" id="orientada" class="form-control">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Febril</label>
                                <div>
                                    <select name="febril" id="febril" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Condición hemodinámica adecuada</label>
                                <div>
                                    <select name="condicion_hemodinamica" id="condicion_hemodinamica" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Alteraciones cardiopulmonares</label>
                                <div>
                                    <select name="alteraciones_cardiopulmonares" id="alteraciones_cardiopulmonares" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Piel y Mucosas</label>
                                <div>
                                    <select name="piel_mucosas" id="piel_mucosas" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cabeza y Cuello</label>
                                <div>
                                    <select name="cabeza_cuello" id="cabeza_cuello" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Craneo</label>
                                <div>
                                    <select name="craneo" id="craneo" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>ORL</label>
                                <div>
                                    <select name="orl" id="orl" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Boca</label>
                                <div>
                                    <select name="boca" id="boca" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cuello</label>
                                <div>
                                    <textarea name="cuello" id="cuello" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Torax</label>
                                <div>
                                    <select name="torax" id="torax" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <p>Mamas</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Simétricas</label>
                                <div>
                                    <select name="mamas_simetricas" id="mamas_simetricas" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Lesiones Vasculares</label>
                                <div>
                                    <select name="mamas_lesiones_vasculares" id="mamas_lesiones_vasculares" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nódulos</label>
                                <div>
                                    <select name="mamas_nodulos" id="mamas_nodulos" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Localización Derecho</label>
                                <div>
                                    <select name="mamas_localizacion_derecho" id="mamas_localizacion_derecho" class="form-control">
                                        <option value="CSE">CSE</option>
                                        <option value="CIE">CIE</option>
                                        <option value="CSI">CSI</option>
                                        <option value="CII">CII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tamaño Derecho</label>
                                <div>
                                   <input type="number" name="mamas_tamanno_derecho" id="mamas_tamanno_derecho" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Localización Izquierdo</label>
                                <div>
                                    <select name="mamas_localizacion_izquierdo" id="mamas_localizacion_izquierdo" class="form-control">
                                        <option value="CSE">CSE</option>
                                        <option value="CIE">CIE</option>
                                        <option value="CSI">CSI</option>
                                        <option value="CII">CII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tamaño Izquierdo</label>
                                <div>
                                   <input type="number" name="mamas_tamanno_izquierdo" id="mamas_tamanno_izquierdo" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Galactorrea</label>
                                <div>
                                    <select name="mamas_galactorrea" id="mamas_galactorrea" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Galactorragia</label>
                                <div>
                                    <select name="mamas_galactorragia" id="mamas_galactorragia" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Campos Pulmonares</label>
                                <div>
                                    <select name="mamas_campos_pulmonares" id="mamas_campos_pulmonares" class="form-control" data-target="mamas_campos_pulmonares_si_form">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 mamas_campos_pulmonares_si_form" style="display: none">
                                <label>Campos Pulmonares Cual</label>
                                <div>
                                    <input type="text" name="mamas_campos_pulmonares_si" id="mamas_campos_pulmonares_si" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cardíaco</label>
                                <div>
                                    <select name="mamas_cardiaco" id="mamas_cardiaco" class="form-control" data-target="mamas_cardiaco_si_form">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 mamas_cardiaco_si_form" style="display: none">
                                <label>Cardíaco Cual</label>
                                <div>
                                    <input type="text" name="mamas_cardiaco_si" id="mamas_cardiaco_si" class="form-control">
                                </div>
                            </div>
                        </div>

                        <p>Abdomen y Pelvis</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Peristalsis</label>
                                <div>
                                    <select name="peristalsis" id="peristalsis" class="form-control">
                                        <option value="Ausente">Ausente</option>
                                        <option value="Disminuido">Disminuido</option>
                                        <option value="Presente">Presente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Utero Grávido Abdominal</label>
                                <div>
                                    <select name="utero_gravido_abdominal" id="utero_gravido_abdominal" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Útero Intrapelvico</label>
                                <div>
                                    <select name="utero_intrapelvico" id="utero_intrapelvico" class="form-control" data-target="utero_intrapelvico_si_form">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 utero_intrapelvico_si_form" style="display: none">
                                <label>AFU (cms)</label>
                                <div>
                                    <input type="number" name="afu" id="afu" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group utero_intrapelvico_si_form" style="display: none">
                            <div class="col-sm-3">
                                <label>Unico</label>
                                <div>
                                    <input type="text" name="feto_unico" class="form-control">
                                </div>
                            </div>
                        </div>

                        <p>Examen Ginecologico</p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Examen Ginecológico</label>
                                <div>
                                    <select name="examen_ginecologico" id="examen_ginecologico" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Genitales Externos</label>
                                <div>
                                    <select name="genitales_externos" id="genitales_externos" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Anormal">Anormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo Térmica</label>
                                <div>
                                    <select name="vagina_normo_terminca" id="vagina_normo_terminca" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo elástica</label>
                                <div>
                                    <select name="vagina_normo_elastica" id="vagina_normo_elastica" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Lesiones</label>
                                <div>
                                    <select name="vagina_lesiones" id="vagina_lesiones" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Describa</label>
                                <div>
                                   <input type="text" name="vagina_describa" id="vagina_describa" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Leucorrea</label>
                                <div>
                                    <select name="vagina_leucorrea" id="vagina_leucorrea" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fetidez</label>
                                <div>
                                    <select name="vagina_fetidez" id="vagina_fetidez" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Sangrado</label>
                                <div>
                                    <select name="vagina_sangrado" id="vagina_sangrado" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hidrorrea</label>
                                <div>
                                    <select name="vagina_hidrorrea" id="vagina_hidrorrea" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cervix</label>
                                <div>
                                    <select name="vagina_cervix" id="vagina_cervix" class="form-control">
                                        <option value="Cerrado">Cerrado</option>
                                        <option value="Central">Central</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Permeable">Permeable</option>
                                        <option value="Posterior">Posterior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Consistencia</label>
                                <div>
                                    <select name="vagina_consistencia" id="vagina_consistencia" class="form-control">
                                        <option value="Reblandecido">Reblandecido</option>
                                        <option value="Firme">Firme</option>
                                        <option value="Dilatacion">Dilatacion</option>
                                        <option value="Borramiento">Borramiento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Se Palpan Calotas</label>
                                <div>
                                    <select name="vagina_calotas" id="vagina_calotas" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Membranas Intergas</label>
                                <div>
                                    <select name="vagina_membranas_intergas" id="vagina_membranas_intergas" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Calotas Solidas</label>
                                <div>
                                    <select name="vagina_calotas_solidas" id="vagina_calotas_solidas" class="form-control" data-target="vagina_calotas_solidas_si_form">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_calotas_solidas_si_form" style="display: none">
                                <label>Cual Calotas Solidas</label>
                                <div>
                                    <select name="vagina_calotas_solidas_si" id="vagina_calotas_solidas_si" class="form-control">
                                        <option value="Plano I">Plano I</option>
                                        <option value="Plano II">Plano II</option>
                                        <option value="Plano III">Plano III</option>
                                        <option value="Plano IV">Plano IV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Pelvis</label>
                                <div>
                                    <select name="vagina_pelvis" id="vagina_pelvis" class="form-control">
                                        <option value="Util">Util</option>
                                        <option value="No Util">No Util</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Desproporcion Cefalopelvica</label>
                                <div>
                                    <select name="vagina_desproporcion_cefalopelvica" id="vagina_desproporcion_cefalopelvica" class="form-control">
                                        <option value="Estrecho Superior">Estrecho Superior</option>
                                        <option value="Inferior">Inferior</option>
                                        <option value="Medio">Medio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Miembros Inferiores Edema</label>
                                <div>
                                    <select name="vagina_miembros_inferiores" id="vagina_miembros_inferiores" class="form-control" data-target="vagina_miembros_inferiores_si_form">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_miembros_inferiores_si_form" style="display: none">
                                <label>Miembros Inferiores Edema</label>
                                <div>
                                    <select name="vagina_miembros_inferiores_si" id="vagina_miembros_inferiores_si" class="form-control">
                                        <option value="+">+</option>
                                        <option value="++">++</option>
                                        <option value="+++">+++</option>
                                        <option value="Generalizado">Generalizado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Neurologico Conservado</label>
                                <div>
                                    <select name="vagina_neurologico_conservado" id="vagina_neurologico_conservado" class="form-control" data-target="vagina_neurologico_conservado_si_form">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_neurologico_conservado_si_form" style="display: none">
                                <label>Alteracion</label>
                                <div>
                                    <input type="text" name="vagina_neurologico_conservado_si" id="vagina_neurologico_conservado_si" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Observaciones y Análisis</label>
                                <div>
                                    <textarea name="observaciones" id="observaciones" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-lg-12">
                                <label>Diagnósticos o Problemas</label>
                                <div>
                                    <textarea name="diagnosticos" id="diagnosticos" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Guardar Cambios</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
@endsection


