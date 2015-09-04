@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Simple Simon Game
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/custom-simple-simon.css">
@stop

@section('content')
	<aside>
		<button id="start" align="center">START</button>
		<input id="score" placeholder="Begin"></input>
		<div inline>
			<p align="center">Difficulty Selector</p>
			<label id="ridonkulus">Ridonkulus</lable><input id="slider" name="difficulty" type="range" step="1" min="0" max="10"><label id="glacial">Glacial</label>
		</div>
			
		<div class="form-group">
			<a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}" id="portfolio_return"><span class="glyphicon glyphicon-briefcase"></span> Return to Portfolio</a>
		</div>
	</aside>

	<div id="container" align="center" inline>
		<div class="innerShell">
			
			<div class="box" id="green" data-colorID="0"></div>
			<div class="box" id="red" data-colorID="1"></div>
			<div class="box" id="yellow" data-colorID="2"></div>
			<div class="box" id="blue" data-colorID="3"></div>
				
		</div>
	</div>
@stop

@section('script')
	<script src="/js/jquery-1.11.3.js"></script>
	<script src="/js/simple-simon.js"></script>
@stop
