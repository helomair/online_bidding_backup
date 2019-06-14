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
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th style="text-align:center;">會員名稱</th>
                <th style="text-align:center;">加值時間</th>
                <th style="text-align:center;">額度</th>
                <th style="text-align:center;">發放</th>
                </tr>
            </thead>
            <tbody>
			@foreach($payments as $payment)
                <tr>
                  <td style="text-align:center;">{{ $payment->users->name }}</td>
                  <td style="text-align:center;">{{ $payment->created_at }}</td>
                  <td style="text-align:center;">{{ $payment->amount }}</td>
                  <td style="text-align:center;">
                    <a href="" class="btn btn-danger">發放</a>
                    <p class="finished">發放完畢</p>
                  </td>
                </tr>
			@endforeach
            </tbody>
          </table>
		  {{ $payments->links() }}
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
