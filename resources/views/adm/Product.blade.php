@extends('layouts.master')
@section('title', '商品管理') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
	@include('layouts.adm_left_button')
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th>圖片</th>
                  <th>名稱</th>
                  <th>原價</th>
                  <th>起標價</th>
                  <th>公佈時間</th>
                  <th>開始時間</th>
                  <th>結束時間</th>
                  <th>狀態</th>
                  <th><a href="{{ route('adm_Product.create') }}"><img src="{{ asset('images/add.png') }}" class="button" style="width:20px; height:20px;" /></a></th>
                </tr>
              </thead>
              <tbody>
				@foreach($products as $product)
                <tr>
                  <td>
				    <?php
					  if($pics[$product["id"]] != NULL)
						  $file_path = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$pics[$product["id"]][0]));
				      else
						  $file_path = '';
					?>
                    <img src="{{ url('img',$file_path) }}" class="img-thumbnail thumbnails" />
                  </td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->cost }}元</td>
                  <td>{{ $product->cur_cost }}元</td>
                  <td>{{ $product->view_time }}</td>
                  <td>{{ $product->start_time }}</td>
                  <td>{{ $product->end_time }}</td>
                  <td>
				    <a href="{{ route('adm_Product.edit',$product->id) }}" class="btn btn-danger">編輯</a>
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