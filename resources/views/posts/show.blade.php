@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <h1>{{$post->title}}</h1>
    {{-- Image display in post --}}
    {{-- <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%"> --}} 
    <br>
    <div>
        {!!$post->body!!}
    </div>    
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    {{-- Allow buttons to display to only a logged in user --}}
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)  
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
        @endif
    @endif
@endsection