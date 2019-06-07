@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['enctype'=>'multipart/form-data', 'action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title,['class' =>'form-control', 'placeholder' => 'Title'])}}
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body,['class' =>'form-control', 'placeholder' => 'Body Area'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Sumbit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection