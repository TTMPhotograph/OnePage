@extends('layouts.app')
@section('title')
OnePage新規投稿
@endsection
@section('navbar')
<ul class="navbar-nav nav">
  <li> <a href="/bookshelf" title="本棚"><i class="fa fa-book" aria-hidden="true"></i><small>本棚</small></a></li>
</ul>
 <ul class="nav navbar-nav navbar-right">
 <li class="navbar-text">作者: {{Auth::User()->name}} </li>
 <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span></a>
           <ul class="dropdown-menu">
     <li><a href="#"></a></li>
             <li><a href="#"></a></li>
             <li><a href="#"><i class="glyphicon glyphicon-floppy-save"></i>CSVダウンロード</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
           </ul>
         </li>
 </ul>
@endsection
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
          <form role="form">
               <fieldset>

                   <!-- Form Name -->
                   <legend>新規小説作成</legend>

                   <!-- Text input-->
                   <div class="form-group ">
                       <label class=" control-label" for="title">小説タイトル</label>
                       <p class="pull-right">
                         <small>＊<span class="counttitle">0</span>文字/100文字以内</small>
                       </p>
                       <!-- /.pull-right -->
                       <input id="title" name="title" type="text" placeholder="タイトル100文字以内" class="form-control input-md">
                   </div>

                   <!-- Textarea -->
                   <div class="form-group m-t30">
                       <label class="control-label " for="content">小説本文 </label>
                       <p class="pull-right"><small>＊<span class="count">0</span>文字400文字以内</small></p>     <!-- /.pull-right -->
                       <textarea class="form-control" id="content" name="content" rows="15" ></textarea>
                   </div>
                   <!-- Button (Double) -->
                   <div class="form-group">                       
                           <button id="button1id" name="button1id" class="btn btn-success col-xs-6">公開する</button>
                           <button id="button2id" name="button2id" class="btn btn-danger col-xs-6">下書き保存</button>
                   
                   </div>

               </fieldset>
           </form>
        </div>
    </div>
@endsection