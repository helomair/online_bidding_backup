@extends('layouts.master')
@section('title', '商品管理') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')
<div class="container">
    <div class="row">
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th style="text-align:center;">圖片</th>
                  <th width="10%">名稱</th>
                  <th width="10%">原價</th>
                  <th width="10%">起標價</th>
                  <th width="10%">公佈時間</th>
                  <th width="10%">開始時間</th>
                  <th width="10%">結束時間</th>
                  <th style="text-align:center;">狀態</th>
                  <th><a href="{{ route('adm_Product.create') }}"><img src="{{ asset('images/add.png') }}" class="button cursor-pointer" style="width:20px; height:20px;" /></a></th>
                </tr>
              </thead>
              <tbody>
				@foreach($products as $product)
                <tr>
                  <td style="text-align:center;">
                    <img src="{{ url('img',$file_path[$product->id]) }}" class="img-thumbnail thumbnails" style="width:12vw; height:10vw;"/>
                  </td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->cost }}代幣</td>
                  <td>{{ $product->cur_cost }}代幣</td>
                  <td>{{ $product->view_time }}</td>
                  <td>{{ $product->start_time }}</td>
                  <td>{{ $product->end_time }}</td>
                  <td style="text-align:center;">
					@if($product->view_time >= $nowtime )
				    <a href="{{ route('adm_Product.edit',$product->id) }}" class="btn btn-danger">編輯</a>
					@endif
					<a href="#" onclick="document.getElementById('delete_{{$product->id}}').submit()" class="btn btn-danger">刪除</a>
				  </td>
				  <form method="post" action="{{ route('adm_Product.destroy',$product->id) }}" id="delete_{{$product->id}}">
					@csrf
					{{ method_field('DELETE') }}
				  </form>
                  <td></td>
                </tr>
				@endforeach  
            </tbody>
          </table>
			{{ $products->links() }}
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection