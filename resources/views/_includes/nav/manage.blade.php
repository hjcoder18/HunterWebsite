<div class="side-menu" id="admin-side-menu">
	<aside class="menu m-t-30 m-l-10">
		<p class="menu-label">General</p>
		<ul class="menu-list">
			<li>
				<a href="{{route('manage.dashboard')}}"	class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a>
			</li>
		</ul>

		<p class="menu-label">Content</p>
		<ul class="menu-list">
			<li>
				<a href="{{route('posts.index')}}"class="{{Nav::isResource('posts', 2)}}">Blog Posts</a>
			</li>
		</ul>
		<ul class="menu-list">
			<li>
				<a href="{{route('recipes.index')}}"class="{{Nav::isResource('recipes', 2)}}">Recipes</a>
			</li>
		</ul>

		<p class="menu-label">Administration</p>
		<ul class="menu-list">
			<li>
				<a href="{{route('users.index')}}"class="{{Nav::isResource('users')}}">Manage Users</a>
			</li>
			<li>
				<a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
				<ul class="submenu">
					<li>
						<a class="{{Nav::isResource('roles')}}"	href="{{route('roles.index')}}">Roles</a>
					</li>
					<li>
						<a class="{{Nav::isResource('permissions')}}" href="{{route('permissions.index')}}">Permissions</a>
					</li>
				</ul>
			</li>
			<li><a class="has-submenu">Example Accordion</a>
				<ul class="submenu">
					<li>
						<a href="{{route('roles.index')}}">Roles</a>
					</li>
					<li>
						<a href="{{route('permissions.index')}}">Permissions</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="has-submenu">Another Example</a>
				<ul class="submenu">
					<li><a href="{{route('roles.index')}}">Roles</a></li>
					<li><a href="{{route('permissions.index')}}">Permissions</a></li>
				</ul>
			</li>
		</ul>
	</aside>
</div>