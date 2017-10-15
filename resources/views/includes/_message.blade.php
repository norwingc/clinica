@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message_success'))
    <div class="callout callout-success col-sm-12">
        <h4>Info</h4>
        <p>{{ Session::get('message_success') }}</p>
    </div>
@endif

@if(session()->has('message_danger'))
    <div class="callout callout-danger col-sm-12">
        {{ session()->get('message_danger') }}
    </div>
@endif
