@extends('layouts.master')
@include('layouts.navbar')

@section('title')
	Professional Summary - Matthew J Reat
@stop

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/professional-summary.css">
@stop

@section('content')
<section id="resume" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Curriculum Vitae</h2>

                        <p id="subtitle" class="section-subtitle animated bounceInLeft" style="opacity: 1;">
                            A detailed summary of my professional work experience, education, and accomplishments are listed below:
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- WORK EXPERIENCE START -->
                <div class="row work-experience">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            Work Experience
                            <br>
                            1996 - Now
                        </h3>

                        <div class="panel-group resume" id="work">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">5/2015 - Now</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work1" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Owner - Contract Consulting</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work1" class="panel-collapse collapse in">
                                        <div class="panel-body text-grey">
                                            <p>
                                                <span class="underline">Responsibilities:</span>
                                                <br>
                                                Delivering independent revenue cycle advisory services for healthcare organizations.  Specialized services include assessment of current-state practices, enabling the design and implementation of best-practice operations, and providing revenue cycle leadership.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">9/2013 - 5/2015</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work2" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Managing Director, Consulting - MediRevv</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work2" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body text-grey">
                                            <p>
                                                <span class="underline">Responsibilities:</span>
                                                <br>
                                                Administered revenue cycle management consulting operations, including: business development; executive management and sponsorship; project management, development and deployment of advanced consulting analytical and process improvment delivery tools, and best-practice operational improvement delivery.
                                                <br>
                                                <br>
                                                <span class="underline">Accomplishments include:</span>
                                                <br>
                                                <ul>
                                                <li>Interim management/leadership of revenue cycle operations for a large academic medical center (West Coast)</li>
                                                <li>Launch of revenue cycle management best practice assessment and operational improvement delivery tools</li>
                                                <li>Operational process improvements that resulted in an increase of productivity by 42%, and improvement of cash flow by 25% for client-partner</li>
	                                            </ul>

                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">8/2012 - 9/2013</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work3" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Senior Consultant - MediRevv</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work3" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body text-grey">
                                            <p>
                                                <span class="underline">Responsibilities:</span>
                                                <br>
                                                Assessing revenue cycle operations, creating detailed recommendations for process improvement, and providing oversight in the delivery of approved improvement initiatives.
                                                <br>
                                                <br>
                                                <span class="underline">Accomplishments include:</span>
                                                <ul>
                                                	<li>Development and delivery of a full financial clearance model for a large not-for-profit integrated delivery system (West Coast)</li>
                                                	<li>Design and deployment of advanced revenue cycle Key Performance Indicator (KPI) monitoring and reporting</li>
                                                	<li>Creation and implementation of advanced operational Polciies and Procedures (P&Ps) to support the execution of best practice revenue cycle processes</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">7/2011 - 7/2012</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work4" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Principal - Computer Sciences Corporation (CSC)</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work4" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body text-grey">
                                            <p>
                                                <span class="underline">Responsibilities:</span>
                                                <br>
                                                Oversaw and managed the development and delivery of all revenue cycle advisory services for the Business Excellence unit within the healthcare sector of CSC.
                                                <br>
                                                <br>
                                                <span class="underline">Accomplishments include:</span>
                                                <ul>
                                                	<li>Developed and implemented a comprehensive revenue cycle best-practice business model that integrated with CSC's clinical delivery model</li>
                                                	<li>Created and deployed revenue cycle Key Performance Indicator model</li>
                                                	<li>Performed business development activities in conjunction with CSC business development leadership</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                            
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">3/2008 - 7/2012</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work5" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Senior / Manager - Computer Sciences Corporation (CSC)</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work5" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body text-grey">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Provided advanced revenue cycle advisory and delivery services for both hospital and physician group networks.  Primary duties encompassed both patient access and patient financial service areas.
	                                                <br>
	                                                <br>
	                                                <span class="underline">Accomplishments include:</span>
	                                                <ul>
	                                                	<li>Interim leadership as Executive Director of Patient Access for a large academic medical center (South East)</li>
	                                                	<li>Development and implementation of revenue cycle improvements that netted the client-partner over $120 million in cash flow</li>
	                                                	<li>Provided subject matter expertise for the design of a custom .NET Revenue Cycle information system application developed for multi-specialty Physician Practice billing organization</li>
	                                                </ul>
	                                            </p>
	                                        </div>
	                                        <!-- //.panel-body -->
	                                    </div>
	                                    <!-- //.panel-collapse -->
	                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">7/2007 - 3/2008</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work6" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Owner - Contract Consulting</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work6" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body text-grey">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Delivery of revenue cycle assessment and operational improvement services for patient access and patient financial services
	                                                <br>
	                                                <br>
	                                                <span class="underline">Accomplishments include:</span>
	                                                <ul>
	                                                	<li>Interim leadership as Executive Director of Revenue Cycle (Patient Access and Patient Financial Services) for a sole-community provider (Mid-West)</li>
	                                                	<li>Performed full revenue cycle assessment, with associated findings and recommendations</li>
	                                                	<li>Conducted oversight of performance improvement development and delivery, based on findings and recommendations</li>
	                                                </ul>
	                                            </p>
	                                        </div>
	                                        <!-- //.panel-body -->
	                                    </div>
	                                    <!-- //.panel-collapse -->
	                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                                                        <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">7/2007 - 3/2008</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work7" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Owner - Contract Consulting</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work7" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Delivery of revenue cycle assessment and operational improvement services for patient access and patient financial services
	                                                <br>
	                                                <br>
	                                                <span class="underline">Accomplishments include:</span>
	                                                <ul>
	                                                	<li>Interim leadership as Executive Director of Revenue Cycle (Patient Access and Patient Financial Services) for a sole-community provider (Mid-West)</li>
	                                                	<li>Performed full revenue cycle assessment, with associated findings and recommendations</li>
	                                                	<li>Conducted oversight of performance improvement development and delivery, based on findings and recommendations</li>
	                                                </ul>
	                                            </p>
	                                        </div>
	                                        <!-- //.panel-body -->
	                                    </div>
	                                    <!-- //.panel-collapse -->
	                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //WORK EXPERIENCE END -->
                
                <!-- EDUCATION START -->
                <div class="row education">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            My Education
                            <br>
                            1988 - 2015
                        </h3>

                        <div class="panel-group resume" id="education">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">1993-1996</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education1" data-toggle="collapse" data-parent="#education" aria-expanded="false" class="collapsed"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Masters of Business Administration (MBA) - Texas Tech University</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Concentration in management, specializing in healthcare. Program was dually accredited by Association to Advance Collegiate Schools of Business (AACSB) and ccrediting Commission on Education for Health Services Administration (ACEHSA), and was a joint partnership between the college of business administration and the college of medicine.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item animated bounceInUp" style="opacity: 1;">
                                <div class="resume-year">
                                    <span class="resume-year">1988 - 1992</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education2" class="collapsed" data-toggle="collapse" data-parent="#education" aria-expanded="false"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Bachelors of Science - Texas Tech University</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education2" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Undergraduate studies specializing in international economics, with a focus on Asian-Pacific Rim studies. 
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item animated bounceInUp" style="opacity: 1;">
                                <div class="resume-year">
                                    <span class="resume-year">2015</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education3" class="collapsed" data-toggle="collapse" data-parent="#education" aria-expanded="false"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Codeup - Web Development Bootcamp</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education3" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Intensive full stack web development bootcamp, specializing in the training and delivery of HTML 5, CSS 3, Sass, AngularJS, JavaScript, JQuery, PHP, Laravel, and MySql.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //EDUCATION END -->
            
                
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
@stop

