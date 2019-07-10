@extends('layouts.master')
@section('title', 'Thông tin hội viên') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')

@if(session()->has('msg'))
  <script>alert("{{session()->get('msg')}}")</script>
@endif
<div class="container fix_content">
    <div class="row">
	<div class="col-lg-10 mx-auto">
        <div id="products" class="table-responsive margin-top-50">
          <h1>Thông tin hội viên</h1> <!-- 會員資料 -->
          <form role="form" class="my-4" action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            <div class="form-group">
               <label>Tên hội viên</label> <!-- 使用者名稱-->
               <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}" >
            </div>
            <div class="form-group">
               <label>Họ tên</label> <!-- 真實姓名 -->
               <input id="realname" name="realname" type="text" class="form-control" value="{{$user->realname}}" >
            </div>
    			  <div class="form-group">
    			     <label>Email</label> <!-- email-->
        		   <input id="email" type="text" class="form-control" value="{{$user->email}}" disabled>
        		</div>
            <div class="form-group">
    			    <label>Số điện thoại</label> <!-- 手機 -->
        		  <input type="text" name="phone" class="form-control" value="{{$user->phone}}" >
        		</div>
            <div class="form-group">
              <label>Mã mời</label> <!-- 推薦碼-->
              <input type="text" class="form-control" value="{{$user->code}}" disabled>
            </div>
            <div class="form-group">
              <label>cái đồng xu</label> <!-- 代幣 -->
              <input type="text" class="form-control" value="{{$user->balance}}" disabled>
            </div>
            <div align="center">
              <input type="submit" value="Cập nhật" class="btn-primary btn-sm margin-right-5">
              <button type="button" onclick="window.location='{{ route('adm_Account') }}'" class="btn-primary btn-sm">Trở về</button> <!-- 返回 -->
            </div>
          </form>
		</div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
