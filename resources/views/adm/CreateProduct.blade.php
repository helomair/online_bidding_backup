@extends('layouts.master')
@section('title', 'Tăng thêm sản phẩm') <!-- 單行記錄 -->
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
          <h2>Tăng thêm sản phẩm</h2> <!-- 新增商品 -->
          <form  method="post" action="{{ route('adm_Product.store') }}" role="form" class="" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
              <label>tên</label> <!-- 名稱 -->
              <input name="name" id="name" type="text" class="form-control">
            </div>
      <div class="form-group">
              <label>giá niêm yết</label> <!-- 原價 -->
              <input name="origin_price" id="origin_price" id="text" type="text" class="form-control">
			 </div>
             <div class="form-group">
                <label>Giá bắt đầu đấu thầu</label> <!-- 起標價 -->
                <input name="cur_cost" id="cur_cost" id="text" type="text" class="form-control">
            </div>
			<div class="form-group" style="">
                <label>Mỗi giá đấu thầu</label><br> <!-- 標價 -->
					<input type="radio" name="cost" value="1000">
				<label style="">1000</label>
					<input type="radio" name="cost" value="2000">
				<label style="">2000</label>
					<input type="radio" name="cost" value="3000">
				<label style="">3000</label>
			</div>
			<div class="form-group">
			  <label>Thời gian công bố</label> <!-- 公佈時間 -->
    		  <input name="view_time" id="view_time" type="datetime-local" class="form-control">
    		</div>
			<div class="form-group">
              <label>Thời gian bắt đầu</label> <!-- 開始時間  -->
    		  <input name="start_time" id="start_time" type="datetime-local" class="form-control">
    		</div>
			<div class="form-group">
			  <label>Thời gian kết thúc</label> <!-- 結束時間 -->
			  <input name="end_time" id="end_time" type="datetime-local" class="form-control">
			</div>
			<div class="form-group">
			  <label>Nội dung giới thiệu</label><br> <!-- 簡介 -->
			  <textarea name="detail" id="detail" style="width:100%; height: 150px;"></textarea>
    		</div>
			<div class="form-group">
			  <label>Hình ảnh</label><br> <!-- 圖片 -->
			  <input type="file" class="form-group" name="pics[]" id="pics" multipart>
    		</div>
			<button type="submit" class="btn-primary btn-sm">lưu</button> <!-- 儲存 -->
			<button type="button"  onclick="window.location='{{ route('adm_Product') }}'" class="btn-primary btn-sm">Hủy bỏ</button> <!-- 取消 -->
			</form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
