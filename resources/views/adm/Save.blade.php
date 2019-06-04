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
<div class="container">
    <div class="row">
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th>會員名稱</th>
                <th>加值時間</th>
                <th>額度</th>
                <th>發放</th>
                </tr>
            </thead>
            <tbody>
			@foreach($payments as $payment)
                <tr>
                  <td>{{ $payment->users->name }}</td>
                  <td>{{ $payment->created_at }}</td>
                  <td>{{ $payment->amount }}</td>
                  <td>
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
