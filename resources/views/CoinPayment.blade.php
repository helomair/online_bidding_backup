@extends('layouts.master')
@section('title', 'Hóa đơn thanh toán') <!-- 單行記錄 -->
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
            <h1>Hóa đơn thanh toán</h1> <!-- 繳費帳單 -->
          <form method="post" action="{{ route('coin.pay', $payment->id) }}" role="form" class="">
		    @csrf
            <div class="form-group">
              <span>Tên ngân hàng：</span> <!-- 銀行名稱 -->
              <span>{{ $bank_account->bank_name }}</span>
            </div>
            <div class="form-group">
              <span>Tên chủ tài khoản：</span> <!-- 帳戶人名稱-->
              <span>{{ $bank_account->holder_name }}</span>
            </div>
            <div class="form-group">
              <span>Chuyển vào tài khoả：</span> <!-- 官方帳戶-->
              <span>{{ $bank_account->account }}</span>
            </div>
            <div class="form-group">
              <span>Mua số lượng xu：</span> <!-- 購買數量 -->
              <span>{{ $payment->coins }}</span>
            </div>
            <div class="form-group">
              <span>Số tiền thanh toán：</span> <!-- 應付金額 -->
              <span>{{ $payment->amount }}</span>
            </div>
            <div>
              <label>Tên người chuyển khoản</label> <!-- 轉帳人名稱 -->
              <input id="user_name" name="user_name" type="text" class="form-control">
              @error('user_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div>
              <label>Tên ngân hàng</label>
              <input id="user_bankname" name="user_bankname" type="text" class="form-control">
              @error('user_bankname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Tài khoản chuyển tiền</label>
              <input type="text" id="user_account" name="user_account" class="form-control @error('user_account') is-invalid @enderror"></input>
              @error('user_account')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <input type="submit" value="Đã giao dịch" class="btn btn-danger padding-05-2 font-size-10"> <!-- 提交 -->
            <a href="#" class="btn btn-delete padding-05-2 font-size-10" onclick="confirm('Ok hủy bỏ?'); document.getElementById('delete_{{$payment->id}}').submit()">Hủy bỏ</a> <!-- 取消 -->
          </form>
		  <form method="post" action="{{ route('coin.cancel', $payment->id) }}" id="delete_{{$payment->id}}">
		    @csrf
		    {{ method_field('DELETE') }}
		  </form>

        </div>
      </div>

    </div>

</div>
@endsection
