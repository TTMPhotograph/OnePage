@extends('layouts.app') 
@section('title') OnePage新規投稿 
@endsection 
@section('navbar') 
@endsection 
@section('content') 
@include('errors.errors')
<div class="col-md-8 col-md-offset-2">
	<div class="well">
		<form role="form" method="POST">
			{{ csrf_field() }} {{Form::hidden('id',isset($id) ? $id : '' )}}
			<fieldset>
				<!-- Form Name -->
				<legend class="logo">新規小説作成</legend>
				<!-- Text input-->
				<div class="form-group ">
					<label class=" control-label" for="title">小説タイトル</label>
					<p class="pull-right">
						<small>
							＊
							<span class="counttitle">0</span>文字/40文字以内
						</small>
					</p>
					<!-- /.pull-right -->
					<input id="title" class="form-control input-md" name="title" value="{{$title or ''}}" type="text" maxlength='40' placeholder="タイトル40文字以内">
				</div>
				<!-- Textarea -->
				<div class="form-group m-t30">
					<label class="control-label pull-left" for="content">
						<a href data-target="#writingeditor" aria-controls="writingeditor" role="tab" data-toggle="tab">
							<i class="fa fa-pencil-square" aria-hidden="true"></i>小説本文
						</a>/
						<a href data-target="#memoeditor" aria-controls="memoeditor" role="tab" data-toggle="tab">
							<i class="fa fa-sticky-note-o" aria-hidden="true"></i>メモ帳
						</a>
					</label>
					<div class="form-group tab-content">
						<div id="writingeditor" class="tab-pane active">
							<div class="pull-right">
								<small>＊
									<span class="count">0</span>文字400文字以内</small>
							</div>
							<!-- /.pull-right -->
							<textarea id="content" class="form-control" name="content" rows="15" maxlength="400">{{$content or ''}}</textarea>
						</div>
						<!-- /.tab-pane -->
						<div role="tabpanel" id="memoeditor" class="tab-pane">
							<textarea id="memo" class="form-control" name="memo" rows="15">{{$memo or ''}}</textarea>
						</div>
					</div>
					<!-- / tabs-content -->
					<div class="form-group">
					<label class="control-label" for="selectgenre">ジャンルを選択して下さい。</label>
					<select id="selectgenre"  class="form-control" name="genre_id">
					@foreach($genre as $index => $name)
						<option value= "{{ $index+1 }}" @if(old('genre_id') == $index) selected @endif>{{$name->genrename}}</option>
					@endforeach
					</select>
					</div>
					<!-- / genre-content -->
				</div>
				<!-- Button (Double) -->
				<div class="form-group">
					<button id="button1id" class="btn btn-success col-xs-5 pull-left" name="publish" value="publish">公開する</button>
					<button id="button2id" class="btn btn-danger col-xs-5 pull-right" name="draft" value="draft">下書き/メモ 保存</button>
				</div>
			</fieldset>
		</form>
	</div>
</div>
@endsection
