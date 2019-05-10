<div class="slim-navbar">
	<div class="container">
		<ul class="nav">
			<li class="nav-item {{ Request::is('work*') ? 'active' : '' }}">
				<a class="nav-link" href="{{url('work')}}">
					<span>Dashboard</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="javascript:void(0);">
					<span>Inbox</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="javascript:void(0);">
					<span>Chats</span>
					<span class="square-8"></span>
				</a>
			</li>

			<li class="nav-item {{ Request::is('client*') ? 'active' : '' }}">
				<a class="nav-link" href="{{url('client')}}">
					<span>Clients</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="javascript:void(0);">
					<span>Rx Resources</span>
				</a>
			</li>

			<li class="nav-item with-sub {{ Request::is('user*') ? 'active' : '' }}">
				<a class="nav-link" href="javascript:void(0);">
					<span>Admin</span>
				</a>
				<div class="sub-item">
					<ul>
						<li><a href="{{url('user/create')}}">Create Account</a></li>
						<li><a href="{{url('user')}}">Accounts List</a></li>
					</ul>
				</div><!-- dropdown-menu -->
			</li>
		</ul>
	</div><!-- container -->
</div><!-- slim-navbar -->