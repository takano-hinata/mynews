@extends('layouts.profile')

@section('title', 'プロフィール作成画面')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>My プロフィール</h2>
      <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
    　　　　　 <ul>
        　　@foreach($errors->all() as $e)
         　　　 <li>{{ $e }}</li>
        　 　@endforeach
        　 </ul>
     　　@endif
        <div class="form-group row">
          <lavel class="col-md-2">名前</lavel>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="山田　太郎">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2">性別</label>
          <div class="col-md-10">
          <input type="radio" name="gender" value="男性">男性&emsp;
          <input type="radio" name="gender" value="女性">女性&emsp;
          <input type="radio" name="gender" value="その他">その他
          </div>
        </div>

        <div class="form-group row">
          <lavel class="col-md-2">趣味</lavel>
          <div class="col-md-10">
            <textarea class="form-control" name="hobby" rows="5" placeholder="趣味を入力してください。">{{ old('hobby') }}</textarea>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2">自己紹介欄</label>
          <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20" placeholder="自己紹介文を入力してください。">{{ old('introduction') }}</textarea>
          </div>
        </div>
        {{ csrf_field() }}
        　　　　　　　　　　　 <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection