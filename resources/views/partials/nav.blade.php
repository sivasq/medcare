<div class="slim-navbar">
	<div class="container">
		<ul class="nav">
			<li class="nav-item {{ Request::is('work*') ? 'active' : '' }}" data-placement="top" title="Dashboard">
				<a class="nav-link" href="{{url('work')}}">
					<i class="icon ion-ios-home-outline"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="nav-item" data-placement="top" title="Inbox">
				<a class="nav-link" href="javascript:void(0);">
					<i class="icon ion-ios-email-outline"></i>
					<span>Inbox</span>
				</a>
			</li>

			<li class="nav-item" data-placement="top" title="Chats">
				<a class="nav-link" href="javascript:void(0);">
					<i class="icon ion-ios-chatboxes-outline"></i>
					<span>Chats</span>
					<span class="square-8"></span>
				</a>
			</li>

			<li class="nav-item {{ Request::is('client*') ? 'active' : '' }}" data-placement="top" title="Clients">
				<a class="nav-link" href="{{url('client')}}">
					<i class="icon ion-ios-people-outline"></i>
					<span>Clients</span>
				</a>
			</li>

			<li class="nav-item" data-placement="top" title="Rx Resources">
				<a class="nav-link" href="javascript:void(0);">
					<i class="icon ion-ios-book-outline"></i>
					<span>Rx Resources</span>
				</a>
			</li>

			<li class="nav-item with-sub {{ Request::is('user*') ? 'active' : '' }}" data-placement="top" title="Admin">
				<a class="nav-link" href="javascript:void(0);">
					<i class="icon ion-ios-contact-outline"></i>
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