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
        </div>
		<div class="row col-lg-12 space-around mx-auto">
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">10P</h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">30P</h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">50P</h5>
          </div>
        </div>
      </div>

      <div class="row col-lg-12 space-around  mx-auto">
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">100P</h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">150P</h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">200P</h5>
          </div>
        </div>
      </div>

      <div class="row col-lg-12 space-around mx-auto">
        <div class="card col-lg-3 col-md-3 coin-box">
          <div class="card-body text-align-center">
            <h5 class="">300P</h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box" style="visibility:hidden;">
          <div class="card-body text-align-center">
            <h5 class=""></h5>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 coin-box" style="visibility:hidden;">
          <div class="card-body text-align-center">
            <h5 class=""></h5>
          </div>
        </div>
      </div>
	<!-- /.col-lg-9 -->
    </div>
</div>
</div>
@endsection