@extends('layouts.app')
@section('title')
@endsection
@section('navbar')
<!-- <ul class="navbar-nav nav">
  <li> <a href="/writing" title="新規投稿する"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><small>投稿</small></a></li>
</ul>
 <ul class="nav navbar-nav navbar-right">
 <li class="navbar-text">作者: {{Auth::User()->name}} </li>
 <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span></a>
           <ul class="dropdown-menu">
     <li><a href="#"></a></li>
             <li><a href="#"><i class="glyphicon glyphicon-floppy-save"></i>CSVダウンロード</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
           </ul>
         </li>
 </ul> -->
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 作者</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tr>
                         <th> ID:</th><td> {{Auth::User()->id}} </td>
                          </tr>
                          <tr>
                          <th> 作者名:</th><td> {{Auth::User()->name}} </td>
                           </tr>
                           <tr>
                           <th>EMAIL:</th><td> {{Auth::User()->email}} </td>
                           </tr>
                           <tr>
                           <th>provider:</th><td> {{Auth::User()->provider}} </td>
                           </tr>
                          <!--  <tr>
                           <th>provider_id:</th><td> {{Auth::User()->provider_id}} </td>
                           </tr> -->
                           <!-- <tr>
                           <th>remember_token:</th><td> {{Auth::User()->remember_token}} </td>
                           </tr> -->
                           <tr>
                           <th>created_at:</th><td> {{Auth::User()->created_at}} </td>
                           </tr>
                           <tr>
                           <th>updated_at:</th><td> {{Auth::User()->updated_at}} </td>
                           </tr>
                         </table>
                     <!-- /.table --> 
                    You are logged in!
                </div>
            </div>
            <h3>本棚</h3>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>作成日</th>
                        <th>公開日</th>
                        <th>更新日</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($novels as $novel)
                    <tr>
                        <td>{{$novel->title}}</td>
                        <td>{{$novel->created_at}}</td>
                        <td>{{$novel->published_at or "未公開"}}</td>
                        <td>{{$novel->updated_at or ""}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
           
                 
                