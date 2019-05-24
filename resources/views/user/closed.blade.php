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
          <table id="products_table" class="table table-striped ">
            <thead>
              <tr>
                  <th>圖片</th>
                  <th>名稱</th>
                  <th>結標金額</th>
                </tr>
              </thead>
            <tbody>
			@foreach($closed_products as $closed_product)
                <tr>
                  <td>
                    <img src="images/product2.jpg" class="img-thumbnail thumbnails" />
                  </td>
                  <td>{{ $closed_product->name }}</td>
                  <td>{{ $closed_product->cur_cost }}</td>
                </tr>
			@endforeach
            </tbody>
          </table>
		  {{ $closed_products->links() }}
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection