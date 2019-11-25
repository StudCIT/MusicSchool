<div class=" bg-dark wrapper" id="page-top" >
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="/admin">
			<span> Адміністрування </span>
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"  >
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse sidenav" id="navbarResponsive">

			<ul class="navbar-nav navbar-sidenav" id="Accordion">

					<li class="nav-item" title="Нові заяви">
						<a class="nav-link" href="/admin/new-statements">
							<i class="fa fa-fw fa-users"></i>
							<span class="nav-link-text">Нові заяви</span>
						</a>
					</li>
			</ul>

			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link mr-lg-2" id="siteLink" href="/" title="До сайту">
						<i class="fa fa-fw fa-sign-in"></i>
						До сайту
					</a>
				</li>
			</ul>
			<div class="user-block">
				<div class="user-content d-none d-lg-flex">
					<img src="{{ url('/') }}/img/user.png">
					<div class="welcome"><a style="color:#868e96" href="/admin/profile/{{ Auth::user()->user_id }}">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a> ({{ $role }})</div>
				</div>
				<a class="logout" data-toggle="modal" data-target="#modalLogout">
					<i class="fa fa-fw fa-sign-out"></i>Вихід
				</a>
			</div>
		</div>
	</nav>
</div>