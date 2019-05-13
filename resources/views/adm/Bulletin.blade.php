@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
	@include('layouts.adm_left_button')
	<div class="col-lg-10">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-align-center">
                  <span>公告</span>
                  <a href=""><img src="images/add.png" class="button" style="float:right; width:20px; height:20px;" /></a>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p class="margin-bottom-04-rem text-align-center">後天要期末考唷～</p>
                </td>
              </tr>

                <tr>
                  <td>
                    <p class="margin-bottom-04-rem text-align-center">明天要第二次期中考唷～</p>
                  </td>
                </tr>

                <tr>
                  <td>
                    <p class="margin-bottom-04-rem text-align-center">今天要期中考唷～</p>
                  </td>
                </tr>

            </tbody>
			<!--尚未有 bulletin 資料庫 
				foreach放置處
              <tbody>
                <tr>
                  <td>
				    <p class="margin-bottom-04-rem text-align-center"></p>
				  </td>
                </tr>
            </tbody>
			-->
          </table>
			<!--尚未有 bulletin 資料庫
			    link放置處
			-->
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection