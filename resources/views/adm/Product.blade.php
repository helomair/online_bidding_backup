@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
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
	<div class="col-lg-10">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped margin-top-50">
            <thead>
              <tr>
                <th>圖片</th>
                  <th>名稱</th>
                  <th>公佈時間</th>
                  <th>開始時間</th>
                  <th>結束時間</th>
                  <th>狀態</th>
                  <th><a href="{{ route('adm_Product.create') }}"><img src="images/add.png" class="button" style="width:20px; height:20px;" /></a></th>
                </tr>
              </thead>
              <tbody>
				@foreach($products as $product)
                <tr>
                  <td>
                    <img src="{{ asset('images/product2.jpg') }}" class="img-thumbnail thumbnails" />
                  </td>
                  <td>{{ $product->name }}</td>
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