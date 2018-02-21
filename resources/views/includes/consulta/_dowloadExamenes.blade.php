@if($value->pelvico)
    <p>
        <a href="{{ route('report.pelvico', $value->pelvico) }}" class="btn btn-info">Descargar reporte Ultrasonido pelvico</a>
        <a href="{{ route('consulta.pelvico.delete', $value->pelvico) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->trimestre)
    <p>
        <a href="{{ route('report.trimestre', $value->trimestre) }}" class="btn btn-info">Descargar reporte Ultrasonido I Trimestre</a>
        <a href="{{ route('consulta.trimestre.delete', $value->trimestre) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->estructural)
    <p>
        <a href="{{ route('report.estructural', $value->estructural) }}" class="btn btn-info">Descargar reporte Ultrasonido Estructural</a>
        <a href="{{ route('consulta.estructural.delete', $value->estructural) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->neurosonografia)
    <p>
        <a href="{{ route('report.neurosonografia', $value->neurosonografia) }}" class="btn btn-info">Descargar reporte Neurosonografia</a>
        <a href="{{ route('consulta.neurosonografia.delete', $value->neurosonografia) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->ecocardiografia)
    <p>
        <a href="{{ route('report.ecocardiografia', $value->ecocardiografia) }}" class="btn btn-info">Descargar reporte Ecocardiografia</a>
        <a href="{{ route('consulta.ecocardiografia.delete', $value->ecocardiografia) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->doppler)
    <p>
        <a href="{{ route('report.doppler', $value->doppler) }}" class="btn btn-info">Descargar reporte Curva de crecimiento / Doppler</a>
        <a href="{{ route('consulta.doppler.delete', $value->doppler) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->ginecologica)
    <p>
        <a href="{{ route('report.ginecologica', $value->ginecologica) }}" class="btn btn-info">Descargar reporte Consulta Ginecologica</a>
        <a href="{{ route('consulta.genecologica.delete', $value->ginecologica) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->prenatal)
  <p>
      <a href="{{ route('report.prenatal', $value->prenatal) }}" class="btn btn-info">Descargar reporte Consulta Atencion Prenatal</a>
      <a href="{{ route('consulta.prenatal.delete', $value->prenatal) }}" class="btn btn-danger">Eliminar examen</a>
  </p>
@endif

@if($value->colposcopia)
  <p>
      <a href="{{ route('report.colposcopia', $value->colposcopia) }}" class="btn btn-info">Descargar reporte Colposcopia / Crioterapia</a>
      <a href="{{ route('consulta.colposcopia.delete', $value->colposcopia) }}" class="btn btn-danger">Eliminar examen</a>
  </p>
@endif
