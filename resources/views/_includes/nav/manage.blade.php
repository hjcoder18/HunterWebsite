<div class="side-menu">
	<aside class="menu m-t-30 m-l-10">
	  <p class="menu-label">
	    General
	  </p>
	  <ul class="menu-list">
	    <li><a>Dashboard</a></li>
	    <li><a>Customers</a></li>
	  </ul>
	  <p class="menu-label">
	    Administration
	  </p>
	  <ul class="menu-list">
	    <li><a href="{{route('users.index')}}">Manage Users</a></li>
	    <li>
	    <a href="{{route('permissions.index')}}">Roles & Permissions</a>
	    <ul>
	    	<li><a href="{{route('roles.index')}}">Roles</a></li>
	    	<li><a href="{{route('permissions.index')}}">Permissions</a></li>
	    </ul>
	    </li>
	  </ul>
	  <p class="menu-label">
	    Transactions
	  </p>
	  <ul class="menu-list">
	    <li><a>Payments</a></li>
	    <li><a>Transfers</a></li>
	    <li><a>Balance</a></li>
	  </ul>
	</aside>
</div>