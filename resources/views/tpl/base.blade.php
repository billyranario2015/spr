<!DOCTYPE html>
<html>
<head>
	<title>Summer Program</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/animate.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/slippry.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/styles.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/homepage.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/profile.css' ) }}">
	@yield( 'styles' )
</head>
<body>
	<!-- header -->
	<header>
		<section class="navbar bs-docs-nav" id="top" role="banner">
			<div class="container" id="main-menu-container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="" class="navbar-brand ">
						<img src="{{ asset( 'img/sample_logo.svg' ) }}">
					</a>
				</div>
				<nav class="navbar-collapse bs-navbar-collapse collapse" id="main-menu-wrapper" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav navbar-right" id="main-menu">
						<li>
							Welcome, <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="true"><span class="text-primary"><b>John Doe</b> <i class="caret"></i></span></a> 
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="{{ url( '/' ) }}"><i class="fa fa-sign-out"></i> Sign out</a></li>
							</ul>
						</li>
					</ul>					
				</nav>
			</div>
		</section>				
	</header>
	<!-- end: header -->

	<!-- #main-container -->
	@yield( 'content' )
	<!-- end: #main-container -->

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="social-links">
				<ul class="list-inline">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="menu">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			<p class="text-center"><em>©2015 Socrative.com, All Rights Reserved</em></p>
		</div>
	</footer>
	<!-- end: footer -->

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset( 'js/jquery.min.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( 'js/bootstrap.min.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( 'js/slippry.min.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( 'js/scripts.js' ) }}"></script>
</body>
</html>