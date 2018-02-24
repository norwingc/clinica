@role('doctor')
    <div class='actions'>
        <a href="{{route('paciente.show', [$id]) }}" class='btn'><i class='ion-search'></i></a>
        <a href="{{ route('paciente.personal', [$id]) }}" class='btn'><i class='ion-edit'></i></a>
    </div>
@endrole

@role('recepcion')
<div class='actions'>
    <a href="{{ route('paciente.personal', [$id]) }}" class='btn'><i class='ion-edit'></i></a>
</div>
@endrole
