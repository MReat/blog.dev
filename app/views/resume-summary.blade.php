@extends('layouts.master')
@include('layouts.navbar')

@section('title')
	Professional Summary - Matthew J Reat
@stop


@section('content')
	{{-- <div class="container col-md-6 col-md-offset-2">
		<h1 id='summary_name'>Matthew J. Reat</h1>
	</div>
 --}}
	<div class='container well col-md-8 col-md-offset-2 text-justify'>
 		<h2 class="summary_info" id="professional_summary">Professional Summary</h2>
 			<p class="summary_info">
 				I possess over 19 years of healthcare experience, holding executive positions in both hospitals and ambulatory settings, while consistently receiving progressive recognition and promotion.  Experience includes Not-for-Profit, For-Profit, Academic, and Public Healthcare Delivery organizations, providing the following qualifications: 
			</p>
				<ul class="col-md-10 col-md-offset-1 text-justify summary_info">
					<li>
						Strong leadership skills demonstrated through executive management, combining strategic planning with operational implementation and reporting
					</li>
					
					<li>
						Well-developed organizational management skills exemplified through coordination of multidisciplinary functions within a healthcare environment
					</li>
					
					<li>
						Comprehensive analytical abilities demonstrated through development, creation, and deployment of Revenue Cycle diagnostic and reporting solutions
					</li>
					
					<li>
						Thorough financial management skills displayed through developing and maintaining operational and capital budgets, as well as directing special projects to meet established goals
					</li>
						
				
					<li>
						Advanced healthcare revenue cycle understanding and management proven through realization of aggressive financial objectives
					</li>
				</ul>
			</div>
@stop

@section('script')
<script type="text/javascript">
  
// $(document).ready(function () {
//     $('ul.nav > li').click(function (e) {
//         $('ul.nav > li').removeClass('active');
//         $(this).addClass('active');                
//     });            
// });

var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
</script>
@stop