@extends('layouts.master')
@section('title', '管理者主頁') <!-- 單行記錄 -->
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
	<div class="col-lg-10 mx-auto">
        <div id="products" class="table-responsive margin-top-50">
          <h2>修改商品</h2>
          <form  method="post" action="{{ route('adm_Product.update',$product->id) }}" role="form" class="" enctype="multipart/form-data">
			@csrf
			{{ method_field('PATCH') }}
			<div class="form-group">
              <label>名稱</label>
              <input name="name" id="name" type="text" class="form-control" value="{{ $product->name }}">
            </div>
            <div class="form-group">
              <label>原價</label>
              <input name="cost" id="cost" id="text" type="text" class="form-control"value="{{ $product->cost }}">
			 </div>
            <div class="form-group">
              <label>起標價</label>
              <input name="cur_cost" id="cur_cost" id="text" type="text" class="form-control"value="{{ $product->cur_cost }}">
            </div>
			<div class="form-group">
			  <label>公布時間</label>
              <input name="view_time" id="view_time" type="date" class="form-control" value="{{ $product->view_time->format('Y-m-d') }}">
    		</div>
			<div class="form-group">
			  <label>開始時間</label>
    		  <input name="start_time" id="start_time" type="date" class="form-control" value="{{ $product->start_time->format('Y-m-d') }}">
    		</div>
			<div class="form-group">
			  <label>結束時間</label>
			  <input name="end_time" id="end_time" type="date" class="form-control" value="{{ $product->end_time->format('Y-m-d') }}">
			</div>
			<div class="form-group">
			  <label>簡介</label><br>
			  <textarea name="detail" id="detail"  style="width:100%; height: 150px;">{{ $product->detail }}</textarea>
    		</div>
			<div class="form-group">
			  @if($file_path=='')
			  <label>圖片</label><br>
			  <input type="file" class="form-group" name="pics[]" id="pics" multipart>
			  @else
			  <div id="showgraph" >
			    <label>圖片</label><br>
                <img src="{{ url('img',$file_path) }}" width="200px" />
			    <button type="button" onclick="hide_graph();">刪除</button>
			  </div>
			  <div id="editgraph" style="display:none;" >
			    <label>圖片 (沒上傳新的，還是以舊的為主)</label><br>
			    <input type="file" class="form-group" name="pics[]" id="pics" multipart>
			  </div>
			  @endif
    		</div>
			<button type="submit" class="btn-primary btn-sm">修改</button>
			<button type="button"  onclick="window.location='{{ route('adm_Product') }}'" class="btn-primary btn-sm">取消</button>
			</form>
        </div>
	</div>
	<!-- /.col-lg-9 -->
    </div>
</div>
@endsection

<script>
	function hide_graph() {
		document.getElementById('showgraph').style.display='none';
		document.getElementById('editgraph').style.display='';
	}
</script>
