@extends('layout')
@section('title', '投稿')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>投稿フォーム</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
            @csrf

            <div class="form-group">
                <label for="title">部屋番号</label>
                <input id="title" name="room_id" class="form-control" value="{{ old('room_id') }}" type="text">
                @if ($errors->has('room_id'))
                    <div class="text-danger">{{ $errors->first('room_id') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="title">部屋タイプ</label>
                <input id="title" name="title" class="form-control" value="{{ old('title') }}" type="text">
                @if ($errors->has('title'))
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="title">人数</label>
                <input id="title" name="people" class="form-control" value="{{ old('people') }}" type="text">
                @if ($errors->has('people'))
                    <div class="text-danger">{{ $errors->first('people') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="content">特記事項</label>
                <textarea id="content" name="content" class="form-control" rows="4">{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">{{ $errors->first('content') }}</div>
                @endif
            </div>

            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('room') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function checkSubmit(){
        if(window.confirm('送信してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection