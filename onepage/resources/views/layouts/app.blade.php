<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') - 400文字の小説投稿サイト OnePage </title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/common.css')}}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i" rel="stylesheet" type="text/css">
</head>
<body>
	<header id="header">
		<nav>
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						 aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{ url('/') }}" class="navbar-brand logo">
							OnePage
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<!-- Authentication Links -->
						@if (Auth::guest())
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="{{url('/auth/twitter')}}">新規登録</a>
							</li>
							<li>
								<a href="{{url('/auth/twitter')}}">Login</a>
							</li>
						</ul>
						@else
						<ul class="navbar-nav nav">
							@if(Request::is('bookshelf'))

							<li>
								<a href="/writing" title="新規投稿する">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<small>投稿</small>
								</a>
							</li>
							@else
							<li>
								<a href="/bookshelf" title="本棚">
									<i class="fa fa-book" aria-hidden="true"></i>
									<small>本棚</small>
								</a>
							</li>
							@endif
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="navbar-text">作者: {{Auth::User()->name}} </li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-cog" aria-hidden="true"></i>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="/bookshelf" title="本棚">
											<i class="fa fa-book" aria-hidden="true"></i>
											<small>本棚</small>
										</a>
									</li>
									<li>
										<a href="/writing" title="新規投稿する">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											<small>投稿</small>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="glyphicon glyphicon-floppy-save"></i>CSVダウンロード</a>
									</li>
									<li role="separator" class="divider"></li>
									<li>
										<a href="/logout">
											<i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
									</li>
								</ul>
							</li>
						</ul>
						@endif @yield('navbar')
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
					<a href="#">&copy; OnaPage
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{asset('assets/js/onepage.js')}}" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>
