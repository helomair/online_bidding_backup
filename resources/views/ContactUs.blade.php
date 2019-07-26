@extends('layouts.master')
@section('title', '') <!-- 單行記錄 -->
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
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    LIÊN HỆ VỚI CHÚNG TÔI
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">

                </h3>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li>Thời gian phục vụ : 08:00 – 17:00 ( Nghỉ ngày Chủ nhật )</li><br>
                    <li>Tên công ty：Bellwether Network Technology Co. Ltd.</li><br>
                    <li>Địa chỉ Công Ty：Số nhà 49, đường số 7, khu dân cư hiệp thành 3, thủ dầu một</li><br>
                    <li>Số điện thoại liên lạc：(+84) 976814178 (Zalo)</li><br>
                    <li>Hộp thư：ibid.ibidcompany@gmail.com</li><br>
                    <li>Nhắm nhanh chóng giải quết vấn đề của quý vị, vui lòng phải ghi vấn đề sau đây vào đơn khiếu nại, để tiện cho việc xác minh nhận dạng và vấn đề, chúng tôi trả lời bằng văn bản thông qua Email</li><br>
                    <li>Thời gian xử lý thường thì khoảng 2 – 3 ngày làm việc, nếu do số lượng vấn đề mà xử lý không kịp, kéo dài thời gian hồi đáp vui lòng thông cảm.</li>
                </ul>

                <h4>Nhắc nhở quý vị :</h4>
                <ol>
                    <li>Nếu quý vị chưa nhận được thư trả lời trong vòng 2 – 3 ngày làm việc, đề nghị quý vị gửi thư trực tiếp đến “ hộp thư công ty” của hộp thư chăm sóc khách hàng, chúng tôi sẽ hết lòng phục vụ quý vị.</li>
                    <li>Do nhiều hộp thư miễn phí đều không thể nhận được Email trả lời của trung tâm chăm sóc khách hàng, nhằm đảm bảo quyền lợi của quý vị, đề nghị quý điền vào hoặc sử dụng hộp thư đảm bảo nhận có thể nhận được Email.</li>
                </ol><br>
                <a href="{{route('fq')}}">Trước khi liên hệ với chúng tôi, vui lòng tham khảo vấn đề thường gặp của chúng tôi ( FAQ )</a>
            </div>
        </div>
    </div>
</section>
@endsection
