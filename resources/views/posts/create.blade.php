@extends('master')

@section('content')

<h1>Add a New Post</h1>
<p class="lead">Add to your post list below.</p>
<hr>

@include('error')


{!! Form::open([
    'route' => 'posts.store',
    'files' => true
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
    {{ Form::label('image', 'Upload a Featured Image') }}
    {{ Form::file('image') }}
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop