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
		<div class="column is-one-third has-text-centered">
			<p>If someone were to ask me how much a website would cost my answer would always be the same: It depends. 
			The price and development time of any project is determined by the complexity of the design and the needs 
			of your business. Please take a minute to provide me with the details of your project.
			</p>
		</div>
	</div>
</div>
@endsection