@extends('layouts.master')
@section('title') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
		<div class="container fix-content">
			<div class="row font-size-25 margin-top-50">
                  <marquee data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
                    @foreach ($bulletins as $bulletin)
                        <span style="margin-right: 100px; cursor:pointer;" >{{ $bulletin->title }}</span>
                    @endforeach
			    </marquee>
            </div>
        <div/>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content margin-top-50" style="height: auto;">
			  	@foreach ($bulletins as $bulletin)
                <div class="modal-header">
				  			<h4 class="modal-title">{{$bulletin->title}}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button></br>
                </div>

                <div class="modal-body">
                  <span style="white-space:pre-line">{{$bulletin->content}}</span>
                </div>
              	@endforeach
              	<div class="modal-footer" style="height:70px;">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>


		<div class="container fix_content">
		    <div class="col-12">
		        <!--h2 align="center">歡迎光臨 {{ env('APP_NAME') }}</h2-->
		        <a href=”#”></a>
		    </div>
			<div class="card p-3 col-12 col-md-12 col-lg-12 margin-top-100" style="border:1px solid white;">
				<div class="card-wrapper">
					<div class="card-img">
						<a href="">
						<img src="images/i-bid.png" alt="Mobirise" title="">
						</a>
					</div>
				</div>
			</div>
			<hr class="style-eight"/>

			<div class="container">
                 <div class="media-container-row margin-top-50">
                    @foreach ($products as $product)
					<div class="col-lg-4 col-md-4 margin-top-35">
				      <a href="{{ route('user_interface.show',$product->id) }}">
				        <div class="card border-none" style="padding-left:30px;">
							<div class=" frame text-align-center" style="width:300px">
				            	<img class="shop_img" src="{{ route('img',$file_path[$product->id]) }}" class="card-img-top" alt="...">
							</div>
							<p class="card-text" style="margin-top: 30px">
									Tên sản phẩm：{{ $product->name }}<br> <!-- 商品名稱 -->
									Giá thầu hiện tại：{{ $product->cur_cost }}Tệ<br>  <!-- 目前競標價位 -->
									@if ($product->start_time > $now_time)
										Thời gian bắt đầu：{{ $product->start_time }} <!-- 開始時間 -->
									@else 
										Thời gian kết thúc：{{ $product->end_time }} <!-- 結束時間 -->
									@endif
							</p>
						</div>
					  </a>
			      	</div>
                    @endforeach
                    @for ($i = $products->count(); $i < 3; $i++)
                        <div class="col-lg-4 col-md-4 margin-top-50"></div>
                    @endfor
                </div>
                <div class="text-center margin-top-50 col-lg-3 mx-auto">
		            {{ $products->links() }}
		        </div>
			</div>
        </div>
    </div>
</div>
@endsection
