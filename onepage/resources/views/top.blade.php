@extends('layouts.app') 
@section('title') 
400文字の小説投稿サイト OnePage 
@endsection 
@section('navbar') 
@endsection 
@section('content')
<!-- 新規登録エリア -->
@if (Auth::guest())
 <div class="paper text-center">
       <h1 class="logo">OnePage<i class="fa fa-pencil" aria-hidden="true"></i></h1>
        <p>
            ようこそ400文字の小説投稿サイトOnaPage<i class="fa fa-pencil" aria-hidden="true"></i>へ
            <br>  
            
        </p> 
        <p>
            <small>利用規約に同意して、さっそく書いてみる？</small>
            <br>
             <a href="{{url('/auth/twitter')}}" class="btn btn-primary btn-lg">
            <i class="fa fa-twitter" aria-hidden="true"></i> Twitterでログインする
        </a>
        </p>
</div>    

@endif
<div class="row">
    <div class="col-md-8">
        <h2>新着投稿</h2>
        <p></p>
    </div>
    <!-- /.col-md-8 -->
    <div class="col-md-4">
        <h2>サイト更新情報</h2>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->
@endsection