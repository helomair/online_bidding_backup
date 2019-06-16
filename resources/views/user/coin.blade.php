@extends('layouts.master')
@section('title', '已結標拍賣') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!--	<script src="{{ asset('js/app.js') }}" defer></script> -->
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container fix_content">
    <div class="row">
      <div class="col-lg-12">

        <form role="form" action="{{ route('coin.make') }}" method="post">
        @csrf
            <ul class="donate-now">
                <li>
                    <input type="radio" id="10p" name="coin" value="10" />
                    <label for="10p">10</label>
                </li>
                <li>
                    <input type="radio" id="30p" name="coin" value="30" />
                    <label for="30p">30</label>
                </li>
                <li>
                    <input type="radio" id="50p" name="coin" value="50" checked="checked" />
                    <label for="50p">50</label>
                </li>
                <li>
                    <input type="radio" id="100p" name="coin" value="100" />
                    <label for="100p">100</label>
                </li>
                <li>
                    <input type="radio" id="200p" name="coin" value="200" />
                    <label for="200p">200</label>
                </li>
                <li>
                    <input type="radio" id="300p" name="coin" value="300" />
                    <label for="300p">300</label>
                </li>
            </ul>   

			<div class="row col-lg-10  mx-auto margin-top-50">
			  <h5 class="col-lg-2 line-height-35">邀請碼：</h5>
			    <input type="text" value="" class="col-lg-4 form-control bg-white" name="code" >
			</div>

			<div class="row col-lg-10 col-md-8 mx-auto margin-top-150">
			  <input type="submit" value="提交" class="col-lg-3 col-md-3 col-xs-3 btn btn-primary" >
			  <input type="submit" value="取消" class="col-lg-3 col-md-3 col-xs-3 btn btn-primary " >
            </div>
		</form>
    </div>
</div>
</div>
@endsection
