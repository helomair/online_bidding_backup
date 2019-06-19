@extends('layouts.master')
@section('title', '首頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
		<div class="container margin-top-100">
			<div class="row font-size-40">
                  <marquee>
                    @foreach ($bulletins as $bulletin)
                        <span style="margin-right: 100px; cursor:pointer;" data-toggle="modal" data-target="#myModal{{$bulletin->id}}">{{ $bulletin->title }}</span>
                    @endforeach
										 <!--p style="font-family: Impact; font-size: 18pt">測試！測試！123!~~~ 測試！測試！123!~~~ 測試！測試！123!~~~</p-->
			    </marquee>
            </div>
        <div/>
        
        @foreach ($bulletins as $bulletin)
            <div class="modal fade" id="myModal{{$bulletin->id}}" role="dialog">
                <div class="modal-dialog">
    
                <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button></br>
                      <h4 class="modal-title">{{$bulletin->title}}</h4>
                    </div>
                    <div class="modal-body">
                      <p>{{$bulletin->content}}</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>
          @endforeach
        
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
