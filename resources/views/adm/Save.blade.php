@extends('layouts.master')
@section('title', '加值紀錄') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')
<div class="container fix_content">
    <div class="row">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th style="text-align:center;">會員名稱</th>
                <th style="text-align:center;">加值時間</th>
                <th style="text-align:center;">購買數量</th>
                <th style="text-align:center;">應付金額</th>
                <th style="text-align:center;">轉入帳戶</th>
                <th style="text-align:center;">轉帳人名稱</th>
                <th style="text-align:center;">銀行名稱</th>
                <th style="text-align:center;">轉帳帳戶</th>
                <th style="text-align:center;">邀請碼</th>
                <th style="text-align:center;">發放</th>
                </tr>
            </thead>
            <tbody>
			@foreach($payments as $payment)
                <tr>
                  <td style="text-align:center;">{{ $payment->users->name }}</td>
                  <td style="text-align:center;">{{ $payment->created_at }}</td>
                  <td style="text-align:center;">{{ $payment->coins }}</td>
                  <td style="text-align:center;">{{ $payment->amount }}</td>
                  <td style="text-align:center;">{{ $payment->bank_account->account }}</td>
                  <td style="text-align:center;">{{ $payment->user_name }}</td>
                  <td style="text-align:center;">{{ $payment->user_bankname }}</td>
                  <td style="text-align:center;">{{ $payment->user_account }}</td>
                  @if ($payment->first_code)
                    <td style="text-align:center;">yes</td>
                  @else 
                    <td style="text-align:center;">no</td>
                  @endif
                  <td style="text-align:center;">

                    @if ($payment->on)
                        <a href=" {{ route('coin.submit', $payment->id) }} " class="btn btn-danger">發放</a>
                    @else
                        <p class="finished">發放完畢</p>
                    @endif

                  </td>
                </tr>
			@endforeach
            </tbody>
          </table>
		  {{ $payments->links() }}
        </div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
