@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Posts
@stop


@section('content')
<div class="col-md-2"></div>
	<div class="container well col-md-8">
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->user->first_name}}}</p>
		<p>Date created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>

		@if (isset($post->date_updated))
		<p>Update on: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
		@endif

		<p>{{{$post->body}}}</p>

		<a class="btn btn-info" href="{{{ action('PostsController@index')}}}"><span class="glyphicon glyphicon-th-list"></span>  Back to Index</a>

		@if(Auth::id() == $post->user_id)
		<a class="btn btn-success" href="{{{ action('PostsController@edit', $post->id) }}}"><span class="glyphicon glyphicon-pencil"></span> Edit Post</a>
		@endif
	</div>

@stop


