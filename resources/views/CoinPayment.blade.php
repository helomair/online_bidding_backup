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
      <div class="col-lg-8 mx-auto">
        <div id="products" class="table-responsive margin-top-150">
            <h1>繳費帳單</h1>
          <form method="post" action="{{ route('coin.pay', $payment->id) }}" role="form" class="">
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
              <span>應付金額：</span>
              <span>{{ $payment->amount }}</span>
            </div>
            <div>
              <label>付款人名稱</label>
              <input id="user_name" name="user_name" type="text" class="form-control">
              @error('user_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div>
              <label>銀行名稱</label>
              <input id="user_bankname" name="user_bankname" type="text" class="form-control">
              @error('user_bankname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>付款人帳戶</label>
              <input type="text" id="user_account" name="user_account" class="form-control @error('user_account') is-invalid @enderror"></input>
              @error('user_account')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <input type="submit" value="提交" class="btn btn-danger padding-05-2 font-size-10">
            <input type="button" value="取消" onclick="window.location='/account'" class="btn btn-danger padding-05-2 font-size-10">
          </form>
        </div>
      </div>

    </div>

</div>
@endsection
