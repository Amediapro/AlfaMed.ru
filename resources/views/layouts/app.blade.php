<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
	integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

<!-- Styles -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">
{{--
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
--}}

<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

<style type="text/css">
body {
	font-family: 'Lato';
}

.fa-btn {
	margin-right: 6px;
}
</style>
</head>
<body id="app-layout">
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

				<!-- Branding Image -->
				<a class="navbar-brand" href="{{ url('/') }}"> AlfaMed </a>
			</div>

			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row profile">
			<div class="col-md-3">
				<div class="profile-sidebar">
					@if (Auth::guest())
					<div class="profile-usermenu">
						<ul class="nav">
							<li><a href="{{ url('/login') }}"> Login</a></li>
						</ul>
					</div>
					@else
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<img src="{{ asset('img/avatar.png') }}" class="img-responsive"
							alt="">
					</div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">{{ Auth::user()->first_name }}</div>
						<div class="profile-usertitle-job">Developer</div>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					<!-- SIDEBAR BUTTONS -->
					<div class="profile-userbuttons"></div>
					<!-- END SIDEBAR BUTTONS -->
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="{{ Request::is('overview') ? 'active' : null }}"><a
								href="{{ url ('/overview') }}"> <i class="glyphicon glyphicon-home"></i> Overview
							</a></li>
							<li><a data-toggle="collapse" href="#settings"><i
									class="glyphicon glyphicon-user"></i> {{
									trans('menus.settings') }}</a></li>
							<ul id="settings" class="collapse">
								<li class="{{ Request::is('settings') ? 'active' : null }}"><a
									href="{{ url('/settings') }}"><i
										class="glyphicon glyphicon-user"></i> {{
										trans('menus.settings') }}</a></li>
								<li class="{{ Request::is('settings/addres') ? 'active' : null }}"><a
									href="{{ url('/settings/addres') }}"><i
										class="glyphicon glyphicon-user"></i> {{
										trans('menus.address') }}</a></li>
							</ul>

							<li class="{{ Request::is('tasks') ? 'active' : null }}"><a
								href="#" target="_blank"> <i class="glyphicon glyphicon-ok"></i>
									Tasks
							</a></li>
							<li><a href="{{ url('/logout') }}"> <i
									class="fa fa-btn fa-sign-out"></i> Logout
							</a></li>

						</ul>
					</div>
					@endif
					<!-- END MENU -->
				</div>
			</div>
			<div class="col-md-9">
				@include('errors.errors')
				<div class="profile-content">@yield('content')</div>
			</div>
		</div>
	</div>

	<!-- JavaScripts -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
		integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
		crossorigin="anonymous" type="text/javascript"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous" type="text/javascript"></script>
	{{--
	<script src="{{ elixir('js/app.js') }}" type="text/javascript"></script>
	--}}
</body>
</html>
