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
      <!-- /.col-lg-3 -->
	  @foreach($products as $product)
      <a href="{{ route('user_interface.show',$product->id) }}">
        <div class="col-lg-4 margin-top-50">
		  <div class="card" style="width: 18rem;">
            <img src="images/macbook.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
			    商品名：{{ $product->name }}<br>
				目前競標價位：{{ $product->cur_cost }}元
			  </p>
            </div>
          </div>
		</div>
	  </a>
	  @endforeach  
	  {{ $products->links() }}
	</div>
	<!-- /.col-lg-9 -->
</div>
@endsection