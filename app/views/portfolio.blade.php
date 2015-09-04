@extends('layouts.master')
@include('layouts.navbar')

@section('title')
	Professional Summary - Matthew J Reat
@stop


@section('content')
    
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->

      {{-- TODO: change button placement on each go_to_item --}}
      <div class="row" id="portfolio_text">
        <div class="col-lg-4 item_box">
          <img class="img" src="/img/calculator.png" alt="calculator" width="140" height="140">
          <h2>Calculator</h2>
          <p>Fully functional calculator built with PHP, Laravel, HTML 5, CSS 3, and Javascript</p>
          <p><a class="btn btn-default go_to_item" href="{{{ action('HomeController@showCalculator') }}}" role="button"><span class="glyphicon glyphicon-modal-window"></span> Try it! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 item_box">
          <img class="img-circle" src="/img/simple-simon.png" alt="simpleSimon" width="140" height="140">
          <h2>Simple Simon</h2>
          <p>A fun remix of the old classic game.  Built with PHP, Laravel, HTML 5, CSS 3, Javascript and JQuery</p>
          <p><a class="btn btn-default go_to_item" href="{{{ action('HomeController@showSimpleSimon') }}}" role="button"><span class="glyphicon glyphicon-tower"></span> Play Game! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 item_box">
          <img class="img" src="/img/whack-a-bell.png" alt="whackABell" width="140" height="140">
          <h2>Whack-A-Bell</h2>
          <p>A delightful variation of the game Whack-A-Mole, including animations and sound.  Built with PHP, Laravel, HTML 5, CSS 3, Javascript, and Jquery</p>
          <p><a class="btn btn-default go_to_item" href="{{{ action('HomeController@showWhackABell') }}}" role="button"><span class="glyphicon glyphicon-tower"></span> Play Game! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


@stop

@section('script')
<script>

var url = window.location;
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
</script>

@stop