<!DOCTYPE html>
<html>
<head>
	<title>Summer Program - Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/animate.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/slippry.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/styles.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/auth.css' ) }}">
</head>
<body>
	<!-- header -->
	<header>
		<div class="logo-wrapper text-center">
			<img src="{{ asset( 'img/sample_logo.svg' ) }}">
		</div>
	</header>
	<!-- end: header -->

	<!-- #main-container -->
	@yield( 'content' )
	<!-- end: #main-container -->

	<!-- footer -->
	<footer>
		<div class="copyright">
			<p class="text-center"><em>©2015 Socrative.com, All Rights Reserved</em></p>
		</div>
	</footer>
	<!-- end: footer -->
</body>
</html>