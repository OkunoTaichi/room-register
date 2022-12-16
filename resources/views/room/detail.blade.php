@extends('layout')
@section('title','詳細')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="mb-4">
            <h2>部屋番号：{{ $room['room_id'] }}</h2>
            <span class="m-3">部屋タイプ：{{ $room['title'] }}</span>
            <span class="m-3">収容人数：{{ $room['people'] }}</span>
            <!-- <span class="m-3">作成日：{{ $room['created_at'] }}</span> -->
            <span class="m-3">更新日：{{ $room['updated_at'] }}</span>
        </div>
        <span>特記事項<br>{{ $room['content'] }}</span>
    </div>
</div>
@endsection('content')

