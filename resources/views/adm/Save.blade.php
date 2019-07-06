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
<style>
.container.fix_content {
    width: 83%;  
    max-width: initial!important; 
    
}
.container.fix_content table {
    min-width: 1500px; 
}
.container.fix_content .table-responsive {
    overflow-x: auto; 
}
@media (max-width:720px) {

    .fix_content {
        width: 100%!important; 
    }
}
</style>
<div class="container fix_content" >
    <div class="row">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th style="text-align:center;">Tên hội viên</th> <!-- 會員名稱 -->
                <th style="text-align:center;">Thời gian nạp tiền</th> <!-- 加值時間 -->
                <th style="text-align:center;">Thời gian mua</th> <!-- 購買數量 -->
                <th style="text-align:center;">Số tiền thanh toán</th> <!-- 應付金額 -->
                <th style="text-align:center;">Chuyển vào tài khoản</th> <!-- 轉入帳戶 -->
                <th style="text-align:center;">Tên người chuyển khoản </th> <!-- 轉帳人名稱 -->
                <th style="text-align:center;">Tên ngân hàng</th> <!-- 銀行名稱 -->
                <th style="text-align:center;">Tài khoản chuyển tiền</th> <!-- 轉帳帳戶 -->
                <th style="text-align:center;">Mã mời</th> <!-- 邀請碼 -->
                <th style="text-align:center;">Trạng thái phát hành</th> <!-- 發放狀態 -->
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
                        <a href=" {{ route('coin.submit', $payment->id) }} " class="btn btn-danger">Đang xem xét</a> <!-- 審核中 -->
                    @else
                        <p class="finished">ban hành</p> <!-- 發放完畢 -->
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
