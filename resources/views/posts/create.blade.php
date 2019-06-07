@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['enctype'=>'multipart/form-data','file'=>'true', 'action' => 'PostController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class' =>'form-control', 'placeholder' => 'Title'])}}
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '',['class' =>'form-control', 'placeholder' => 'Body Area'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection