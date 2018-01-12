@extends('layouts.manage')

@section('top-nav')
	@include('_includes.nav.login')
@endsection

@section('side-nav')
	@include('_includes.nav.manage')
@endsection

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">This is the recipes.index page</h1>
		</div>
		<div class="column">
			<a href="{{route('recipes.create')}}" class="button is-primary is-pulled-right">Create New Recipe</a>
		</div>
	</div>
	<hr class="m-t-0">
	
	
</div> <!-- end of .flex-container -->

@endsection