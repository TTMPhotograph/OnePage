@extends('layouts.app')
@section('title')
@endsection
@section('navbar')
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
                          <!--  <tr>
                           <th>EMAIL:</th><td> {{Auth::User()->email}} </td>
                           </tr>
                           <tr>
                           <th>provider:</th><td> {{Auth::User()->provider}} </td>
                           </tr>
                           <tr>
                           <th>provider_id:</th><td> {{Auth::User()->provider_id}} </td>
                           </tr> -->
                           <!-- <tr>
                           <th>remember_token:</th><td> {{Auth::User()->remember_token}} </td>
                           </tr> -->
                           <tr>
                           <th>登録日:</th><td> {{Auth::User()->created_at}} </td>
                           </tr><!-- 
                           <tr>
                           <th>updated_at:</th><td> {{Auth::User()->updated_at}} </td>
                           </tr> -->
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
                        <th>削除/編集</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($novels as $novel)
                    <tr>
                        <td>
                         {{$novel->title}} 
                       </td>
                        <td>{{$novel->created_at}}</td>
                        <td>{{$novel->published_at or "未公開"}}</td>
                        <td>{{$novel->updated_at or ""}}</td>
                        <td>
                          <form action="{{url('delete/'.$novel->id)}}" method="POST"> 
                            {{csrf_field()}} {{method_field('DELETE')}}
                             <button type="submit" id="delete" class="btn btn-danger">
                              <i class="glyphicon glyphicon-trash"></i>
                             </button> 
                          </form>
                          <form action="{{url('edit/'.$novel->id)}}" method="POST">
                           {{csrf_field()}} 
                           <button type="submit" class="btn btn-primary btn-small">
                             <i class="glyphicon glyphicon-pencil"></i>
                           </button>
                         </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$novels->links()}}
        </div>
    </div>
</div>
@endsection
           
                 
              