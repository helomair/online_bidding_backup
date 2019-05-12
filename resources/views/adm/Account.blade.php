@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
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
	<div class="col-lg-9">
        <div class="table-responsive margin-top-50">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th>圖片</th>
                  <th>名稱</th>
                  <th>狀態</th>
                  <th>公佈時間</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="{{ asset('images/product2.jpg') }}" class="img-thumbnail thumbnails" />
                  </td>
                  <td>Macbook</td>
                  <td><a href="" class="btn btn-danger">編輯</a></td>
                  <!--td>
                    <div class="btn-group display-flex flex-direction-col">
                      <a href="" class="btn btn-danger">修改</a>
                      <a href="" class="btn btn-danger">下架</a>
                      <a href="" class="btn btn-danger">删除</a>
                    </div>
                  </td-->
                  <td>
                    <div><p>公佈時間</p></div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ asset('images/product2.jpg') }}" class="img-thumbnail thumbnails" />
                  </td>
                  <td>Macbook</td>
                  <td><a href="" class="btn btn-danger">編輯</a></td>
                  <!--td>
                    <div class="btn-group display-flex flex-direction-col">
                      <a href="" class="btn btn-danger">修改</a>
                      <a href="" class="btn btn-danger">下架</a>
                      <a href="" class="btn btn-danger">删除</a>
                    </div>
                  </td-->
                  <td>
                    <div><p>公佈時間</p></div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ asset('images/product2.jpg') }}" class="img-thumbnail thumbnails" />
                  </td>
                  <td>Macbook</td>
                  <td><a href="" class="btn btn-danger">編輯</a></td>
                  <!--td>
                    <div class="btn-group display-flex flex-direction-col">
                      <a href="" class="btn btn-danger">修改</a>
                      <a href="" class="btn btn-danger">下架</a>
                      <a href="" class="btn btn-danger">删除</a>
                    </div>
                  </td-->
                  <td>
                    <div><p>公佈時間</p></div>
                  </td>
                </tr>                
            </tbody>
          </table>
        </div>

		<!-- /.card -->
		<!-- 分頁做法暫時留著，之後改用laravel的方式實做 -->
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
		
		
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection