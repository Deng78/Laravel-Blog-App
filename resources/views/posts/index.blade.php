@extends('layout.app')

@section('content')
    <h4 class="centered">Posts</h4>
    <div class="row">
    @if(count($posts) > 0)
        @foreach($posts as $posts)
                <div class="col s4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://via.placeholder.com/350x300">
                            <span class="card-title">{{$posts->title}}</span>
                            <a href="posts/{{$posts->id}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">library_books</i></a>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            <small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>
                        </div>
                    </div>
                </div>
        @endforeach
    @else
    <p>No Posts Found</p>
    @endif
    </div>
@endsection()