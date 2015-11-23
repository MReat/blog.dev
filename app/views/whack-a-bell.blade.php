@extends('layouts.master')
@include('layouts.navbar')

@section('title')
Whack-A-Mole
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/Whack-a-Mole.css">
@stop


@section('content')
	<aside>
		<div>
			<button id="start" align="center">START</button>
		</div>
		
		<div id="score_title" align='center'>Score
			<input type='text' id="score" value="0"></input>
		</div>
		
		<div id="difficulty_selector" align="center">Difficulty Selector</div>
			<label>Ludicrous  </lable>
				<input id="slider" align="center" name="difficulty" type="range" step="1" min="0" max="10">
			<label>  Paint Drying</label>

		<div class="form-group">
			<a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}" id="portfolio_return"><span class="glyphicon glyphicon-briefcase"></span> Return to Portfolio</a>
		</div>
		<!-- audio files below -->
		<audio id="correct" src="/img/correct_bell.wav"></audio>
		<audio id="wrong" src="/img/wrong_bell.wav"></audio>
		<audio id="game_over" src="/img/game_over.wav"></audio>
	</aside>

	<div id="console">
		<div class="box" id="box_0"></div>
		<div class="box" id="box_1"></div>
		<div class="box" id="box_2"></div>
		<div class="box" id="box_3"></div>
		<div class="box" id="box_4"></div>
		<div class="box" id="box_5"></div>
		<div class="box" id="box_6"></div>
		<div class="box" id="box_7"></div>
		<div class="box" id="box_9"></div>
	</div>
@stop

@section('script')
	<script src="/js/jquery-1.11.3.js"></script>
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/Whack-a-Mole.js"></script>
@stop