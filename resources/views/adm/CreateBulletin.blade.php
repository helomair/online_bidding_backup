@extends('layouts.master')
@section('title', 'Thông báo mới') <!-- 單行記錄 -->
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
            <h2>Thông báo mới</h2> <!-- 新增公告 -->
			<label>Tiêu đề</label> <!-- 標題 -->
            <input id="title" name="title" type="text" class="form-control">
			<label>Nội dung</label> <!-- 內容 -->
            <textarea id="content" name="content" style="width:100%; height: 250px;"></textarea>
            <button type="submit">Đã giao dịch</button> <!-- 提交 -->
            <button type="button" onclick="window.location='{{ route('adm_Bulletin') }}'">Hủy bỏ</button> <!-- 取消 -->
		  </form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
