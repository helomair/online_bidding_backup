@extends('layouts.master')
@section('title', '註冊會員') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="container fix_content margin-top-150">
	<div class="row">
		<div class="col-md-6 mx-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf
			<div class="form-group">
			  <label for="email">Email</label>
			  <input type="text" class="form-control @error('email') is-invalid @enderror form-control-register" id="email" name="email">
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="name">使用者名稱</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror form-control-register" id="name" name="name">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="realname">姓名</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror form-control-register" id="realname" name="realname">
				@error('realname')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="password">密碼</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror form-control-register" id="password" name="password">
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
            </div>

			<div class="form-group">
				<label for="pasword-confirm">確認密碼</label>
				<input id="pasword-confirm" type="password" class="form-control form-control-register" name="password_confirmation">
			</div>

			<div class="form-group">
				<label for="phone">手機號碼</label>
				<input type="text" class="form-control @error('phone') is-invalid @enderror form-control-register" id="phone" name="phone">
                @error('phone')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
                @enderror
            </div>

<!--			<div class="form-group">
				<label for="code">推薦碼</label>
				<input type="text" class="form-control @error('code') is-invalid @enderror form-control-register" id="code" name="code">
            </div>
-->

				<div class="row col-lg-8 col-md-8 mx-auto margin-top-50" style="justify-content:center;">
					<button type="submit" class="btn btn-danger padding-05-2 font-size-10 ">註冊</button>
				</div>


		</form>
		</div>
	</div>
</div>
@endsection
