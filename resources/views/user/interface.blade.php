@extends('layouts.master')
@section('title', $product->name ) <!-- 單行記錄 -->

@section('css')
	<!-- For auto reload per 15s-->
	@if($product->end_time >= $nowtime)
	<meta http-equiv="refresh" content="15">
	@endif
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">


	<!-- 給倒數計時器用的css -->
	<style type="text/css">
	.timer{
	   font-size: larger;
	   color:#C71585;
	}
	.andy{
		margin: 10px auto;
		background-color: whitesmoke;
		height: 88px;
		line-height: 88px;
		text-align: center;
		width: 480px;
		border: dotted 3px gainsboro;
		border-radius: 5px;
		box-shadow: 5px 5px 5px #888888;
	}
	.day{color: #6A5ACD}
	</style>
	<!-- ./給倒數計時器用的css -->
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container fix_content">
	<br>

	@if( $product->end_time >= $nowtime && $product->start_time <= $nowtime)
	<div align='center'><!--商品倒數計時-->
		hàng hóa đếm ngược thời gian：
		<div id="andy timer" class="andy timer"> </div>
    </div>
    @elseif($product->end_time < $nowtime)
    <div align="center">
        <h2>Đấu giá đã kết thúc</h2><!--拍賣已結束-->
    </div>
    @else
    <div align="center">
    	<h2>Thời gian bắt đầu：{{ $product->start_time }}</h2>
    </div>
	@endif

	@if (session()->has('msg'))
    <script>
        alert('{{ session()->get('msg') }}');
    </script>
	@endif

    <div class="row space-between" style="padding:0px 10px;">
			<div class="col-lg-6" style="padding-left:0px; padding-right:0px;">
        <div class="card margin-top-50" style="border:1px solid black;">

          <img class="card-img-top img-fluid" src="{{ url('img',$file_path) }}" alt="">
          <div class="card-body">
            <h3 class="card-title">Tên sản phẩm ： {{ $product->name }}</h3> <!--商品名-->
            <h4> <!-- 商品競標價 -->
                {{ ($product->end_time >= $nowtime) ? "Giá hiện tại" : "Mức tiền trúng thầu"}}：{{ $product->cur_cost }}Tệ
            </h4>
            @if ($product->start_time > $nowtime)
                <h4>Thời gian bắt đầu：{{ $product->start_time }}</h4> <!--開始時間-->
            @endif
            <h4>giá niêm yết：{{ $product->origin_price }}Tệ</h4><!--原價-->
            <h4>Mỗi giá đấu thầu：{{ $product->cost}}</h4><!--每標價-->
            <p class="card-text">{{ $product->detail }}</p><!--詳細-->

          </div>
        </div>
			</div>
		<!-- /.card -->
		<div class="card text-center  col-lg-5 margin-top-50 height-500 " style="padding-left:0px; padding-right:0px; border:1px solid black;">
			<div class="card-header" style="border-bottom:1px solid rgb(53, 57, 60); background:linear-gradient(to bottom, #52bffd 0%, #61bdf3 66%, #71d1ff 100%); color:white;">
				@if($product->end_time >= $nowtime)
					Thiết lập tự động cho giá 
				@else
					Danh sách chiết khấu <!--折扣詳細-->
				@endif
			</div>
			<div class="card-body height-100-px">
				<div class="row">
                    <div class="col-lg-12 mx-auto ">
                    	@if($product->end_time >= $nowtime)
                        <!-- 進行中拍賣 自動下標表單 -->
                        <form action="{{ route('bidding.auto', $product->id) }}" method="post">
                        	@csrf
                              <div class="form-group margin-top-35 margin-bottom-0">
								<label for="start_cost" style="float:left; line-height:30px; margin-right:10px;">Giá bắt đầu :</label>
                                <input style="width:70%;" type="text" class="form-control @error('start_cost') is-invalid @enderror" name="start_cost" value="{{ $auction_auto->start_cost }}">
                                @error('start_cost')
						          <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
						          </span>
                                @enderror
                              </div>

                              <div class="form-group margin-top-35 margin-bottom-0">
							    <label for="stop_cost" style="float:left; line-height:30px; margin-right:10px;">Giá đình chỉ:</label>
								<input style="width:70%;" type="text" class="form-control @error('stop_cost') is-invalid @enderror " name="stop_cost" value="{{ $auction_auto->end_cost }}">
								@error('stop_cost')
								  <span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								  </span>
								@enderror
                              </div>
                              <div class="form-group margin-top-35 margin-bottom-0">
								<label for="times" style="float:left; line-height:30px; margin-right:41.5px;">Số lần :</label>
								<input style="width:70%;" type="text" class="form-control @error('times') is-invalid @enderror " name="times" value="{{ $auction_auto->times}}">
								@error('times')
								  <span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								  </span>
								@enderror 
                              </div>
                              @if($product->start_time < $nowtime )
                              	<input type="submit" value="Đã giao dịch" class="btn btn-primary padding-05-2 my-4 font-size-10">
                              	@if($auction_auto->on)
                              		<a href="#" class="btn btn-delete padding-05-2 font-size-10" onclick="confirm('Ok hủy bỏ?'); document.getElementById('delete_auto').submit()">Hủy bỏ</a>
                              	@endif
                              @endif
                            </form>
                            <form method="post" action="{{ route('bidauto.cancel', $product->id) }}" id="delete_auto">
							  @csrf
							 {{ method_field('DELETE') }}
							</form>
                          @else
                            <table class="table table-striped" style="margin-top:70px;">
                            	<tbody>
                            		<tr style="background-color:white;">
                            			<td style="border-bottom:1px solid #696969; border-top:1px solid white;">giá niêm yết</td><!--原價-->
                            			<td style="border-bottom:1px solid #696969; border-top:1px solid white;">{{$product->origin_price}}</td>
                            		</tr>
                            		<tr>
                            			<td style="border-bottom:1px solid #696969;">Số lần ra giá</td><!--出價次數-->
                            			<td style="border-bottom:1px solid #696969;">{{$product->users()->where('uid',Auth::id())->count()}}</td>
                            		</tr>
                            		<tr  style="background-color:white;">
                            			<td style="border-bottom:1px solid #696969;">Mức tiền trúng thầu</td>
                            			<td style="border-bottom:1px solid #696969;">{{$product->cur_cost}}</td> <!--結標價-->
                            		</tr>
                            		<tr>
                            			<td style="border-bottom:1px solid #696969;">Chiết khấu</td>
                            			<td style="border-bottom:1px solid #696969;">{{$product->discount}}%</td><!--折扣-->
                            		</tr>
                            	</tbody>
                            </table>
                          @endif
                        </div>
					</div>
			</div>
		</div>

    <div class="card text-center margin-top-50 col-lg-6" style="padding-left:0px; padding-right:0px; border:1px solid black;">
          <div class="card-header" style="border-bottom:1px solid rgb(53, 57, 60); background:linear-gradient(to bottom, #52bffd 0%, #61bdf3 66%, #71d1ff 100%); color:white;">
            Hồ sơ cho giá 
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                    <tr>
                      <td>Người ra giá</td><!--出價者-->
                      <td>Số tiền</td><!--金額-->
                      <td>ngày tháng</td><!--日期-->
                    </tr>
					@if(!$auctions)
						<tr>
							<td colspan="3">Hiện chưa có người ra giá</td><!--無人出價-->
						</tr>
					@else
						@foreach($auctions as $auction)
							<tr>
							  <td>{{ $auction->nickname }}</td>
							  <td>{{ $auction->pivot->lasted_cost }}</td>
							  <td>{{ $auction->pivot->created_at }}</td>
							</tr>
						@endforeach
					@endif
                </tbody>
              </table>
				{{ $auctions->links() }}
            </div>
          </div>
      </div>


			<div class="card text-center  col-lg-5 height-250 margin-top-50" style="padding-left:0px; padding-right:0px; border:1px solid black;">
				<div class="card-header" style="border-bottom:1px solid rgb(53, 57, 60); background:linear-gradient(to bottom, #52bffd 0%, #61bdf3 66%, #71d1ff 100%); color:white;">Đăng ký đấu thầu</div><!--下標-->
                <div class="card-body">
                    <h5 class="card-title"><!--當前標價-->
                        {{ ($product->end_time >= $nowtime) ? "Giá hiện tại " : "Mức tiền trúng thầu"}}：{{ $product->cur_cost }}Tệ
                    </h5>
					<p class="card-text"><!--最高出價者 : 得標者-->
						{{ ($product->end_time >= $nowtime) ? "Người ra giá cao nhất hiện tại" : "Người được đấu thầu" }}：
						@if($top_auction->name == "")
							Hiện chưa có người ra giá <!--無人出價-->
						@else
							{{ ($product->end_time >= $nowtime) ? $top_auction->nickname : $top_auction->name }} 
						@endif
                    </p>
	                @if ( $product->end_time >= $nowtime && $product->start_time < $nowtime)
                        <a href="{{ route('bidding',$product->id) }}" class="btn btn-primary padding-05-2 font-size-10" onclick="return confirm('Xác định Đăng ký đấu thầu？')">Mức trúng thầu </a>
	                @elseif ($product->end_time < $nowtime)
	                	<!--已結標-->
	                    <div class="btn btn-primary padding-05-2  font-size-10">Đã đóng</div>
	                @endif
				</div>
			</div>

    </div>
</div>
<!-- 倒數計時器js -->
<script type="text/javascript">
	var nowdateformat = new Date();  //現在時間的date型態
	var localtimezone = nowdateformat.getTimezoneOffset();  //取得當地的偏差值
	var servertimezone = -420;  //越南區 gmt+7 -420
	//alert(timezone);
	var product = @json($product->toArray());
	var nowtimestamp = nowdateformat.getTime();    		//取得現在時間(毫秒)
	var nowdate = new Date(nowtimestamp + localtimezone*1000*60); //本地現在時間date型態 以GMT+0 為基準 (local)
	//alert(nowdate);
	//alert(nowtimestamp + " vs " + nowdate);
	//alert(nowdate +" vs "+ zonenow);
	var endtime = product.end_time;
	var endtimestamp = new Date(endtime).getTime();	    //取得結束時間(毫秒)
	//alert(endtimestamp);
	var enddate = new Date(endtimestamp + servertimezone*1000*60); //系統結束時間date型態 以GMT+0 為基準 (sever)
	//alert(enddate);
	//alert(endtimestamp +" vs "+ nowtimestamp );
	//alert(enddate + " vs " + nowdate);
	var end_year = endtime.substr(0,4);
	var end_month = endtime.substr(5,2);
	var end_day = endtime.substr(8,2);
	var end_hour = endtime.substr(11,2);
	var end_minutes = endtime.substr(14,2);
	var end_second = endtime.substr(17,2);
	//alert(end_year+end_month+end_day+end_hour+end_minutes+end_second);
	var interval=1000;
	function ShowTimer(endYear,endMonth,endDay,endHour,endMinute,endSecond,divId) {
		var servertimezone = -420;  //越南區 gmt+7 -420
		var now=new Date();
		var localtimezone = now.getTimezoneOffset();  //本地電腦系統時間的gmt差值
		console.log("now="+now);
		var endDate=new Date(endYear,endMonth-1,endDay,endHour,endMinute,endSecond);
		console.log("endDate="+endDate);
		//getTime()获取的值/1000=秒数
		var leftTime=(endDate.getTime() + servertimezone*1000*60) - (now.getTime() + localtimezone*1000*60) ;//結束基準時間-現在基準時間
		console.log("leftTime="+leftTime);
		var leftSecond=parseInt(leftTime/1000);
		console.log("leftSecond="+leftSecond);
		var day=Math.floor(leftSecond/(60*60*24));
		console.log("day="+day);
		var hour=Math.floor((leftSecond-day*24*60*60)/3600);
		console.log("hour="+hour);
		var minute=Math.floor((leftSecond - day * 24 * 60 * 60 - hour * 3600) / 60);
		console.log("hour="+hour);
		var second = Math.floor(leftSecond - day * 24 * 60 * 60 - hour * 3600 - minute * 60);
		console.log("second="+second);
		var htmlElement=document.getElementById(divId);
		htmlElement.innerHTML = "<span class='day'><b class='timer'>" + day + "</b>ngày<b class='timer'>" + hour + "</b>giờ<b class='timer'>" + minute + "</b>phút<b class='timer'>" + second + "</b>giây</span>";
	}

	if(enddate >= nowdate) {
	window.setInterval(function () { ShowTimer(end_year, end_month, end_day, end_hour, end_minutes, end_second, 'andy timer'); }, interval);
	}
</script>
<!--
./倒數計時器js
---------------------
作者：小巷下起了雨
来源：CSDN
原文：https://blog.csdn.net/qq_28057577/article/details/75101111
版权声明：本文为博主原创文章，转载请附上博文链接！
-->
@endsection
