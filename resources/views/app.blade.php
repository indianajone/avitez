<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Avitez is Asia’s first mineral water in a bottle that is made entirely from plants, it is organic and eco-friendly - 100% natural inside and out. Made solely from nature, Avitez is both environmentally sustainable and good for your health.">
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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1586859264870872&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
}       (document, 'script', 'facebook-jssdk'));
    </script>
	<nav class="navbar navbar-inverse no-margin-bottom">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
       				<span class="sr-only">Toggle navigation</span>
       				<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
      			</button>
                <a class="navbar-logo" href="{{route('home')}}">
                    <img src="images/logo-s.png" alt="Avitez"/>
                </a>
				<a class="navbar-delivery" href="{{route('order_path')}}">
					<i class="fa fa-truck"></i>
					<small>Available for</small> Home Delivery
				</a>
			</div>
		</div>
	</nav>
	<nav class="navbar">
		<div class="container">
    		<div class="collapse navbar-collapse" id="main-nav">
    			<ul class="nav navbar-nav main-nav">
    				<li{{ Route::currentRouteName() == "home" ? ' class=active' : '' }}>{!! link_to_route('home', 'Home') !!}</li>
    				<li{{ Route::currentRouteName() == "bottles_path" ? ' class=active' : '' }}>{!! link_to_route('bottles_path', 'Our Bottles') !!}</li>
    				<li{{ Route::currentRouteName() == "water_path" ? ' class=active' : '' }}>{!! link_to_route('water_path', 'Our Water') !!}</li>
    				<li{{ Route::currentRouteName() == "env_path" ? ' class=active' : '' }}>{!! link_to_route('env_path', 'Our Environment') !!}</li>
    				<li{{ Route::currentRouteName() == "order_path" ? ' class=active' : '' }}>{!! link_to_route('order_path', 'Online Ordering') !!}</li>
    			</ul>
    		</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="brand">
				<img src="images/logo.png" alt="Avitez"/>
			</div>
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
	@include('partials.tank')
	<footer class="footer">
    	<div class="container">
        	<div class="navbar">
        		<ul class="nav navbar-nav social-nav">
        			<li> <p class="social-text">Social Network</p></li>
        			<li><a href="//facebook.com/pages/Avitez/393668787370225"><i class="fa fa-facebook-square fa-2"></i></a></li>
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
	<script src="js/main.js"></script>
</body>
</html>
