@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')
<div class="container fix_content">
    <div class="row">
	<div class="col-lg-10 mx-auto">
        <div id="products" class="table-responsive margin-top-50">
          <form method="post" action="{{ route('adm_Bulletin.store') }}" role="form" class="">
			@csrf
            <h2>新增公告</h2>
			<label>標題</label>
            <input id="title" name="title" type="text" class="form-control">
			<label>內容</label>
            <textarea id="content" name="content" style="width:100%; height: 250px;"></textarea>
            <button type="submit">提交</button>
            <button type="button" onclick="window.location='{{ route('adm_Bulletin') }}'">取消</button>
		  </form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
