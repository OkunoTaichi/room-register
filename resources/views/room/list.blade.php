@extends('layout')
@section('title','一覧')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>一覧</h2>
            @if(session('err_msg'))
            <p class="text-danger">
                {{ session('err_msg') }}
            </p>
            @endif
        <table class="table table-striped">
            <tr>
                <!-- <th>管理番号</th> -->
                <th>部屋番号</th>
                <th>部屋タイプ</th>
                <th>人数</th>
                <!-- <th>特記事項</th> -->
                <th>更新時間</th>
                <th></th>
                <th></th>
    
            </tr>
            @foreach($rooms as $room)
            <tr>
                <!-- 管理番号 -->
                <!-- <td>{{ $room['id'] }}</td> -->
                <!-- 部屋番号 -->
                <td><a href="{{ route('room') }}/room/{{ $room['id'] }}">{{ $room['room_id'] }}</a></td>
                <!-- 部屋タイプ -->
                <td>{{ $room['title'] }}</td>
                <!-- 最大収容人数 -->
                <td>{{ $room['people'] }}</td>
                <!-- 特記事項 -->
                <!-- <td>{{ $room['content'] }}</td> -->
                
                <!-- 更新時間 -->
                <td>{{ $room['updated_at'] }}</td>
                <!-- 編集ボタン -->
                <td>
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('room') }}/edit/{{ $room['id'] }}" style="color:#fff">編集</a>
                    </button>
                </td>
                <!-- 削除ボタン -->
                <form method="POST" action="{{ route('delete', $room['id']) }}" onSubmit="return checkDelete()">
                    @csrf
                    <td>
                        <button type="submit" class="btn btn-danger" onclick="">削除</button>
                    </td>
                </form>
       
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    function checkDelete(){
        if(window.confirm('削除してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection('content')

