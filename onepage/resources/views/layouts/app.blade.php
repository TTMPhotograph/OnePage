<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title') - 400文字の小説投稿サイト OnePage </title>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<style>

	</style>
</head>
<body>
	<header id="header">
		<nav>
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <a href=" @if (Auth::guest()){{ url('/') }}@else{{ url('/bookshelf') }}@endif" class="navbar-brand logo">
						 	OnePage <i class="fa fa-pencil" aria-hidden="true"></i>
						  </a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						@if(Auth::guest())<p class="navbar-text">
								ようこそ400文字の小説投稿サイト 
								<a href=" @if (Auth::guest()){{ url('/') }}@else{{ url('/bookshelf') }}@endif" class="logo">
									OnaPage <i class="fa fa-pencil" aria-hidden="true"></i>
								 </a>へ
							</p>
						@endif
						@yield('navbar')
					</div>
				</div>
			</nav>    
		</header>
		<div class="container">
		@yield('content')
		</div>
		<!-- /.container -->
		<!-- /header -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="#">&copy; OnaPage <i class="fa fa-pencil" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
		<script src="{{asset('/js/onepage.js')}}" type="text/javascript" charset="utf-8" async defer></script>
	</body>
	</html>
