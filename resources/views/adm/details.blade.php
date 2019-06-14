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
<div class="container">
	<div class="row">
			<!--Titles-->
			<div class="title col-lg-12 margin-top-50">
					<h2 class="text-align-center mbr-fonts-style display-1 ">
						Product Contents
					</h2>
			</div>

			<div class="col-lg-6 col-md-6 margin-top-50">
					<div class="left-block wrapper">
							<div class="row mx-auto my-4">
									<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
											商品名稱：
									</h5>
									<span class="col-md-4 text-align-center padding-top-30 display-5">Macbook pro </span>


							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
										原價：
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-5">500P</span>

							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
										起標價：
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-5">400P</span>


							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
										公佈時間：
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-5">12:00:00</span>
							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
										起始時間：
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-5">13:00:00</span>
							</div>

							<div class="row mx-auto my-4">
								<h5 class="text-align-center mbr-fonts-style display-5 col-md-4 padding-top-30">
										結束時間：
								</h5>
								<span class="col-md-4 text-align-center padding-top-30 display-5">14:00:00</span>

							</div>
					</div>
			</div>

			<div class="col-lg-6 col-md-6 margin-top-50">
					<h5 class="text-align-center mbr-fonts-style display-5 col-md-12 margin-top-50">
							簡介
					</h5>
					<textarea class="my-4" style="width:100%; height: 350px; border:#000000 1px solid;"></textarea>
			</div>

			<div class="row col-md-12 margin-top-50 " style="justify-content: flex-end;">
				<a href="add_products.html" class="btn btn-danger padding-05-2">前往編輯頁面</a>
			</div>

			<div class="col-md-12">
				<hr>
			</div>

			<div class="title col-lg-12 margin-top-50">
					<h2 class="text-align-center mbr-fonts-style display-1 font-size-40">
					得 標 者 資 訊
					</h2>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								姓名：
						</h5>
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
								林孟儒

						</h5>
					</div>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								電話：
						</h5>
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
								0966666666
						</h5>

					</div>

					<div class="row mx-auto my-4 col-md-6">
						<h5 class="text-align-center mbr-fonts-style display-1 col-md-4 padding-top-30 font-size-25">
								留言：
						</h5>

						<h5 class="text-align-center mbr-fonts-style display-1 col-md-8 padding-top-30 font-size-25">
								如果我得標了請記得打電話給我唷～
						</h5>
					</div>

			</div>

	</div>
</div>
@endsection
