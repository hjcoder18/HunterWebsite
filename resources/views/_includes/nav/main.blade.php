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
	      	<div class="navbar-item">
	        	<div class="field is-grouped">
	        	  	<p class="control">
	        	    	<a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
	        	      		<span class="icon">
	                			<i class="fa fa-twitter"></i>
	              			</span>
	              			<span>
	                			LinkedIn
	              			</span>
	            		</a>
	          		</p>
	          		<p class="control">
	            		<a class="button is-primary" href="#">
			              	<span class="icon">
			              		<i class="fa fa-download"></i>
			                </span>
	              			<span>Resume</span>
			            </a>
			        </p>
	        	</div>
	      	</div>
	    </div>
	</div>
</nav>