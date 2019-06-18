@extends('layouts.master')
@section('title', '首頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
		<div class="panel-group margin-top-100" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"
							 href="#collapseOne">
							 <div class="container">
								 <div class="row">
									<marquee>
										 <p style="font-family: Impact; font-size: 18pt">測試！測試！123!~~~ 測試！測試！123!~~~ 測試！測試！123!~~~</p>
									 </marquee>
								 </div>
						 </div>
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in text-align-center">
					<div class="panel-body">
						<div class="font-size-20">
							公告一
						</div>
						とろさば料理専門店SABAR（サバー）では、とろさばフルコースや鯖寿司など、<br>「とろさば」の美味しさを世界各国の伝統料理で堪能いただく「とろさば情報発信基地」です。
					</div><br>
					<div class="panel-body">
						<div class="font-size-20">
							公告二
						</div>
						とろさば料理専門店SABAR（サバー）では、とろさばフルコースや鯖寿司など、<br>「とろさば」の美味しさを世界各国の伝統料理で堪能いただく「とろさば情報発信基地」です。
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
													<img src="images/DSCF2069.jpg" alt="Mobirise" title="">
												</a>
										</div>
								</div>
						</div>


						<div class="container">
                                <div class="media-container-row margin-top-100">
                                    @foreach ($products as $product)
										<div class="card p-3 col-12 col-md-6 col-lg-4" style="border:1px solid white;">

												<a href="{{ route('user_interface.show', $product->id) }}">
													<div class="frame">
														<img class="shop_img" src="{{ route('img', $file_path[$product->id]) }}" alt="Mobirise" title="" >
													</div>
												</a>

										</div>
                                    @endforeach
                                    @for ($i = $products->count(); $i < 3; $i++)
                                        <div class="card p-3 col-12 col-md-6 col-lg-4" style="border:1px solid white;">
                                        </div>
                                    @endfor
                                </div>
                            <div class="text-center margin-top-100 col-lg-3 mx-auto">
		                        {{ $products->links() }}
		                     </div>
						</div>

		<!---下面是舊代碼---->

				<!--div class="container">
					<div class="row space-between">
					  <div class="card-img">
						<img src="images/macbook.jpg" class="margin-top-100 mx-auto col-lg-12 ">
					  </div>
		              @foreach($products as $product)
		              <div class="card-img margin-top-100 col-lg-3">
		                <img src="{{ route('img', $file_path[$product->id]) }}">
		              </div>
		              @endforeach
		              @for ($i = $products->count(); $i < 3; $i++)
		                <div class="card-img margin-top-100 col-lg-3">
		              @endfor
					</div>
		        </div>
				<div class="text-center margin-top-100 col-lg-3 mx-auto">
		            {{ $products->links() }}
		        </div>
		    </div-->

		</div>
@endsection
