<div class="col-sm-12">
@foreach($paciente->consulta()->with('cita')->latest()->get() as $value)

    <p></p>

@endforeach
</div>
