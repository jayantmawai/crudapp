@extends('layouts.app')

@section('content')
    <h1>posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style ="width:100%" src ="/crudapp/public/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/crudapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                @endforeach
                {{$posts->links()}}
            </div>

            @else
                <p>No post found</p>
            @endif
@endsection