@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="card-panel red">
        {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class"card-panel green">
        {{'success'}}
    </div>
@endif

@if(session('error'))
    <div class="card-panel red">
        {{'error'}}
    </div>
@endif
