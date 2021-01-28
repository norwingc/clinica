@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message_success'))
    <div class="container alert alert-success" role="alert">
        <h4 class="alert-heading">Information</h4>
        <p>{{ Session::get('message_success') }}</p>
    </div>
@endif

@if(session()->has('message_danger'))
    <div class="container alert alert-danger" role="alert">
        <h4 class="alert-heading">Information</h4>
        <p>{{ Session::get('message_danger') }}</p>
    </div>
@endif
