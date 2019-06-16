@extends('layouts.master')
@section('title', '登入帳戶') <!-- 單行記錄 -->

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
					<label for="email">帳號</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror form-control_login" id="email" name="email">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="password">密碼</label>
					<input type="password" class="form-control @error('password') is-invalid @enderror form-control_login" id="password" name="password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div id="login_control">
					<a id="register" href="{{ route('register') }}">註冊會員</a>
					<a id="forget_pwd">忘記密碼？</a>
					<input type="submit" id="btn_login" value="登入"/>
				</div>
			</form>
      <div class="or_line">
          <div class="line">
          </div>
          <div class="or">或
          </div>
          <div class="line">
          </div>
      </div>
      <input type="button" id="btn_login_fb" value="Facebook快速登入"/>
		</div>
	</div>
</div>

@endsection
