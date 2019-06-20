@extends('layouts.master')
@section('title', '公告管理') <!-- 單行記錄 -->
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
        <div id="news" class="table-responsive margin-top-50">
          <table id="news_table" class="table table-striped text-align-center">
            <thead>
              <tr>
                <th class="text-align-center">
                  <span style="position: relative; right:20px;">公告</span>
                  <a href="{{ route('adm_Bulletin.create') }}"><img src="{{ asset('images/add.png') }}" class="button" style="float:right; width:20px; height:20px;" /></a>
                </th>
              </tr>
            </thead>
            <tbody>
			  @foreach($bulletins as $bulletin)
              <tr>
                <td>
                  <span class="margin-bottom-04-rem">{{ $bulletin->title }}</span>
                    <img onclick="confirm('確定刪除？');  document.getElementById('delete_{{$bulletin->id}}').submit()" src="{{ asset('images/delete.png') }}" class="cursor-pointer" style="float:right; width:20px; height:20px;" />
                    <img onclick="window.location='{{ route('adm_Bulletin.edit',$bulletin->id) }}'" src="{{ asset('images/edit.png') }}" class="cursor-pointer margin-right-5" style="float:right; width:20px; height:20px;" />
                </td>
				<form method="post" action="{{ route('adm_Bulletin.destroy',$bulletin->id) }}" id="delete_{{$bulletin->id}}">
					@csrf
					{{ method_field('DELETE') }}
				</form>
              </tr>
			  @endforeach
            </tbody>
          </table>
			{{ $bulletins->links() }}
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection
