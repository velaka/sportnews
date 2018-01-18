@extends('master')


@section ('content')
<div class="row">
  <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-5">Sport News</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
        <hr>

        <a href="{{ route('posts.index') }}" class="btn btn-info">View Post</a>
        @if (Auth::check())
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
        @endif

      </div>

        @include ('layouts.sidebar')  
</div>
@endsection