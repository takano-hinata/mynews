@extends('layouts.profile')

@section('title', 'プロフィールの編集')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>My プロフィール編集</h2>
      <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

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
            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}" placeholder="氏名を入力">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2"　name="gender">性別</label>
          <div class="col-md-10">
          @if ($profile_form->gender == "男性") 
          <input type="radio" name="gender" value="男性" checked>男性&emsp;
          <input type="radio" name="gender" value="女性">女性&emsp;
          <input type="radio" name="gender" value="その他">その他
          @elseif ($profile_form->gender == "女性") 
          <input type="radio" name="gender" value="男性">男性&emsp;
          <input type="radio" name="gender" value="女性" checked>女性&emsp;
          <input type="radio" name="gender" value="その他">その他
          @else ($profile_form->gender == "その他")
          <input type="radio" name="gender" value="男性">男性&emsp;
          <input type="radio" name="gender" value="女性">女性&emsp;
          <input type="radio" name="gender" value="その他" checked>その他
          @endif
          </div>
        </div>

        <div class="form-group row">
          <lavel class="col-md-2">趣味</lavel>
          <div class="col-md-10">
            <textarea class="form-control" name="hobby" rows="5" placeholder="趣味を入力">{{ $profile_form->hobby }}</textarea>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2">自己紹介欄</label>
          <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20" placeholder="自己紹介文を入力">{{ $profile_form->introduction }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $profile_form->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
      <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>更新履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->profile_histories != NULL)
                                @foreach ($profile_form->profile_histories as $profile_history)
                                    <li class="list-group-item">{{ $profile_history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
    </div>
  </div>
</div>
@endsection