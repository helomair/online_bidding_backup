@extends('layouts.master')
@section('title', 'Trạng thái tài khoản') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')

@if (session()->has('msg'))
    <script>
        alert('{{ session()->get('msg') }}');
    </script>
@endif
<div class="container fix_content">
    <div class="row">
  <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card margin-top-100" style="height:auto;">
                  <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{ $user->name }}</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="false" onclick="getTab(this.id);">Dữ liệu cơ bản</a> <!-- 基本資料 -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="true" onclick="getTab(this.id);">Thao tác đấu thầu</a> <!-- 競標操作 -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="getBind-tab" data-toggle="tab" href="#getBind" role="tab" aria-controls="getBind" aria-selected="false" onclick="getTab(this.id);">Khu đã được thầu</a> <!-- 得標區 -->
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Họ tên </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Số điện thoại</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->phone }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Mã đề cử</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->code }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->email }}
                                                @if ($user->email_confirm == '0')
                                                    <a id="email_confirm" href="{{ route('send_mail') }}" class="btn btn-delete padding-05-2 font-size-10">Chưa được xác minh</a> <!-- 尚未驗證-->
                                                @else 
											                           <span style='color:green;'>Đã được xác minh</span> <!-- 驗證通過-->
                                                @endif
										                        </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      <div class="row">
                                          <div class="col-md-8 col-5 custom-margin-right-20">
                                              <label style="font-weight:bold; line-height:45px; white-space:nowrap;">Số dư thay thế bằng tiền: {{ $user->balance }}P</label> <!-- 剩餘代幣 -->
                                          </div>
                                          <div class="col-md-4 col-6 text-align-center">
                                              <a href="{{ route('coin') }}" class="btn btn-danger font-size-12" style="">Nạp tiền</a> <!-- 儲值 -->
                                          </div>
                                      </div>
                                      <hr />

                                      <p class="font-size-25 font-weight-500 margin-top-50 text-align-center">Hồ sơ cho giá</p>
                                        <table class="table">
                                        <thead>
                                          <tr>
                                            <th style="min-width:100px;">Tên sản phẩm</th>
                                            <th>Thời gian</th> <!-- 時間 -->
                                            <th>Số tiền</th> <!-- 額度 -->
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($auctions as $auction)
                                            <tr>
                                              <td>{{ $auction->name }}</td>
                                              <td>{{ $auction->pivot->created_at }}</td>
                                              <td>{{ $auction->pivot->lasted_cost }}</td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="tab-pane fade" id="getBind" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      <table class="table">
                                        <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col" style="min-width:100px;">Tên sản phẩm </th>
                                            <th scope="col">Mức tiền trúng thầu</th>
                                            <th scope="col">Phí vận chuyển</th> <!-- 運費 -->
                                            <th scope="col">Thao tác</th> <!-- 操作 -->
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($winners as $winner)
                                            <tr>
                                              <td>{{ $winner->name }}</td>
                                              <td>{{ $winner->cur_cost }}</td>
                                              <td>10</td> 
                                              <td>
                                                <a href="{{ route('winner.create', $winner->id) }}" class="btn btn-danger padding-05-16 font-size-12" style="white-space:nowrap;">Ghi dữ liệu</a> <!-- 資料填寫 -->
                                                <a href="{{ route('user_interface.show', $winner->id) }}" class="btn btn-danger padding-05-16 font-size-12">Xem duyệt</a> <!-- 檢視 -->
                                                @if ($winner->status == '0')
                                                  <span class="padding-05-16" style="color: #d02b2b;">Chưa xuất hàng</span> <!-- 未出貨 -->
                                                @else
                                                  <span class="finished padding-05-16">Đã xuất hàng</span> <!-- 已出貨-->

                                                @endif
                                              </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                      <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection 

@section('script')
<script>

$('#email_confirm').click(function (){
    $('#confirm_form').show(); 
}); 



//alert(document.referrer);
//判定按下哪個tab, 記錄到cookie裡面
function getTab(this_id){
	//alert(this_id);
	if(this_id == "basicInfo-tab"){
		document.cookie="tab=basicInfo";
	}else if(this_id == "connectedServices-tab"){
		document.cookie="tab=connectedServices";
	}else if(this_id == "getBind-tab"){
		document.cookie="tab=getBind";
	}
}
//取得cookie的方式
function getCookie(cname)
{
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++)
  {
    var c = ca[i].trim();
    if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
  return "";
}

var ca = getCookie("tab");  //取得cookie
if(ca == "connectedServices"){ //如果按的是 競標操作
	document.getElementById("basicInfo").className = "tab-pane fade";
	document.getElementById("connectedServices").className = "tab-pane fade show active";
	document.getElementById("getBind").className = "tab-pane fade";
}else if(ca == "getBind"){ //如果按的是 得標區
	document.getElementById("basicInfo").className = "tab-pane fade";
	document.getElementById("connectedServices").className = "tab-pane fade";
	document.getElementById("getBind").className = "tab-pane fade show active";
}else{
	document.getElementById("basicInfo").className = "tab-pane fade show active";
	document.getElementById("connectedServices").className = "tab-pane fade";
	document.getElementById("getBind").className = "tab-pane fade";
}
//alert(ca); //將cookie印出來

//如果上一頁為儲值頁面，返回時需要跳回競標操作的標籤
/*因為會記錄原本你所在標籤的cookie，這個部分暫時先拿掉
lasturl = document.referrer;
lastpara = lasturl.split("/");
var i = 2;   					//因為用'/'切割，http:// 被切成[0]=http: [1]='' 所以直接從2開始
var find = 0;					//有沒有找到coin的變數
while(lastpara[i]){  			//如果不存在，就結束
	if(lastpara[i] == "coin"){
		find = 1;
		break;
	}
	i++;
}
//alert(find);
//alert(lasturl.substr(-4));
if(find == 1){
	document.getElementById("basicInfo").className = "tab-pane fade";
	document.getElementById("connectedServices").className = "tab-pane fade show active";
}
*/
</script>
@endsection
