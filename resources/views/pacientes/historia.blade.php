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
                            <div class="col-sm-12 col-lg-12">
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
                                <label>Seleccione Hipertensión arterial crónica</label>
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
                        </div>
                        <div class="form-group">
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
                                    <input type="number" name="gesta" id="gesta" class="form-control" required min="1">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" type="button">Guardar Cambios</button>
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


