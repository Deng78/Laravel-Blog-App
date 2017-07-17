@extends('layout.app')

@section('content')
    <h2 class="center">Create Post</h2>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="input-field col s12">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'validate'])}} 
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'materialize-textarea'])}}
            </div>
        </div>
        {{Form::submit('Submit', ['class' => 'btn waves-effect waves-light'])}}
    {!! Form::close() !!}
    
@endsection
@section('script')
    <script src="../../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
@endsection