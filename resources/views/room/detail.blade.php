@extends('layout')
@section('title','詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="">
            <h2>{{ $room['title'] }}</h2>
            <span>作成日：{{ $room['created_at'] }}</span>
            <span>更新日：{{ $room['updated_at'] }}</span>
        </div>
        <span>{{ $room['content'] }}</span>
    </div>
</div>
@endsection('content')

