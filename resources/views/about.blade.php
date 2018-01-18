@extends('layouts.app')

@section('top-nav')
	@include('_includes.nav.login')
@endsection

@section('content')
<div class="flex-container">
	<div class="columns">
		<div class="column has-text-centered m-t-10">
			<i>
			<h1>
				Freelance Web Developer based in Rexburg, Idaho.
			</h1>
			<h1>
				Highly experienced in designing & developing custom Laravel Applications.
			</h1>
			</i>
			<hr>
		</div>
	</div>
</div>

<div class="flex-container">
	<div class="columns">
		<div class="column is-one-third has-text-centered"></div>
		<div class="column is-one-third has-text-centered boxes">
			<figure class="image is-250x250" style="margin-left:auto; margin-right:auto;">
				<img src="{{ asset('images/stukent-12.jpg') }}" />
			</figure>
			<br/>
			<p>
				After graduating in 2017 with a Bachelor Degree in Software Engineering at Brigham Young University, I spent my time working as a 
				QA Specialist out of Rexburg, Idaho, as well doing freelance Web Development from Idaho and Kansas. I acquired project and time 
				management skills, as well as the ability to communicate with team members and clients while effectively meeting milestones and 
				deadlines.
			</p><br/>
			<p>
				As a student, I did various projects as a web developer for Brigham Young University <span>&#9866;</span> Idaho, where I collaborated with 
				several graphic designers and worked one on one with clients. I have worked on a multitude of web and print based projects for a range 
				of clients providing Web Development (PHP, HTML, CSS, SASS, JS, jQuery, Laravel, Bootstrap, Bulma, Buefy, Responsive Layouts), and 
				Quality Assurance (Manual Testing, Automated Testing, Load testing, and User Experience). During my Software Engineering degree I 
				studied Human Computer Interaction and Program Management, and therefore have a keen understanding of managing a project that will be 
				built for the best possible user experience. I am currently working in Rexburg, Idaho. 
			</p><br/>
			<p>	
				I am always available to discuss your project 
				over the phone or via Skype. These days I enjoy spending my free time hiking, camping, and researching family history.	
			</p>
		</div>
	</div>
</div> <!-- end of .flex-container -->
@endsection