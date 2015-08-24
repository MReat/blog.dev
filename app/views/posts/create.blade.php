@extends('layouts.master')

@section('title')
Posts
@stop

@section('navbar')
	<nav role="navigation" class="navbar navbar-default">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="/" class="navbar-brand">Home</a>
	        </div>
	        <!-- Collection of nav links and other content for toggling -->
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li><a href="/summary">Professional Summary</a></li>
	                <li><a href="/detail">Professional Detail</a></li>
	                <li><a href="/portfolio">Portfolio</a></li>
	                <li class="active"><a href="/posts">Posts</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
@stop

@section('content')
	<div class="container well col-md-8">
		<h1>Posts Input</h1>
		<form action="{{{ action('PostsController@store')}}}" method="POST" accept-charset="UTF-8">
			
			{{ Form::token() }}
			
			<div class="form-group @if($errors->has('title')) has-error @endif">
				<label class="contro-label" name="title" for="title">Title</label>
				<input type="text" name="title" class="form-control"value="{{{ Input::old('title') }}}" placeholder="Title">
			</div>

			<div class="form-group @if($errors->has('body')) has-error @endif">
				<label class="contro-label" name="body" for="body">Body</label>
				<textarea type="text" class="form-control" name="body" placeholder="Body">
					{{{ Input::old('body') }}}</textarea>
			<div>

			<div class="form-group">	
				<button class="btn btn-primary" type="submit">Submit</button>
				<a class="btn btn-primary" href="{{{ action('PostsController@index')}}}">Cancel</a>
			</div>
			
		</form>
	</div>
@stop


{{-- @section('content')

	@include('posts.create-edit-form')



@stop --}}