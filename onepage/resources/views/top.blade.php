@extends('layouts.app') 
@section('title') 
400文字の小説投稿サイト OnePage 
@endsection 
@section('navbar') 
@endsection 
@section('content')
<!-- 新規登録エリア -->
@if (Auth::guest())
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
@endif
<div id="novel-list">	
	<div class="row">
		@foreach($novels as $novel)
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="h3">
						{{$novel->title}}
					</h2>
				</div>
				<div class="panel-body">
					{{$novel->content}}
				</div>
				<div class="panel-footer">

					<p class="small">
						名前：{{$novel->user->name}}
						<br>
						投稿日:{{$novel->created_at}}
					</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- /#novel-list -->
@endsection