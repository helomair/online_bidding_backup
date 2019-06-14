@extends('layouts.master')
@section('title', '會員檢視') <!-- 單行記錄 -->
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
	<div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
            <h1>檢視會員資料的頁面</h1>
          <form role="form" class="width-75-percent padding-left-50">
            <div class="form-group">
              <label>使用者名稱</label>
              <input id="name" type="text" class="form-control" value="{{$user->name}}" disabled>
            </div>
			<div class="form-group">
			  <label>Email</label>
    		  <input id="email" type="text" class="form-control" value="{{$user->email}}" disabled>
    		</div>
            <div class="form-group">
			  <label>手機</label>
    		  <input type="text" class="form-control" value="{{$user->phone}}" disabled>
    		</div>
          </form>
		  <div align="center">
		  <button type="button" onclick="window.location='{{ route('adm_Account') }}'" class="btn-primary btn -sm">返回</button>
		  </div>
		</div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
