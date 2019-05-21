@extends('layouts.master')
@section('title', '使用者主頁') <!-- 單行記錄 -->

@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<div class="container">
    <div class="row">
	<div class="col-lg-12">

        <div class="card margin-top-50">
            <h1>拍賣進行中的頁面</h1>
          <img class="card-img-top img-fluid" src="{{ asset('images/macbook.jpg') }}" alt="">
          <div class="card-body">
            <h3 class="card-title">Macbook Air</h3>
            <h4>NT$45000</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>

          </div>
        </div>
		<!-- /.card -->

		<div class="card text-center my-4">
			<div class="card-header">下標1</div>
			<div class="card-body">
				<h5 class="card-title">目前競標價：37500元</h5>
				<p class="card-text">目前最高出價者：You-Cheng Li</p>
				<a href="{{ route('bidding') }}" class="btn btn-primary">下標</a>
			</div>
		</div>

        <div class="card text-center my-4">
          <div class="card-header">
            出價紀錄1
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>MengRu-Lin</td>
                      <td>9000</td>
                      <td>19:01</td>
                    </tr>

                    <tr>
                      <td>Li You-Cheng</td>
                      <td>6000</td>
                      <td>18:41</td>
                    </tr>

                    <tr>
                      <td>Wang Han i</td>
                      <td>3000</td>
                      <td>18:03</td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="row my-4">
          <div class="col-sm-6">
            <div class="card text-center">
              <div class="card-header">
                下標2
              </div>
              <div class="card-body">
                <h5 class="card-title">目前競標價：37500元</h5>
                <p class="card-text">目前最高出價者：You-Cheng Li</p>
                <a href="#" class="btn btn-primary">下標</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card text-center">
              <div class="card-header">
                出價紀錄2
              </div>
              <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>MengRu-Lin</td>
                          <td>9000</td>
                          <td>19:01</td>
                        </tr>

                        <tr>
                          <td>Li You-Cheng</td>
                          <td>6000</td>
                          <td>18:41</td>
                        </tr>

                        <tr>
                          <td>Wang Han i</td>
                          <td>3000</td>
                          <td>18:03</td>
                        </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
		<!-- /.card -->
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection