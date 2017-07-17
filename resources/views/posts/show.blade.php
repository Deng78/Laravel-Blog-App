@extends('layout.app')

@section('content')
    <div class="container">
    <h4 class="center-align">Posts</h4>
        <h1 class="centered">{{$post->title}}</h1>
        <p class="centered">
        {!!$post->body!!}
        </p>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>

        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="{{$post->id}}/edit" class="btn">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn red'])}}
                {!!Form::close()!!}
            @endif
        @endif

    </div>
@endsection()