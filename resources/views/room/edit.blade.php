@extends('layout')
@section('title', '編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>編集フォーム</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
            @csrf
            <!-- id受け取り -->
            <input type="hidden" name="id" value="{{ $room['id'] }}"> 
            <!-- 部屋番号受け取り -->
            <div class="form-group">
                <label for="room_id">部屋番号</label>
                <input id="room_id" name="room_id" class="form-control" value="{{ $room['room_id'] }}" type="text">
                @if ($errors->has('room_id'))
                    <div class="text-danger">{{ $errors->first('room_id') }}</div>
                @endif
            </div>
            <!-- 部屋タイプ -->
            <div class="form-group">
                <label for="title">部屋タイプ</label>
                <input id="title" name="title" class="form-control" value="{{ $room['title'] }}" type="text">
                @if ($errors->has('title'))
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>
            <!-- 収容人数 -->
            <div class="form-group">
                <label for="people">収容人数</label>
                <input id="people" name="people" class="form-control" value="{{ $room['people'] }}" type="text">
                @if ($errors->has('people'))
                    <div class="text-danger">{{ $errors->first('people') }}</div>
                @endif
            </div>
            <!-- 特記事項 -->
            <div class="form-group">
                <label for="content">本文</label>
                <textarea id="content" name="content" class="form-control" rows="4">{{ $room['content'] }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">{{ $errors->first('content') }}</div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('room') }}">キャンセル</a>
                <button type="submit" class="btn btn-primary">更新する</button>
            </div>
        </form>
    </div>
</div>
<script>
    function checkSubmit(){
        if(window.confirm('更新してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection