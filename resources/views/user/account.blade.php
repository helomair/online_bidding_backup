@extends('layouts.master')
@section('title', '已結標拍賣') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container">
    <div class="row">  
  <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">基本資料</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">競標操作</a>
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

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      <div class="row">
                                          <div class="col-sm-3 col-md-2 col-5">
                                              <label style="font-weight:bold;">剩餘代幣</label>
                                          </div>
                                          <div class="col-md-8 col-6">
                                              {{ $user->balance }}P
                                          </div>
                                          <div class="col-md-2 col-6">
                                              <a href="{{ route('coin') }}" class="btn btn-danger">儲值</a>
                                          </div>
                                      </div>
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
