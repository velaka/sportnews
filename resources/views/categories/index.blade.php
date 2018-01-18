@extends('master')

@section('content')

<div class="col-md-8">
<h1>Categories</h1>
<hr>
{{-- 
@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->description}}</p>
    <p>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View Post</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
    </p>
    <hr>
@endforeach --}}


</div>

@stop