<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>AVITEZ 100% NATURAL INSIDE &amp; OUT.</title>

	<link href="/css/all.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse no-margin-bottom">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-delivery" href="#">
					<i class="fa fa-truck"></i>
					<small>Available for</small> Home Delivery
				</a>
			</div>
		</div>
	</nav>
	<nav class="navbar">
		<div class="container">
			<ul class="nav navbar-nav main-nav">
				<li>{!! link_to_route('home', 'Home') !!}</li>
				<li>{!! link_to_route('bottles_path', 'Our Bottles') !!}</li>
				<li>{!! link_to_route('water_path', 'Our Water') !!}</li>
				<li>{!! link_to_route('env_path', 'Our Environment') !!}</li>
				<li>{!! link_to_route('order_path', 'Online Ordering') !!}</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-2">
				<img src="images/logo.png" alt="Avitez"/>
			</div>
			<div class="col-xs-10">
				@yield('content')
			</div>
		</div>
	</div>
	<footer class="footer">
    	<div class="container">
        	<div class="navbar">
        		<ul class="nav navbar-nav social-nav">
        			<li> <p class="social-text">Social Network</p></li>
        			<li><a href="#"><i class="fa fa-facebook-square fa-2"></i></a></li>
        			<li><a href="#"><i class="fa fa-twitter fa-2"></i></a></li>
        		</ul>
        		<ul class="nav navbar-nav footer-nav">
					<li>{!! link_to_route('story_path', 'Our Story') !!}</li>
					<li>{!! link_to_route('faq_path', 'faqs') !!}</li>
					<li>{!! link_to_route('contact_path', 'Contact') !!}</li>
				</ul>
        		<p class="copyright">2014 Copyrights Allrights Reserved.</p>
        	</div>
      	</div>
    </footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
