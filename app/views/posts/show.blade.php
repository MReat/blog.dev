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
<h2>{{{ $post->title }}}</h2>
<p>Date created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>

@if (isset($post->date_updated))
<p>Update on: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
@endif

<p>{{{$post->body}}}</p>

<a class="btn btn-primary" href="{{{ action('PostsController@index')}}}">Back to Index</a>
<a class="btn btn-primary" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>


{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
{{ Form::close() }}

@stop


