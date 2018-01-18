@extends('master')

@section('content')

<h1>Edit Post - {{ $post->title }} </h1>
<p class="lead">Edit this post below. <a href="{{ route('posts.index') }}">Go back to all posts.</a></p>
<hr>

@include('error')



{!! Form::model($post, [
    'method' => 'PATCH',
    'route' => ['posts.update', $post->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <select class="form-control" name="category_id">
    	@foreach($categories as $category)
			<option value='{{ $category->id }}'>{{ $category->name }}</option>
		@endforeach
    </select>

</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop