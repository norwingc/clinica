@if($value->pelvico)
    <p>
        <a href="{{ route('report.pelvico', $value->pelvico) }}" class="btn btn-info">Descargar reporte Ultrasonido pelvico</a>
        <a href="{{ route('consulta.pelvico.delete', $value->pelvico) }}" class="btn btn-danger">Eliminar examen</a>
    </p>
@endif

@if($value->prenatal)
    <a href="#" class="btn btn-info">Descargar reporte Consulta de atencion prenatal</a>
@endif

