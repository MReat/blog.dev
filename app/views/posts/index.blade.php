@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Posts
@stop




@section('content')
	<div class="form-group">
		<h2 id="blog_post_title">Blog Posts</h2>
		
		@if(Auth::check()) 
		<a href="{{{ action('PostsController@create') }}}" class="btn btn-success">
			<span class="glyphicon glyphicon-pencil"></span> Create a Post</a>
		@endif
		
		<a href="{{{ action('PostsController@index') }}}" class="btn btn-info">
			<span class="glyphicon glyphicon-th-list"></span> Return to Index</a>
	</div>
	
	@foreach ($posts as $post)
		<div class="container well col-md-9 col-md-offset-1">
			<h3><strong>Post Title:  </strong>{{{ $post->title }}}</h3>

			@if (isset($post->image))
				<img class="responsive" src="/{{{ $post->image }}}"/>
			@endif

			<p><strong>Authored by: </strong>{{{ $post->user->first_name}}} {{{ $post->user->last_name}}}</p>

			<p><strong>Date created on: </strong>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
			@if (isset($post->date_updated))
			<p><strong>Update on: </strong>{{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
			@endif

			@if (isset($post->shortString))
			<p><strong>Post Material: </strong>{{{ $post->shortString }}}<p>
			@else
			<p><strong>Post Material: </strong>{{{ $post->body }}}<p>
			@endif


			<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-info">
				<span class="glyphicon glyphicon-book"></span> Read Post</a>
		</div>

	@endforeach

	<div class="container" id="paginate">

		{{ $posts->links() }}
	
	</div>

@stop