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
			<h1 class="title">This is the posts.index page</h1>
		</div>
		<div class="column">
			<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">Create New User</a>
		</div>
	</div>
	<hr class="m-t-0">
	
	
</div> <!-- end of .flex-container -->

@endsection