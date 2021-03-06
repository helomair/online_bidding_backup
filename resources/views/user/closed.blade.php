@extends('layouts.master')
@section('title', 'Đã kết thúc phiên đấu giá') <!-- 單行記錄 -->

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
          <table id="products_table" class="table table-striped ">
            <thead>
              <tr>
                  <th style="text-align:center;">Hình ảnh</th>
                  <th>Tên sản phẩm </th>
                  <th>Mức tiền trúng thầu</th>
                  <th>Chiết khấu</th>
                  <th>Người được đấu thầu</th>
                </tr>
              </thead>
            <tbody>
			@foreach($closed_products as $closed_product)
                <tr>
                  <td style="text-align:center;">
                    <a href="{{ route('user_interface.show', $closed_product->id ) }}">
					  <div class="frame-thumbnails">
                        <img class="shop_img" src=" {{ route('img', $file_path[$closed_product->id])}} " />
					  </div>
                    </a>
                  </td>
                  <td>{{ $closed_product->name }}</td>
                  <td>{{ $closed_product->cur_cost }}</td>
                  <td>{{ $closed_product->discount}}%</td>
                  <td>{{ $winners[$closed_product->id] }}</td>
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
