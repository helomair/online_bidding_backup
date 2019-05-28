@extends('layouts.master')
@section('title', '已結標拍賣') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container">
    <div class="row">  
      <div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
            <h1>儲值頁面</h1>
          <form role="form" class="width-75-percent padding-left-50">
		  @csrf
            <div class="form-group">
              <label>
                儲值額度
              </label>
              <input id="money" type="text" class="form-control" placeholder="提示:NT$300=1P">

            </div>
            <input  type="button" onclick="window.location='{{ route('account') }}'" value="取消" class="form-control my-4" style="width:15%; float:right;">
            <input type="submit" value="提交" class="form-control my-4" style="width:15%; float:right;">
          </form>
        </div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection