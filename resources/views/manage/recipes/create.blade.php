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
			<h1 class="title">Add New Recipe</h1>
		</div>
		<div class="column">
			{{-- <a href="{{route('recipes.create')}}" class="button is-primary is-pulled-right">Create New Recipe</a> --}}
		</div>
	</div>
	<hr class="m-t-0">
	
	<form action="{{route('recipes.store')}}" method="POST">
		{{csrf_field()}}
		<div class="columns">
			<div class="column is-three-quarters-desktop">
				<b-field>
		            <b-input type="text" placeholder="Recipe Title" size="is-large" v-model="title">
		            </b-input>
		        </b-field>
		        
		        <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
		        <input type="hidden" v-model="slug" name="slug" />
		        
		        <b-field class="m-t-40">
		        	<label for="time" class="label">Time</label>
		            <b-input type="number" placeholder="Prep Time" name="prep_time" id="prep_time" min="1" class="m-l-10">
		            </b-input>
		            <b-input type="number" placeholder="Cook Time" name="cook_time" id="cook_time" min="1" class="m-l-10">
		            </b-input>
		            <b-input type="number" placeholder="Ready In" name="ready_in_time" id="ready_in_time" min="1" class="m-l-10">
		            </b-input>
		        </b-field>
		        
		        <b-field class="m-t-40">
		            <b-input type="textarea" placeholder="Compose Recipe Instructions" rows="20">
		            </b-input>
		        </b-field>
		    </div> <!-- end of .column.is-three-quarters -->
		    
		    <div class="column is-one-quarter is-narrow-tablet">
				<div class="card card-widget">
					<div class="author-widget widget-area">
						<div class="selected-author">
							<img src="http://place-hold.it/50x50"/>
							<div class="author">
								<h4>By: {{ Auth::user()->name}}</h4>
								<p class="subtitle">
									(hmarshall)
								</p>
							</div>
						</div>
					</div>
					<div class="post-status-widget widget-area">
						<div class="status">
							<div class="status-icon">
			                 	<i class="material-icons" size="is-medium">assignment</i>
			                </div>
							<div class="status-details">
								<h4><span class="status-emphasis">Draft</span> Saved</h4>
								<p>A Few Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="publish-buttons-widget widget-area">
		            	<div class="secondary-action-button">
		                	<button class="button is-info is-outlined is-fullwidth">Save Draft</button>
		            	</div>
		            	<div class="primary-action-button">
		            		<button class="button is-primary is-fullwidth">Publish</button>
		            	</div>
		            </div>
				</div>
		    </div> <!-- end of .column.is-one-quarter -->
        </div>
	</form>
	
</div> <!-- end of .flex-container -->

@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				title: '',
				slug: '',
				api_token: '{{Auth::user()->api_token}}'
			},
			methods: {
				updateSlug: function(val) {
					this.slug = val;
				},
		        slugCopied: function(type, msg, val) {
		            notifications.toast(msg, {type: `is-${type}`});
		        }
			}
		});
	</script>
@endsection