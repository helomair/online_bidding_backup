@extends('layouts.master')
@section('title', '使用者主頁') <!-- 單行記錄 -->

@section('css')
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
		width: 240px;
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
	<div align='center'>
		商品倒數計時：
		<div id="andy timer" class="andy timer">
		</div>
	</div>
    <div class="row space-between" style="padding:0px 10px;">
			<div class="col-lg-6" style="padding-left:0px; padding-right:0px;">
        <div class="card margin-top-50">

          <img class="card-img-top img-fluid" src="{{ url('img',$file_path) }}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <h4>{{ $product->cost }}元</h4>
            <p class="card-text">{{ $product->detail }}</p>

          </div>
        </div>
			</div>
		<!-- /.card -->

    <div class="card text-center margin-top-50 col-lg-5" style="padding-left:0px; padding-right:0px;">
          <div class="card-header">
            出價紀錄1
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                    <tr>
                      <td>出價者</td>
                      <td>金額</td>
                      <td>日期</td>
                    </tr>
					@if(!$auctions)
						<tr>
							<td colspan="3">無人出價</td>
						</tr>
					@else
						@foreach($auctions as $auction)
							<tr>
							  <td>{{ $auction->name }}</td>
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


			<div class="card text-center  col-lg-6 height-250 my-4" style="padding-left:0px; padding-right:0px;">
				<div class="card-header">下標1</div>
				<div class="card-body">
					<h5 class="card-title">目前競標價：{{ $product->cur_cost }}P</h5>
					<p class="card-text">
						目前最高出價者：
						@if($top_auction->name == "")
							無人出價
						@else
							{{ $top_auction->name }}
						@endif
	                </p>
	                @if( $product->end_time >= $nowtime)
	                    <a href="{{ route('bidding',$product->id) }}" class="btn btn-primary">下標</a>
	                @else
	                    <div class="btn btn-primary">已結標</div>
	                @endif
				</div>
			</div>

    </div>
</div>
<!-- 倒數計時器js -->
<script type="text/javascript">
	var product = @json($product->toArray());
	var endtime = product.end_time;
	var end_year = endtime.substr(0,4);
	var end_month = endtime.substr(5,2);
	var end_day = endtime.substr(8,2);
	var end_hour = endtime.substr(11,2);
	var end_minutes = endtime.substr(14,2);
	var end_second = endtime.substr(17,2);
	//alert(end_year+end_month+end_day+end_hour+end_minutes+end_second);
	//alert(endtime);
	var interval=1000;
	function ShowTimer(endYear,endMonth,endDay,endHour,endMinute,endSecond,divId) {
		var now=new Date();
		console.log("now="+now);
		var endDate=new Date(endYear,endMonth-1,endDay,endHour,endMinute,endSecond);
		console.log("endDate="+endDate);
		//getTime()获取的值/1000=秒数
		var leftTime=endDate.getTime() - now.getTime();
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
		htmlElement.innerHTML =
		"<span class='day'><b class='timer'>" + day + "</b>天<b class='timer'>" + hour + "</b>时<b class='timer'>" + minute + "</b>分<b class='timer'>" + second + "</b>秒</span>";
	}
	window.setInterval(function () { ShowTimer(end_year, end_month, end_day, end_hour, end_minutes, end_second, 'andy timer'); }, interval);
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
