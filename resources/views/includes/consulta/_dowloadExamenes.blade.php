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

@if($value->prenatal)
    <a href="#" class="btn btn-info">Descargar reporte Consulta de atencion prenatal</a>
@endif

