@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Posts
@stop


@section('content')
	<div class="container well col-md-8 col-md-offset-2" id="create_posts">
		<h1>Posts Input</h1>
		{{ Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'id' => 'create_post_form', 'files' => true)) }}
			
			<div class="form-group @if($errors->has('title')) has-error @endif">
				<label class="control-label" name="title" for="title">Title</label>
				<input type="text" name="title" class="form-control"value="{{{ Input::old('title') }}}" placeholder="Title">
			</div>

			<div class="form-group @if($errors->has('body')) has-error @endif">
				<label class="control-label" name="body" for="body">Body</label>
				<textarea type="text" class="form-control" name="body" placeholder="Add Content Here...">{{{ Input::old('body') }}}</textarea>
			</div>

			<div class="form-group">
				{{ Form::file('image') }}
			</div>

			<div class="form-group">
				<button class="btn btn-success" type="submit">
					<span class="glyphicon glyphicon-ok"></span> Submit</button>
				<a class="btn btn-info" href="{{{ action('PostsController@index')}}}">
					<span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
			</div>

			
		{{ Form::close() }}
	</div>
@stop

