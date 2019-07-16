@extends('layouts.master')
@section('title', 'Bán đấu giá đang trong quá trình tiến hành') <!-- 單行記錄 -->

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
	        <div class="card border-none" style="padding-left:30px;">
				<div class=" frame text-align-center" style="width:300px">
	            	<img class="shop_img" src="{{ route('img',$file_path[$product->id]) }}" class="card-img-top" alt="...">
					<p class="card-text" style="margin-top:270px;">
						Tên sản phẩm：{{ $product->name }}<br> <!-- 商品名稱 -->
						Giá thầu hiện tại：{{ $product->cur_cost }}Tệ<br> <!-- 目前競標價位 -->
						@if ($product->start_time > $now_time)
							Thời gian bắt đầu：{{ $product->start_time }} <!-- 開始時間 -->
						@else 
							Thời gian kết thúc：{{ $product->end_time }} <!-- 結束時間 -->
						@endif
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
