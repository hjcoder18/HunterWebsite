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
			<h1 class="title">Manage users</h1>
		</div>
		<div class="column">
			<a href="{{route('users.create')}}" class="button is-primary is-pulled-right">Create New User</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="card">
		<div class="card-content">
			<table class="table is-striped is-narrow is-fullwidth">
				<thead>
					<tr>
						<th title="Id">Id</th>
						<th title="Name">Name</th>
						<th title="Email">Email</th>
						<th title="Date Created">Date Created</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at->toFormattedDateString()}}</td>
						<td class="has-text-right">
							<a class="button is-outlined is-success m-r-5" href="{{route('users.show', $user->id)}}">View</a>
							<a class="button is-outlined is-danger m-r-5" href="{{route('users.edit', $user->id)}}">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div> <!-- end of .card -->

	{{$users->links()}}
</div> <!-- end of .flex-container -->
@endsection