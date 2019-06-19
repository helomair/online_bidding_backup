@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container fix_content">

    <div class="row">
      <div class="col-lg-12">
        <div id="products" class="table-responsive margin-top-50">
            <h1>繳費帳單</h1>
          <form method="post" action="{{ route('coin.pay', $payment->id) }}" role="form" class="width-75-percent padding-left-50">
		    @csrf
            <div class="form-group">
              <span>銀行名稱：</span>
              <span>{{ $bank_account->bank_name }}</span>
            </div>
            <div class="form-group">
              <span>帳戶人名稱：</span>
              <span>{{ $bank_account->holder_name }}</span>
            </div>
            <div class="form-group">
              <span>官方帳戶：</span>
              <span>{{ $bank_account->account }}</span>
            </div>
            <div class="form-group">
              <span>購買數量：</span>
              <span>{{ $payment->coins }}</span>
            </div>
            <div class="form-group">
              <span>應付金額</span>
              <span>{{ $payment->amount }}</span>
            </div>
            <div class="form-group">
              <label>轉帳帳戶</label>
              <textarea id="message" name="user_account" style="width:100%; height: 100px;"></textarea>
            </div>
            <input type="submit" value="提交" class="form-control my-4" style="width:15%; float:right;">
          </form>
        </div>
      </div>

    </div>

</div>
@endsection
