@extends('layouts.master')
@section('title', '首頁') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
<section class="mbr-section content4 cid-rsuhXIuUWX margin-top-100" id="content4-g">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    關於我們
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    Shape your future web project with sharp design and refine coded functions.
                </h3>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rsuhhUK2t2" id="content1-9">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8">
              <p>
                <strong>公司名稱：</strong>
                以思科技公司
                </p>
                <br>
                <p>
                <strong>公司代表：</strong>
                李祐誠
                </p>
                <br>
                <p>
                <strong>統一編號</strong>
                35325425435345
                </p>
                <br>
                <p>
                <strong>地址：</strong>
                以思科技公司
                </p>
                <br>
                <p>
                <strong>電話：</strong>
                0966666666
                </p>
              </div>
        </div>
    </div>
</section>
@endsection