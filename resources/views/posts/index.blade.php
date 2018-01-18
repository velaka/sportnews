@extends('master')

@section('content')

<div class="col-md-8">
<h1>Posts</h1>
<p class="lead">Here's a list of all your posts. <a href="{{ route('posts.create')}}">Add a new one?</a></p>

{!! Form::open(['method'=>'GET','url'=>'posts','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
      <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default-sm" type="button">Go!</button>
        </span>
      </div>
{!! Form::close() !!}

<hr>

@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <img class="card-img-top" src="{{ asset('images/' . $post->image ) }}" alt="Card image cap" style="width: 200px; height:200px;">
    <p>{{ $post->description}}</p>
    <p>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View Post</a>
        @if (Auth::check())
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
        @endif
    </p>
    <hr>
@endforeach


</div>

@stop