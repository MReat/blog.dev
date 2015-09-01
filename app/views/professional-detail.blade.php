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
                                    <span class="resume-year">2013 - 2015</span>
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
                                    <span class="resume-year">2012 - 2013</span>
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
                                    <span class="resume-year">2011 - 2012</span>
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
                                    <span class="resume-year">2008 - 2012</span>
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
                                    <span class="resume-year">2007 - 2008</span>
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
	                                                	<li>Achieved 25% increase in cash flow during tenure as executive and consultant</li>
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
                                    <span class="resume-year">2006 - 2007</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work7" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Client Executive & Solutions Consultant - Search America</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work7" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Provided advisory services regarding utilization of Search America's propensity to pay solution suite, enabling higher payment capture for the client, while increasing usage of the application for Search America.
	                                                <br>
	                                               
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
                                    <span class="resume-year">2006</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work8" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
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

	                                    <div id="work8" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Delivered interim management and advisory services for patient access operations at an academic pediatric hospital (South-West).
	                                                <br>
	                                               
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
                                    <span class="resume-year">2003 - 2005</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work9" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Manager & Senior Consultant - First Consulting Group (FCG)</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work9" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Conducted comprehensive assessments and delivered enhanced process improvement services for revenue cycle operations.  In addition, interim management services were provided for revenue cycle functions.  The combination of these services enabled client-partners to realize over $125 million in improved cash flow.
	                                                <br>
	                                               
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
                                    <span class="resume-year">2003</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work10" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Independent Contractor - Revenue Advantage</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work10" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Supplied revenue cycle advisory services, as well as business development activities for the Revenue Advantage telephonic collection solution.
	                                                <br>
	                                               
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
                                    <span class="resume-year">2000 - 2003</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work11" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Senior Consultant - Zimmerman and Associates</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work11" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Provided revenue cycle advisory services for ambulatory and tertiary healthcare providers, including best-practice operational enhancement, cash acceleration, and interim management.  Client-partners realized over $100 million in cash improvement and associated financial performance.
	                                                <br>
	                                               
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
                                    <span class="resume-year">1999 - 2000</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work12" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Professional Representative - Merck</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work12" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Supplied pharmaceutical marketing and advisory services for 5 primary products.  Outcomes from these efforts relsulting in an increase of over 121% to planned sales volume targets.
	                                                <br>
	                                               
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
                                    <span class="resume-year">1997 - 1999</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work13" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Practice Administrator - Covenant Healthcare</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work13" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Managed a 7 provider multi-specialty primary healthcare provider, including repsonsibility for: daily functional operations; provider relations; provider recruitment; overall regulatory compliance; and financial performance.
	                                                <br>
	                                               
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
                                    <span class="resume-year">1996 - 1997</span>
                                </div>
	                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work14" class="collapsed" data-toggle="collapse" data-parent="#work" aria-expanded="false"></a>
                                </div>
	                                <!-- //.resume-btn -->

	                                <div class="panel">
	                                    <div class="panel-heading">
	                                        <div class="panel-title">
	                                            <h4 class="resume-title">Administrator / CEO - DeBaca General Hospital</h4>
	                                        </div>
	                                        <!-- //.panel-title -->
		                                </div>
	                                    <!-- //.panel-heading -->

	                                    <div id="work14" class="panel-collapse collapse" aria-expanded="false">
	                                        <div class="panel-body">
	                                            <p>
	                                                <span class="underline">Responsibilities:</span>
	                                                <br>
	                                                Managed a 21 bed sole-community hospital and primary care clinic.  Overall responsiblities included executive leadership relations (board of directors and county commissioners), daily operations, financial performance, provider management, and oversight of over 50 employees.
	                                                <br>
	                                               
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
                            My Professional Education
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

