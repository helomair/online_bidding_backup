@extends('layouts.master')
@section('title', '進行中拍賣') <!-- 單行記錄 -->

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
      <!-- /.col-lg-3 -->
      <div class="row col-lg-12 space-around mx-auto">
	  @foreach ($products as $product)
      <div class="col-lg-4 col-md-4 margin-top-50">
      <a href="{{ route('user_interface.show',$product->id) }}">
        <div class="card border-none" >
					  <div class=" frame">
            	<img class="shop_img" src="{{ route('img',$file_path[$product->id]) }}" class="card-img-top" alt="...">
						</div>
            <div class="card-body text-align-center" style="width:250px;">
              <p class="card-text">
			    商品名：{{ $product->name }}<br>
				目前競標價位：{{ $product->cur_cost }}元
			  </p>
            </div>
		</div>
	  </a>
      </div>
      @endforeach

      @for ($i = $products->count(); $i < 3; $i++)
        <div class="col-lg-3 col-md-3 margin-top-50">

	  </div>
      @endfor
	</div>
	  {{ $products->links() }}
	<!-- /.col-lg-9 -->
</div>
</div>
@endsection
