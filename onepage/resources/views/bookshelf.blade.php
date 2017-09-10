@extends('layouts.app')
@section('title')
400文字の小説投稿サイト OnePage
@endsection
@section('navbar')
<p class="navbar-text">
    ようこそ400文字の小説投稿サイト OnePageへ
</p>
 <ul class="nav navbar-nav navbar-right">
 <li class="navbar-text">作者: {{Auth::User()->name}} </li>
 <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span></a>
           <ul class="dropdown-menu">
     <li><a href="#"></a></li>
             <li><a href="#">Another action</a></li>
             <li><a href="#"><i class="glyphicon glyphicon-floppy-save"></i>CSVダウンロード</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
           </ul>
         </li>
 </ul>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 本棚</div>

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
<th>
                        </tr>
                    </table>
                     <!-- /.table --> 
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection