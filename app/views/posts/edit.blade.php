@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Posts
@stop

@section('content')
	<div class="col-md-2"></div>
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
				<button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Submit</button>
				
				<a class="btn btn-info" type='submit' href="{{{ action('PostsController@show', $post->id)}}}">
					<span class="glyphicon glyphicon-ban-circle"></span> Cancel</a> 

				<a class="btn btn-danger" type="submit" id="delete">
					<span class="glyphicon glyphicon-remove"></span>  Delete</a>
			</div>
			
		{{ Form::close() }}


		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
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

