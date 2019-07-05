@extends('layouts.master')
@section('title', '商品詳細資訊') <!-- 單行記錄 -->
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
@media (max-width:720px) {

    .fix_content {
        width: 100%!important; 
    }
}
</style>
<div class="container fix_content">
	<div class="row">
			<!--Titles-->
			<div class="title col-lg-12 margin-top-50">
					<h2 class="text-align-center mbr-fonts-style display-5 " style="font-size:40px;">
						Thông tin sản phẩm <!-- 商品詳細 -->
					</h2>
			</div>

			<div class="col-lg-6 col-md-6 margin-top-50" style="border-left:6px solid #5a83ce; border-radius:5px;">
					<div class="left-block wrapper">
							<div class="row mx-auto my-4">
									<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
											Tên sản phẩm ： <!-- 商品名稱 -->
									</h5>
									<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;" >{{$product->name}} </span>


							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
										giá niêm yết： <!-- 原價 -->
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;">{{$product->origin_price}}</span>

							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
										Giá bắt đầu đấu thầu： <!-- 起標價 -->
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;">{{$product->cur_cost}}</span>


							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
										Thời gian công bố： <!-- 公佈時間 -->
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;"> {{$product->view_time}}</span>
							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
										Thời gian bắt đầu： <!-- 開始時間 -->
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;">{{$product->start_time}}</span>
							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30" style="font-size:25px; min-width: 300px">
										Thời gian kết thúc： <!-- 結束時間 -->
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-1" style="font-size:25px;">{{$product->end_time}}</span>

							</div>
					</div>
			</div>

			<div class="col-lg-6 col-md-6 margin-top-50">
    
                    <img src="{{ route('img',$file_path )}}" style="width:100%; margin-top:50px;"/>
			</div>

<!--			<div class="row col-md-12 margin-top-50 " style="justify-content: flex-end;">
				<a href="add_products.html" class="btn btn-danger padding-05-2">前往編輯頁面</a>
			</div> -->

			<div class="col-md-12">
				<hr>
			</div>

			<div class="title col-lg-12 margin-top-50" style="border-left:6px solid #44ab44; border-radius:5px;">
					<h2 class="text-align-center mbr-fonts-style display-5 font-size-40">
					得 標 者 資 訊 <!-- 得標者資訊 -->
					</h2>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								Họ tên： <!-- 姓名 -->
						</h5>
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
                                {{ ( $product->winner ) ? ($product->winner_name) : "無得標者" }} <!-- 無得標者 -->

						</h5>
					</div>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								Số điện thoại ： <!-- 電話 -->
						</h5>
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
                                {{ ( $product->winner ) ? ($product->winner_phone) : ""  }}
						</h5>

                    </div>

                    <div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								Địa chỉ： <!-- 地址 -->
						</h5>
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
							    {{ $product->address  }}
						</h5>
                    </div>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								Để lại tin nhắn： <!-- 留言 -->
						</h5>

						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
							    {{ $product->message  }}
						</h5>
					</div>

			</div>

	</div>
</div>
@endsection
