@extends('layouts.master')
@section('title', '會員管理') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
<div class="container">
    <div class="row">
	@include('layouts.adm_left_button')
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <form method="post" action="{{ route('adm_Search') }}" role="form" >
		    @csrf
			<table style="width:100%">
              <td><input name="keyword" id="keyword" type="text" class="form-control " placeholder="請輸入關鍵字"></td>
              <td style="width:10%"><button type="submit" class="btn-danger btn">搜尋</button></td>
			</table>
          </form>
          <table class="table table-striped margin-top-50">
            <thead>
              <tr>
                <th>會員名稱</th>
                <th>會員資料</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
			  @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td><a href="{{ route('adm_Account.show',$user->id) }}" class="btn btn-danger">檢視</a></td>
                <td>
				  <a href="#" class="btn btn-danger" onclick="document.getElementById('delete_{{$user->id}}').submit()">刪除</a>
				  <form method="post" action="{{ route('adm_Account.destroy',$user->id) }}" id="delete_{{$user->id}}">
					@csrf
					{{ method_field('DELETE') }}
				  </form>
				</td>
              </tr>
			  @endforeach                 
            </tbody>
          </table>
			{{ $users->links() }}
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
