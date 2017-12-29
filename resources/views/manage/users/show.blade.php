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
			<h1 class="title">View User Details</h1>
		</div>
		<!-- end of column -->

		<div class="column">
			<a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">
				<i class="fa fa-user m-r-10"></i> Edit User
			</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="card">
		<div class="card-content">
			<div class="field">
				<label for="name" class="label">Personal</label>
				<pre><b>Name: </b>{{$user->name}}</pre>
			</div>

			<div class="field">
				<div class="field">
					<label for="email" class="label">Contact</label>
					<pre><b>Email: </b>{{$user->email}}</pre>
				</div>
			</div>

			<div class="field">
				<div class="field">
					<label for="email" class="label">Roles</label>
					<ul>
						{{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet.' : ''}}
						@foreach ($user->roles as $role)
							<li>{{$role->display_name}} ({{$role->description}})</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection