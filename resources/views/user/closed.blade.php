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
<div class="container fix_content">
    <div class="row">
	<div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
          <table id="products_table" class="table table-striped ">
            <thead>
              <tr>
                  <th style="text-align:center;">圖片</th>
                  <th>名稱</th>
                  <th>結標金額</th>
                  <th>得標人</th>
                </tr>
              </thead>
            <tbody>
			@foreach($closed_products as $closed_product)
                <tr>
                  <td style="text-align:center;">
                    <a href="{{ route('user_interface.show', $closed_product->id ) }}">
                        <img src=" {{ route('img', $file_path[$closed_product->id])}} " class="img-thumbnail thumbnails" />
                    </a>
                  </td>
                  <td>{{ $closed_product->name }}</td>
                  <td>{{ $closed_product->cur_cost }}</td>
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
