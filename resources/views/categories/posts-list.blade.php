@extends('master')

@section('content')

<div class="col-md-8">
<h1>Category {{ $category->name }}</h1>
<p class="lead">Here's a list of all your posts by category.</p>

<hr>

@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
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