@extends('layouts.master')
@section('title', 'Thông báo sửa đổi') <!-- 單行記錄 -->
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
	<div class="col-lg-10">
        <div id="products" class="table-responsive margin-top-50">
          <form  method="post" action="{{ route('adm_Bulletin.update',$bulletin->id) }}" role="form" class="width-75-percent padding-left-50">
			@csrf
			{{ method_field('PATCH') }}
            <h2>Thông báo sửa đổi</h2> <!-- 修改公告 -->
			<label>Tiêu đề</label> <!-- 標題 -->
            <input id="title" name="title" type="text" class="form-control" value="{{ $bulletin->title }}">
			<label>Nội dung</label> <!-- 內容 -->
            <textarea id="content" name="content" style="width:100%; height: 150px;">{{ $bulletin->content }}</textarea>
            <button type="submit">submit</button>
            <button type="button" onclick="window.location='{{ route('adm_Bulletin') }}'">cancel</button>
		  </form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
