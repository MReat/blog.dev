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
	<h2>Blog Posts</h2>
	<a href="{{{ action('PostsController@create') }}}" class="btn btn-default">
		<span class="glyphicon glyphicon-pencil"></span> Create a Post</a>
	
	@foreach ($posts as $post)
		
		<h3>Post Title: {{{ $post->title }}}</h3>
		@if (isset($post->shortString))
		<p>Post Material: {{{ $post->shortString }}}<p>
		@else
		<p>Post Material: {{{ $post->body }}}<p>
		@endif

		<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-default">
			<span class="glyphicon glyphicon-book"></span> Read Post</a>

	@endforeach

	<div class="container" id="paginate">

		{{ $posts->links() }}
	
	</div>

@stop