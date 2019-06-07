@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
    <img style ="width:100%" src ="/crudapp/public/storage/cover_images/{{$post->cover_image}}">
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/crudapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
        @endif
    @endif
@endsection