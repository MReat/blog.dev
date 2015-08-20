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
			<div class="row">
				<label name="title" for="title">Title</label>
				<input type="text" name="title" value="{{{ Input::old('title') }}}" placeholder="Title">
			</div>

			<div class="row">
				<label name="body" for="body">Body</label>
				<textarea type="text" name="body" placeholder="Body">{{{ Input::old('body') }}}</textarea>
			<div>

			<div class="row">	
				<button type="submit">Submit</button>
			</div>
			
		</form>
	</div>
@stop