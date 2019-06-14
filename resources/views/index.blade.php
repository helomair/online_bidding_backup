@extends('layouts.master')
@section('title', '首頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 align="center">歡迎光臨 {{ env('APP_NAME') }}</h2>
            <a href=”#”></a>
        </div>
		<div class="container">
			<div class="row space-between">
			  <div class="card-img">
				<img src="images/macbook.jpg" class="margin-top-100 mx-auto col-lg-12 ">
			  </div>
              @foreach($products as $product)
			  <div class="card-img margin-top-100 col-lg-3">
				<img src="{{ route('img', $file_path[$product->id]) }}">
			  </div>
              @endforeach
			</div>
        </div>
		<div class="text-center margin-top-100 col-lg-3 mx-auto">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
