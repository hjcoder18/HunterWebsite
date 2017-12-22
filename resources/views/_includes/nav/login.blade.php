<nav class="navbar has-shadow" role="navigation" aria-label="dropdown navigation">
	<div class="navbar-brand">
	    <a class="navbar-item" href="{{route('home')}}">
	    	<img src="{{asset('images/hunterjmarshall-logo.png')}}" alt="Hunter J Marshall Logo" width="80" height="100">
	    </a>
	    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
	    	<span></span>
	      	<span></span>
	      	<span></span>
	    </div>
	</div>
	
	<div id="navbarExampleTransparentExample" class="navbar-menu">
	    <div class="navbar-start">
	      	<a class="navbar-item" href="{{route('home')}}">
	        	About Me
		    </a>
		    <a class="navbar-item" href="#">
		        Testimonials
		    </a>
		    <a class="navbar-item" href="#">
		        Contact Me
		    </a>
		    <div class="navbar-item has-dropdown is-hoverable">
		    	<a class="navbar-link" href="#">
		          Project
		        </a>
		        <div class="navbar-dropdown is-boxed">
		          	<a class="navbar-item" href="#">
		            	Something
		          	</a>
		          	<a class="navbar-item" href="#">
		            	Something
		        	</a>
		          	<a class="navbar-item" href="#">
		            	Something
		          	</a>
	        	</div>
	      	</div>
	    </div>
	    
	    <div class="navbar-end">
	      	<div class="navbar-item has-dropdown is-hoverable">
		      	@if (Auth::guest())
		      		<a href="#" class="navbar-item is-tab">Login</a>
		      		<a href="#" class="navbar-item is-tab">Register</a>
		      	@else
		      		<a class="navbar-link">
				      	Hi {{Auth::user()->name}}
				    </a>
				
				    <div class="navbar-dropdown is-right">
				      	<a class="navbar-item">
				        	Overview
				      	</a>
				      	<a class="navbar-item">
				       		Elements
				      	</a>
				      	<a class="navbar-item">
				        	Components
				      	</a>
				      	<hr class="navbar-divider">
				      	<div class="navbar-item">
				        	<a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				                <span class="icon">
				                  	<i class="fa fa-fw fa-sign-out m-r-5"></i>
				                </span>
				                Logout
			              	</a>
			              	@include('_includes.forms.logout')
				      	</div>
				    </div>
		      	@endif
	      	</div>
			
	    </div>
	</div>
</nav>