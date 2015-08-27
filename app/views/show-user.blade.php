@extends('layouts.master')
@include('layouts.navbar')

@section('title')
User Information
@stop

@section('content')
	<div class="container well col-md-8">
		<p><strong>First Name: </strong> {{{ $user->first_name }}}</p>
		<p><strong>Last Name: </strong> {{{ $user->last_name }}}</p>
		<p><strong>E-Mail: </strong> {{{ $user->email }}}</p>

		<div class="form-group">	
			<a class="btn btn-success" type="submit" href="{{{ action('HomeController@editUser') }}}">
				<span class="glyphicon glyphicon-pencil"></span> Edit</a>
		</div>
	</div>




@stop