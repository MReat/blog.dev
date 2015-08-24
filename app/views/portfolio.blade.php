@extends('layouts.master')

@section('title')
	Professional Summary - Matthew J Reat
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
	                <li class="active"><a href="/portfolio">Portfolio</a></li>
	                <li><a href="/posts">Posts</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
@stop

@section('content')
<H1>UNDER CONSTRUCTION</H1>
<div class="container">
	<img src="http://www.animatedimages.org/data/media/695/animated-under-construction-image-0059.gif" border="0" alt="animated-under-construction-image-0059"/>
</div>
@stop