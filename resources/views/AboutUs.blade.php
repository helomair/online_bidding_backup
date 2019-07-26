@extends('layouts.master')
@section('title', 'Liên quan đến chúng tôi') <!-- 單行記錄 -->
@section('css')
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')
<section class="mbr-section content4 cid-rsuhXIuUWX margin-top-100" id="content4-g">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"> <!-- 關於我們 -->
                    Liên quan đến chúng tôi
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                  
                </h3>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rsuhhUK2t2" id="content1-9">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text mbr-fonts-style" style="margin-left: 30px">
              <p>
                <strong style="font-size:20px; margin-right: 105px">Tên công ty：</strong> <!-- 公司名稱 -->
                Bellwether Network Technology Co. Ltd.
              </p>
              <br>
              <p>
                <strong style="font-size:20px; margin-right: 105px">Địa chỉ Công Ty：</strong> <!-- 公司地址 -->
                Số nhà 49, đường số 7, khu dân cư hiệp thành 3, thủ dầu một
              </p>
              <br>
              <p>
                <strong style="font-size:20px; margin-right: 15px">Số điện thoại liên lạc：</strong> <!-- 聯絡電話 -->
                (+84) 976814178 (Zalo)
              </p>
              <br>
              <p>
                <strong style="font-size:20px; margin-right: 140px">Hộp thư：</strong> <!-- 聯絡信箱 -->
                ibid.ibidcompany@gmail.com
              </p>
            </div>
        </div>
    </div>
</section>
@endsection
