@extends('layouts.app')

@section('top-nav')
	@include('_includes.nav.login')
@endsection

@section('content')
<div id="projects" class="flex-container top-background">
	<div class="columns">
		<div class="column has-text-centered">
			<h1 class="title title-style" style="color:white;">Recent Projects</h1>
		</div>
	</div>
	<div class="columns is-centered">
		<div class="column has-text-centered">
			<a href="https://misty-river-labs.herokuapp.com/">
				<h1 class="title is-4 is-bold" style="color:white;">
	            	Misty River Labs
	            </h1>
	            <h2 class="subtitle is-5" style="color:white;">
	            	The Perfect Hunting Dog
	            </h2>
				<figure class="image is-128x128" style="margin-left:auto; margin-right:auto;">
				  	<img src="{{ asset('images/misty-river-labs.png') }}" height="256px"/>
				</figure>
			</a>
		</div>
		<div class="column has-text-centered">
			<a href="http://www.byui.edu/employers-and-schools">
				<h1 class="title is-4 is-bold" style="color:white;">
	            	BYU - Idaho
	            </h1>
	            <h2 class="subtitle is-5" style="color:white;">
	            	Employers & Schools
	            </h2>
				<figure class="image is-128x128" style="margin-left:auto; margin-right:auto;">
				  	<img src="{{ asset('images/byui-icon.jpeg') }}" height="256px"/>
				</figure>
			</a>
		</div>
		<div class="column has-text-centered">
			<a href="http://www.elitetrainingpro.org/">
				<h1 class="title is-4 is-bold" style="color:white;">
	            	Elite Training Pro 
	            </h1>
	            <h2 class="subtitle is-5" style="color:white;">
	            	Senior Project
	            </h2>
				<figure class="image is-128x128" style="margin-left:auto; margin-right:auto;">
				  	<img src="{{ asset('images/etp.png') }}"/>
				</figure>
			</a>
		</div>
	</div>

</div> <!-- end of .flex-container -->

<div id="about" class="flex-container about">
	<div class="columns is-centered">
		<div class="column has-text-centered boxes">
			<h1 class="title is-4 is-bold">About Me</h1>
			<p>I am a Web Developer. I specialize in building Web Applications using Laravel, a PHP framework. Currently, I work full time as a QA Specialist for a company called Stukent located out of Rexburg, Idaho.
		</div>
		<div class="column has-text-centered boxes">
			<h1 class="title is-4 is-bold">Services</h1>
			<ul>
				<li>Quality Assurance</li>
				<li>Web Development</li>
				<li>User Experience</li>
			</ul>
		</div>
		<div class="column has-text-centered boxes">
			<h1 class="title is-4 is-bold">Site News</h1>
			<p>To my family. I'm building the web applicaiton you have been asking for. For those not in my family, this is just single place for my family to connect. Think of it as a private social media application.</p>
		</div>
	</div>

</div> <!-- end of .flex-container -->

<div id="testimonials" class="flex-container mid-background">
	<div class="columns">
		<div class="column has-text-centered">
			<h1 class="title title-style">Testimonials</h1>
		</div>
	</div>
	<div class="columns is-centered">
		<div class="column has-text-centered testimonials">
            <p>
            	"Many of our students demonstrate high level talents, but few of them demonstrate the focus, 
            	dedication, and diligence I saw in Hunter."
            </p>
            <p><i>William Lovell - Unversity Relations Project Manager</i></p>
		</div>
		<div class="column has-text-centered testimonials">
			<p>
            	"Many of our students demonstrate high level talents, but few of them demonstrate the focus, 
            	dedication, and diligence I saw in Hunter."
            </p>
            <p><i>William Lovell - Unversity Relations Project Manager</i></p>
		</div>
		<div class="column has-text-centered testimonials">
			<p>
            	"Many of our students demonstrate high level talents, but few of them demonstrate the focus, 
            	dedication, and diligence I saw in Hunter."
            </p>
            <p><i>William Lovell - Unversity Relations Project Manager</i></p>
		</div>
	</div>

</div> <!-- end of .flex-container -->

<div id="contact" class="flex-container contact">
	<div class="columns">
		<div class="column is-one-third has-text-centered"></div>
		<div class="column is-one-third has-text-centered">
			<h1 class="title" style="color:#B2600E;">Contact</h1>
			<div class="field">
			  <label class="label" style="color:#B2600E;">Name</label>
			  <div class="control">
			    <input class="input" type="text" placeholder="Text input">
			  </div>
			</div>
			
			<div class="field">
			  <label class="label" style="color:#B2600E;">Email</label>
			  <div class="control has-icons-left has-icons-right">
			    <input class="input" type="email" placeholder="Email input" value="hello@">
			    <span class="icon is-small is-left">
			      <i class="fa fa-envelope"></i>
			    </span>
			    <span class="icon is-small is-right">
			      <i class="fa fa-warning"></i>
			    </span>
			  </div>
			</div>
			
			<div class="field">
			  <label class="label" style="color:#B2600E;">Subject</label>
			  <div class="control has-text-centered">
			    <div class="select">
			      <select>
			        <option>Select dropdown</option>
			        <option>With options</option>
			      </select>
			    </div>
			  </div>
			</div>
			
			<div class="field">
			  <label class="label" style="color:#B2600E;">Message</label>
			  <div class="control">
			    <textarea class="textarea" placeholder="Textarea"></textarea>
			  </div>
			</div>
			
			<div class="field is-grouped">
			  <div class="control">
			    <button class="button is-link">Submit</button>
			  </div>
			  <div class="control">
			    <button class="button is-text">Cancel</button>
			  </div>
			</div>
		</div>
	</div>

</div> <!-- end of .flex-container -->
@endsection