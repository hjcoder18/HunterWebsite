<nav class="navbar has-shadow" role="navigation" aria-label="dropdown navigation">
	<div class="navbar-brand">
	    <a class="navbar-item" href="#">
	    	<img src="{{asset('images/hunterjmarshall-logo.png')}}" alt="Hunter J Marshall Logo" width="80" height="100">
	    </a>
	    
	    @if (Request::segment(1) == "manage")
	    <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
	    	<span class="icon"><i class="fa fa-arrow-circle-o-right"></i></span>
	    </a>
	    @endif
	    
	    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
	    	<span></span>
	      	<span></span>
	      	<span></span>
	    </div>
	</div>
	
	<div id="navbarExampleTransparentExample" class="navbar-menu">
	    <div class="navbar-start">
	      	<a class="navbar-item" href="#about">
	        	About Me
		    </a>
		    <a class="navbar-item" href="#testimonials">
		        Testimonials
		    </a>
		    <a class="navbar-item" href="#contact">
		        Contact Me
		    </a>
		    <div class="navbar-item has-dropdown is-hoverable">
		    	<a class="navbar-link" href="#projects">
		          Project
		        </a>
		        <div class="navbar-dropdown is-boxed">
		          	<a class="navbar-item" href="https://misty-river-labs.herokuapp.com">
		            	MistyRiverLabs
		          	</a>
		          	<a class="navbar-item" href="http://www.byui.edu/employers-and-schools">
		            	BYU-I Employers & Schools
		        	</a>
		          	<a class="navbar-item" href="http://www.elitetrainingpro.org/">
		            	Elite Training Pro
		          	</a>
	        	</div>
	      	</div>
	    </div>
	    
	    <div class="navbar-end">
	      	<div class="navbar-item has-dropdown is-hoverable">
		      	@guest
		      		<a href="{{route('login')}}" class="navbar-item is-tab">Family Connect</a>
		      		<a href="{{route('register')}}" class="navbar-item is-tab">Family Register</a>
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
				      	<a href="{{route('manage.dashboard')}}" class="navbar-item">
				      		<span class="icon">
				      			<i class="fa fa-fw fa-cog m-r-5"></i>
				      		</span>
				        	Manage
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
		      	@endguest
	      	</div>
			
	    </div>
	</div>
</nav>