@extends('layouts.master')
@section('title', '已結標拍賣') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container fix_content">
    <div class="row">
      <div class="col-lg-12">
				<form role="form" >
        <div id="products" class="table-responsive margin-top-50">

        </div>
				<div class="row col-lg-10 space-around mx-auto">
					<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
						<input type="radio" id="coin" name="coin" value="10">
						 <label for="">10</label>
					</div>
					<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
						<input type="radio" id="coin" name="coin" value="30">
						 <label for="">30</label>
					</div>
					<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
						<input type="radio" id="coin" name="coin" value="50">
						 <label for="">50</label>
					</div>
		      </div>

			      <div class="row col-lg-10 space-around  mx-auto">
							<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
								<input value="100" type="radio" id="coin" name="coin">
								 <label for="">100</label>
							</div>
							<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
								<input value="150" type="radio" id="coin" name="coin">
								 <label for="">150</label>
							</div>
							<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
								<input value="200" type="radio" id="coin" name="coin">
								 <label for="">200</label>
							</div>
			      </div>

			      <div class="row col-lg-10 space-around mx-auto">
							<div id="coin" class="card col-lg-3 col-md-3 coin-box text-align-center font-size-25">
			          <input value="300" type="radio" id="coin" name="coin">
			           <label for="">300</label>
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


					<div class="row col-lg-10  mx-auto margin-top-50">
						<h5 class="col-lg-2 line-height-35">邀請碼：</h5>
						<input type="text" value="" class="col-lg-4 form-control bg-white" >
					</div>


					<div class="row col-lg-10 col-md-8 mx-auto margin-top-150">
					<input type="submit" value="提交" class=" btn btn-primary padding-1-3 font-size-15" >
					<input type="submit" value="取消" class=" btn btn-primary padding-1-3 font-size-15" >
				</div>
			</form>
    </div>
</div>
</div>
@endsection
