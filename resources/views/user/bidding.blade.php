@extends('layouts.master')
@section('title', '下標頁面') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container fix_content">
    <div class="row">
	<div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
            <h1>下標頁面</h1>
            <form method="post" action="{{ route('bidding.store',$product->id) }}" role="form">
			@csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">下標金額</label>
                  <input name="bid_cost" id="bid_cost" type="text" class="form-control" id="exampleInputEmail1" >

                  <h1 class="text-align-center margin-top-50">OR</h1>

                  <h2 class="margin-top-50">自動下標設定</h2>

                  <label for="exampleInputEmail1">開始價格</label>
                  <input name="start_cost" id="start_cost" type="text" class="form-control" placeholder="ex:5000元">

                  <label for="exampleInputEmail1">停止價格</label>
                  <input name="stop_cost" id="stop_cost" type="text" class="form-control" placeholder="ex:15000元">

                  <label for="exampleInputEmail1">每次金額</label>
                  <input name="per_cost" id="per_cost" type="text" class="form-control" placeholder="ex:1000元">

                  <label for="exampleInputEmail1">次數</label>
                  <input name="times" id="times" type="text" class="form-control" placeholder="ex:10次">

                  <button type="submit" class="btn btn-primary margin-top-50">Submit</button>
				  <button type="button" onclick="window.location='{{ route('user_interface.show', $product->id) }}'" class="btn btn-primary margin-top-50">cancel</button>
                </div>
            </form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
