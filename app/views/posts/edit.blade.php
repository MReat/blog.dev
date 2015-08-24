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
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
			
			<div class="form-group @if($errors->has('title')) has-error @endif">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group @if($errors->has('title')) has-error @endif">
				{{ Form::label('body', 'Body') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">	
				<button class="btn btn-primary">Edit</button>
				<a class="btn btn-primary" type='submit' href="{{{ action('PostsController@show', $post->id)}}}">Cancel</a> 

				<a class="btn btn-danger" type="submit" id="delete">Delete</a>
			</div>
			
		{{ Form::close() }}
	</div>
@stop

@section('script')
	<script>
		
		(function () {
			"use strict";
			$('#delete').on('click', function() {
				
				var onConfirm = confirm('Are you sure you want to delete this post?');

				if(onConfirm) {
					$('#formDelete').submit();
				}

			})
		})();
	
	</script>

@stop

