@extends('layouts.app') @section('title') 400文字の小説投稿サイト OnePage @endsection @section('navbar') @endsection @section('content')
<!-- 新規登録エリア -->
<div class="row">
	<div class="col-xs-12">
		<ul id="category-list" class="nav nav-pills">
			<li role="presentation" class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li role="presentation"><a href="#">男性向け</a></li>
			<li role="presentation"><a href="#">女性向け</a></li>
			<li role="presentation"><a href="#">男性向け</a></li>
			<li role="presentation"><a href="#">女性向け</a></li>
		</ul>
		<form class="form-inline pull-right">
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
				</div>
			</div>
		</form>
	</div><!-- /.col-xs-12 -->
	<div class="col-xs-12">
		<span class="label label-radius label-default">New</span><span class="label label-radius label-default">Default</span>
		<span class="label label-radius label-primary">Primary</span>		<span class="label label-radius label-primary">Primary</span>		<span class="label label-radius label-primary">Primary</span>		<span class="label label-radius label-primary">Primary</span>		<span class="label label-radius label-primary">Primary</span>
		<span class="label label-radius label-success">Success</span>
		<span class="label label-radius label-info">Info</span>
		<span class="label label-radius label-warning">Warning</span>
		<span class="label label-radius label-danger">Danger</span>
	</div><!-- /.col-xs-12 -->
</div><!-- /.row -->
@if (Auth::guest())
<div class="container-sm">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron paper text-center">
				<h1 class="logo">OnePage<i class="fa fa-pencil" aria-hidden="true"></i></h1>
				<p>
					ようこそ400文字の小説投稿サイトOnaPage<i class="fa fa-pencil" aria-hidden="true"></i>へ
					<br>
					<small>利用規約に同意してからさっそく書いてみる？</small>
				</p>
				<a href="{{url('/auth/twitter')}}" class="btn btn-primary btn-lg btn-radius">
					<i class="fa fa-twitter" aria-hidden="true"></i> Twitterでログインする
				</a>
			</div>
		</div>
	</div>
</div><!-- /.container-sm -->
@endif
<div id="novel-list" class="container-sm">
	<div class="row">
		@foreach($novels as $novel)
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title h5">
						{{$novel->title}}
					</h2>
				</div>
				<div class="panel-body">
					{{$novel->content}}
				</div>
				<div class="panel-footer">
					<span class="small">
						名前：{{$novel->user->name}}
						<br>
						投稿日:{{$novel->created_at}}
					</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div><!-- /.container-sm -->
	<div class="container-sm">
		<div class="row">
			{{$novels->fragment('page')->links() }}
		</div>
	</div>
	<!-- /.container-sm -->
@endsection