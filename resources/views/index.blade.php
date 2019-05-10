@extends('layouts.master')
@section('title', '首頁') <!-- 單行記錄 -->
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>歡迎光臨 {{ env('APP_NAME') }}</h2>
            <a href=”#”></a>
        </div>
    </div>
</div>
@endsection