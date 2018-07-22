@if($value->pelvico)
    @if($value->pelvico->recordatorio != null)
        <p><b class="red">Recordatorio Ultrasonido Pelvico:</b> {{ $value->pelvico->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.pelvico', $value->pelvico) }}" class="btn btn-info">Descargar reporte Ultrasonido pelvico</a>
        <a href="{{ route('consulta.pelvico.delete', $value->pelvico) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->trimestre)
    @if($value->trimestre->recordatorio != null)
        <p><b class="red">Recordatorio Ultrasonido I Trimestre:</b> {{ $value->trimestre->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.trimestre', $value->trimestre) }}" class="btn btn-info">Descargar reporte Ultrasonido I Trimestre</a>
        <a href="{{ route('consulta.trimestre.delete', $value->trimestre) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->estructural)
    @if($value->estructural->recordatorio != null)
        <p><b class="red">Recordatorio Ultrasonido Estructural:</b> {{ $value->estructural->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.estructural', $value->estructural) }}" class="btn btn-info">Descargar reporte Ultrasonido Estructural</a>
        <a href="{{ route('consulta.estructural.delete', $value->estructural) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->neurosonografia)
    @if($value->neurosonografia->recordatorio != null)
        <p><b class="red">Recordatorio Neurosonografia:</b> {{ $value->neurosonografia->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.neurosonografia', $value->neurosonografia) }}" class="btn btn-info">Descargar reporte Neurosonografia</a>
        <a href="{{ route('consulta.neurosonografia.delete', $value->neurosonografia) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->ecocardiografia)
    @if($value->ecocardiografia->recordatorio != null)
        <p><b class="red">Recordatorio Ecocardiografia:</b> {{ $value->ecocardiografia->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.ecocardiografia', $value->ecocardiografia) }}" class="btn btn-info">Descargar reporte Ecocardiografia</a>
        <a href="{{ route('consulta.ecocardiografia.delete', $value->ecocardiografia) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->doppler)
    @if($value->doppler->recordatorio != null)
        <p><b class="red">Recordatorio Curva de crecimiento / Doppler:</b> {{ $value->doppler->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.doppler', $value->doppler) }}" class="btn btn-info">Descargar reporte Curva de crecimiento / Doppler</a>
        <a href="{{ route('consulta.doppler.delete', $value->doppler) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->ginecologica)
    @if($value->ginecologica->recordatorio != null)
        <p><b class="red">Recordatorio Consulta Ginecologica:</b> {{ $value->ginecologica->recordatorio }}</p>
    @endif
    <p>
        <a href="{{ route('report.ginecologica', $value->ginecologica) }}" class="btn btn-info">Descargar reporte Consulta Ginecologica</a>
        <a href="{{ route('consulta.genecologica.delete', $value->ginecologica) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->prenatal)
    @if($value->prenatal->recordatorio != null)
        <p><b class="red">Recordatorio Atencion Prenatal:</b> {{ $value->prenatal->recordatorio }}</p>
    @endif
  <p>
      <a href="{{ route('report.prenatal', $value->prenatal) }}" class="btn btn-info">Descargar reporte Consulta Atencion Prenatal</a>
      <a href="{{ route('consulta.prenatal.delete', $value->prenatal) }}" class="btn btn-danger">Eliminar examen</a>
  </p>
@endif

@if($value->colposcopia)
    @if($value->colposcopia->recordatorio != null)
        <p><b class="red">Recordatorio Colposcopia / Crioterapia:</b> {{ $value->colposcopia->recordatorio }}</p>
    @endif
  <p>
      <a href="{{ route('report.colposcopia', $value->colposcopia) }}" class="btn btn-info">Descargar reporte Colposcopia / Crioterapia</a>
      <a href="{{ route('consulta.colposcopia.delete', $value->colposcopia) }}" class="btn btn-danger">Eliminar examen</a>
  </p>
@endif
