@extends('layouts.app')
@section('title')
400文字の小説投稿サイト OnePage
@endsection
@section('navbar')
<p class="navbar-text">
    ようこそ400文字の小説投稿サイト OnePageへ
</p>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="{{url('/auth/twitter')}}"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
 </ul>
@endsection
@section('content')
    <div class="row">
         <div class="text-center well">
            <h1 class="logo">OnePage <small>さっそく書いてみる？</small></h1>
                <a href="{{url('/auth/twitter')}}" class="btn btn-primary btn-lg"><i class="fa fa-twitter" aria-hidden="true"></i> TwitterでSing inする</a>
        </div>
        <!-- /.well -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-8">
            <h2>新着投稿</h2>
        </div>
        <!-- /.col-md-8 -->
        <div class="col-md-4">
            <h2>サイト更新情報</h2>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
@endsection

