@extends('layouts.master')
@section('title', '會員管理') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection
@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.adm_left_button')
<div class="container fix_content">
    @if($errors->any())
        <script>alert("{{ $errors->first() }}")</script>
    @endif
    <div class="row">
	<div class="col-lg-12">
        <div class="table-responsive margin-top-50">
          <form method="post" action="{{ route('adm_Search') }}" role="form" >
		    @csrf
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" placeholder="請輸入關鍵字">
					<input type="submit" class="btn btn-danger padding-05-2 font-size-10 margin-top-0 margin-bottom-0" value="搜尋"></a>
				</div>
          </form>
          <table class="table table-striped margin-top-50">
            <thead>
              <tr>
                <th style="text-align:center;">會員名稱</th>
                <th style="text-align:center;">會員資料</th>
                <th style="text-align:center;">操作</th>
              </tr>
            </thead>
            <tbody>
			  @foreach($users as $user)
              <tr>
                <td style="text-align:center;"><a href="{{ route('adm_Account.info',$user->id)}}">{{ $user->name }}</a></td>
                <td style="text-align:center;"><a href="{{ route('adm_Account.show',$user->id) }}" class="btn btn-danger padding-05-2 font-size-10">檢視</a></td>
                <td style="text-align:center;">
				  <a href="#" class="btn btn-delete padding-05-2 font-size-10" onclick="document.getElementById('delete_{{$user->id}}').submit()">刪除</a>
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
