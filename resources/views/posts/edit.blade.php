@extends('layout.app')

@section('content')
    <h2 class="center">Edit Post</h2>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="row">
            <div class="input-field col s12">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'validate'])}} 
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'materialize-textarea'])}}
            </div>
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn waves-effect waves-light'])}}
    {!! Form::close() !!}

@endsection
@section('script')
    <script src="../../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
@endsection