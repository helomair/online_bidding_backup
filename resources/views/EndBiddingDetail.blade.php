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
      <div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
            <h1>結標時的頁面</h1>
          <form method="post" action="#" role="form" class="width-75-percent padding-left-50">
		    @csrf
            <div class="form-group">
              <label>姓名</label>
              <input id="name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>電話</label>
              <input id="phone" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>留言</label>
              <textarea id="message" style="width:100%; height: 100px;"></textarea>
            </div>
            <button type="submit">submit</button>
          </form>
        </div>
      </div>

    </div>

</div>
@endsection
