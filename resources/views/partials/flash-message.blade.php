@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    {{-- {{ dd($errors->messages()) }} --}}
   
    <div class="alert alert-danger alert-dismissible" role="alert">
        Please check the form below for errors!<br>
        <ul>
            @foreach ($errors->messages() as $e)
                <li>{{ $e[0] }}</li>
            @endforeach
        </ul>
    </div>
@endif