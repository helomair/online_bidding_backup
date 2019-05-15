@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
	@include('layouts.adm_left_button')
	<div class="col-lg-10">
        <div id="products" class="table-responsive margin-top-50">
          <h2>新增商品</h2>
          <form  method="post" action="{{ route('adm_Product.store') }}" role="form" class="width-75-percent padding-left-50">
			@csrf
			<div class="form-group">
              <label>名稱</label>
              <input name="name" id="name" type="text" class="form-control">
            </div>
			<div class="form-group">
			  <label>公布時間</label>
    		  <input name="view_time" id="view_time" type="date" class="form-control">
    		</div>
			<div class="form-group">
			  <label>開始時間</label>
    		  <input name="start_time" id="start_time" type="date" class="form-control">
    		</div>
			<div class="form-group">
			  <label>結束時間</label>
			  <input name="end_time" id="end_time" type="date" class="form-control">
			</div>
			<div class="form-group">
			  <label>簡介</label><br>
			  <textarea name="detail" id="detail" style="width:100%; height: 150px;"></textarea>
    		</div>
			<div class="form-group">
			  <label>圖片</label><br>
			  <button>上傳圖片</button>
    		</div>
			<button type="submit" class="btn-primary btn -sm">儲存</button>
			</form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection