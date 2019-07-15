@extends('layouts.master')
@section('title', 'Đăng nhập') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid margin-top-150 fix_content">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror form-control_login" id="email" name="email">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu </label>
					<input type="password" class="form-control @error('password') is-invalid @enderror form-control_login" id="password" name="password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div id="login_control">
					<a id="register" href="{{ route('register') }}">Tham gia hội viên miễn phí</a>
					<a id="forget_pwd" href="{{ route('password.request')}}">Quên mật khẩu </a>
					<input type="submit" id="btn_login" class="btn btn-danger padding-05-2 font-size-10 " value="Đăng nhập"/>
				</div>
			</form>
      <div class="or_line">
          <div class="line">
          </div>
      </div>
      <!-- onclick="alert('Tính năng chưa hoàn thành')" -->
      <a href="{{ route('fb.redirect', 'facebook') }}" class="btn btn-danger padding-05-2 font-size-10" id="btn_login_fb">Đăng nhập bằng tài khoản Facebook</a>
	  </div>
	</div>
</div>

@endsection
