@extends('layouts.master')
@section('title', '結標頁面') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<!-- 結標頁面上方卡到，多加nav將頁面撐回來 -->
<nav class="nav nav-pills nav-fill margin-top-100 cursor-pointer" style="background-color:#e1f4ff;">
</nav>
<!-- /.結標頁面上方卡到，多加nav將頁面撐回來 -->
<div class="container fix_content">

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div id="products" class="table-responsive margin-top-50">
            <h1>結標表單</h1>
          <form method="post" action="{{ route('winner.endbidding', $product->id) }}" role="form" class=" ">
		    @csrf
            <div class="form-group">
              <label><p style="color: red;display: inline-block;">*</p>Họ tên </label>
              <input id="name" name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label><p style="color: red;display: inline-block;">*</p>Số điện thoại </label>
              <input id="phone" name="phone" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label><p style="color: red;display: inline-block;">*</p>Địa chỉ </label>
              <input id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror">
              @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label><p style="color: red;display: inline-block;">*</p>留言</label>
              <input type="text" id="message" name="message" style="width:100%; height: 100px;" class="form-control @error('message') is-invalid @enderror"></input>
              @error('message')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <input type="submit" value="提交" class="btn btn-danger padding-05-2 font-size-10" onclick="return confirm('Sau khi xác nhận trích xuất thì không thể thay đổi')">
            <input type="button" value="取消" onclick="window.location='/account'"  class="btn btn-danger padding-05-2 font-size-10" style="">
          </form>
        </div>
      </div>

    </div>

</div>
@endsection
