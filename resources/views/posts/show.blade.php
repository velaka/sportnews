@extends('master')

@section('content')

<h1>{{ $post->title }}</h1>
<p>Category: {{ $post->category->name }} </p>
<img class="card-img-top" src="{{ asset('images/' . $post->image ) }}" alt="Card image cap" style="width: 720px; height:400px;">
<p class="lead">{{ $post->description }}</p>


<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('posts.index') }}" class="btn btn-info">Back to all posts</a>
        @if (Auth::check())
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
        @endif
    </div>
    <div class="col-md-6 text-right">
        @if (Auth::check())
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['posts.destroy', $post->id]
        ]) !!}
            {!! Form::submit('Delete this post?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endif
    </div>
</div>

</br>

<h4> Comments  </h4>
<div class="comments">
    @foreach ($post->comments as $comment)

        <li class="list-group-item">
            <strong>
                {{$comment->created_at->diffForHumans()}}: &nbsp;
            </strong>
             {{$comment->body}}
        </li>
    @endforeach
</div>

<hr>

<div class="card">
    <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{csrf_field()}}
            <div class="form_group">
                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
            </div>
<br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add comment</button>
            </div>

        </form>
    </div>
</div>
@stop