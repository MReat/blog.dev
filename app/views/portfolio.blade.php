@extends('layouts.master')
@include('layouts.navbar')

@section('title')
	Professional Summary - Matthew J Reat
@stop


@section('content')
<H1>UNDER CONSTRUCTION</H1>
<div class="container">
	<img src="http://www.animatedimages.org/data/media/695/animated-under-construction-image-0059.gif" border="0" alt="animated-under-construction-image-0059"/>
</div>
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