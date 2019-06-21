@extends('layouts.master')
@section('title', '帳戶狀態') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container fix_content">
    <div class="row">
  <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card margin-top-100" style="height:700px;">
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
                                        <a class="nav-link" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="false">基本資料</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="true">競標操作</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="getBind-tab" data-toggle="tab" href="#getBind" role="tab" aria-controls="getBind" aria-selected="false">得標區</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">姓名</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">電話</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->phone }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">推荐碼</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->code }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">信箱</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $user->email }}
																						<span style='color:red;'>尚未驗證</span>
																						<!--<span style='color:green;'>驗證通過</span>-->
										                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      <div class="row">
                                          <div class="col-md-10 col-5 custom-margin-right-20">
                                              <label style="font-weight:bold; line-height:45px; white-space:nowrap;">剩餘代幣: {{ $user->balance }}P</label>
                                          </div>
                                          <div class="col-md-2 col-6 text-align-center">
                                              <a href="{{ route('coin') }}" class="btn btn-danger padding-05-16 font-size-12">儲值</a>
                                          </div>
                                      </div>
                                      <hr />

                                      <p class="font-size-25 font-weight-500 margin-top-50 text-align-center">出價紀錄</p>
                                      <table class="table">
                                        <table class="table">
                                        <thead>
                                          <tr>
                                            <th style="min-width:100px;">商品</th>
                                            <th>時間</th>
                                            <th>額度</th>
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
                                      {{ $auctions->links() }}
                                    </div>
                                    <div class="tab-pane fade" id="getBind" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      <table class="table">
                                        <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col" style="min-width:100px;">商品</th>
                                            <th scope="col">金額</th>
                                            <th scope="col">操作</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($winners as $winner)
                                            <tr>
                                              <td>{{ $winner->name }}</td>
                                              <td>{{ $winner->cur_cost }}</td>
                                              <td>
                                                <a href="{{ route('winner.create', $winner->id) }}" class="btn btn-danger padding-05-16 font-size-12">資料填寫</a>
                                                <a href="{{ route('user_interface.show', $winner->id) }}" class="btn btn-danger padding-05-16 font-size-12">檢視</a>
                                                @if ($winner->status == '0')


                                                  <span class="finished padding-05-16">未出貨</span>
                                                @else
                                                  <span class="finished padding-05-16">已出貨</span>

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
<script>
//alert(document.referrer);
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
</script>
@endsection
