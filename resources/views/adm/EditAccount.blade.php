@extends('layouts.master')
@section('title', '會員檢視') <!-- 單行記錄 -->
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
          <h1>檢視會員資料的頁面</h1>
          <form role="form" class="my-4" action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            <div class="form-group">
               <label>使用者名稱</label>
               <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}" >
            </div>
            <div class="form-group">
               <label>真實姓名</label>
               <input id="realname" name="realname" type="text" class="form-control" value="{{$user->realname}}" >
            </div>
    			  <div class="form-group">
    			     <label>Email (登入帳號)</label>
        		   <input id="email" type="text" class="form-control" value="{{$user->email}}" disabled>
        		</div>
            <div class="form-group">
    			    <label>手機</label>
        		  <input type="text" name="phone" class="form-control" value="{{$user->phone}}" >
        		</div>
            <div class="form-group">
              <label>推薦碼</label>
              <input type="text" class="form-control" value="{{$user->code}}" disabled>
            </div>
            <div class="form-group">
              <label>代幣量</label>
              <input type="text" class="form-control" value="{{$user->balance}}" disabled>
            </div>
            <div align="center">
              <input type="submit" value="更新" class="btn-primary btn-sm margin-right-5">
              <button type="button" onclick="window.location='{{ route('adm_Account') }}'" class="btn-primary btn-sm">返回</button>
            </div>
          </form>
		</div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
