@extends('layouts.master')
@section('title', 'Quản lý sản phẩm') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')
<style>
.container.fix_content {
    width: 83%;  
    max-width: initial!important; 
    
}
.container.fix_content table {
    min-width: 1500px; 
}
.container.fix_content .table-responsive {
    overflow-x: auto; 
}
@media (max-width:720px) {

    .fix_content {
        width: 100%!important; 
    }
}
</style>
<div class="container fix_content">
    <div class="row">
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th style="text-align:center;">Hình ảnh</th> <!-- 圖片 -->
                  <th width="10%">tên</th><!-- 名稱 -->
                  <th width="10%">giá niêm yết</th><!-- 原價 -->
                  <th width="10%">Giá bắt đầu đấu thầu</th><!-- 起標價 -->
                  <th width="10%">Mỗi giá đấu thầu</th><!-- 標價 -->
                  <th width="10%">Thời gian công bố</th><!-- 公佈時間 -->
                  <th width="10%">Thời gian bắt đầu</th><!-- 開始時間 -->
                  <th width="10%">Thời gian kết thúc</th><!-- 結束時間 -->
                  <th style="text-align:center;">Nhà nước</th><!-- 狀態 -->
                  <th><a href="{{ route('adm_Product.create') }}"><img src="{{ asset('images/add.png') }}" class="button cursor-pointer" style="width:20px; height:20px;" /></a></th>
                </tr>
              </thead>
              <tbody>
				@foreach($products as $product)
                <tr>
                  <td style="text-align:center;">
										<div class="frame-thumbnails">
                    	<img class="shop_img"  src="{{ url('img',$file_path[$product->id]) }}"/>
										</div>
                  </td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->origin_price }}</td>
                  <td>{{ $product->cur_cost }}</td>
                  <td>{{ $product->cost}}</td>
                  <td>{{ $product->view_time }}</td>
                  <td>{{ $product->start_time }}</td>
                  <td>{{ $product->end_time }}</td>
                  <td style="text-align:center;">

					        @if($product->view_time >= $nowtime )
				            <a href="{{ route('adm_Product.edit',$product->id) }}" class="btn btn-danger padding-05-2 white-space-nowrap font-size-10">Chỉnh sửa</a><!-- 編輯 -->
                    <a href="#" onclick="document.getElementById('delete_{{$product->id}}').submit()" class="btn btn-delete white-space-nowrap padding-05-2 font-size-10">Xóa</a><!-- 刪除 -->
                   @endif

                    @if($product->end_time < $nowtime )
                        <a href="{{ route('adm_Product.details', $product->id) }}" class="btn btn-danger white-space-nowrap padding-05-2 font-size-10">Chi tiết</a><!-- 詳細 -->

                        @if ($product->status == 0)
                        <a href="{{ route('adm_Product.status', $product->id)}}" class="btn btn-danger white-space-nowrap padding-05-16 font-size-10">
                                Chưa xuất hàng   <!-- 未出貨 -->
                        </a>
                        @else
                            <p class="finished">Đã xuất hàng</p><!-- 已出貨 -->
                        @endif
                    @endif

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
