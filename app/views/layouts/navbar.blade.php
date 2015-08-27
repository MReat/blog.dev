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
	                <li><a href="/portfolio">Portfolio</a></li>
	                <li class="active"><a href="/posts">Posts</a></li>
	                
	                <form class="navbar-form navbar-left" role="search" action="{{ action('PostsController@index') }}" method="GET">
				        <div class="form-group">
				          <input name="search" type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				    </form>

	                <ul class="nav navbar-nav navbar-right">
	                	<li><a href="#"></a></li>
		                <li class="dropdown">
		                	@if (Auth::check())
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{{Auth::user()->first_name}}}<span class="caret"></span></a>
				            @else
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Click to Login<span class="caret"></span></a>
				            @endif
				                <ul class="dropdown-menu">
					              	@if(!Auth::check())
					                 	<li><a href="{{{ action('HomeController@login') }}}">Login</a></li>
					                 	<li><a href="{{{ action('HomeController@createUser') }}}">Create User</a></li>
				                  	@else
						                <li><a href="/posts/?user={{{ Auth::id() }}}">My Posts</a></li>
						                <li><a href="{{{ action('HomeController@showUser') }}}">My Account</a></li>
						                <li role="separator" class="divider"></li>
						                <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
						            @endif
				                </ul>
			            </li>
			        </ul>
	            </ul>
	        </div>
	    </div>
	</nav>
@stop
