
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
            <div class="alert alert-danger" style="width: 80%;" role="alert">
                <p class="text-center">
                    <strong>{{ $error }}</strong>
                </p>
            </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-sucess">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ sesion('error') }}
    </div>
@endif
