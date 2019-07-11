@extends('layouts.master')
@section('title', 'Trước khi đấu giá phải đọc') <!-- 單行記錄 -->
@section('css') 
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')		  <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style">
               <ol>
                  <li>
                    <strong>Miễn phí tham gia hội viên</strong><br><br>
                    -Click vào “ miễn phí tham gia hội viên” trên<br>
                    -Sau khi nhập các thông tin cơ bản, nhấn “ xác nhận”<br>
                    -Xác nhận nội dung đã nhập <br>
                    -Hoàn thành bước đăng ký hội viên<br>
                    -Sau khi nhập địa chỉ Email, ấn “gửi đi”<br>
                    -Sau khi nhận được thư thông báo xác nhận, click vào đường link liên kết URL để xác nhận 
                    <br><br>
                  </li>

                  <li>
                    <strong>Mua điểm</strong><br><br>
                    -Click vào mua điểm <br>
                    -Xác nhận cách thức thanh toán<br>
                    -Mua hoàn tất<br>
                    -Sau khi đã thanh toán ,hãy đợi chúng tôi thẩm duyệt xong, các đồng tiền còn lại sẽ được hiển thị ở góc trên bên phải của trang web.
                    <br><br>
                  </li>

                  <li>
                    <strong>Ra giá</strong><br><br>
                    -Tìm kiếm vật phẩm muốn cho giá
                    <br><br>
                    ( Trong trang chủ và trong phiên đấu giá khi bắt đầu, sau khi tìm kiếm sản phẩm muốn ra giá, click vào cho giá.   Chưa đăng ký hoặc không phải thành viên, vui lòng đăng nhập trước hoặc đăng ký trở thành thành viên rồi mới cho giá )
                    <br><br>
                    -Tiến hành cho giá
                    <br><br>
                    Mỗi 1 lần cho giá cần tiêu tốn 1 điểm ( 1 điểm 30.000 VNĐ )
                    <br>
                    Đồng thời sản phẩm trúng thầu giá cả sẽ tích lũy 1000 VMĐ, 2000 VNĐ hoặc 3000 VNĐ ( xem loại sản phẩm đấu giá mà có sự khác nhau )
                    <br><br>
                    Quý vị có thể lựa chọn cho giá bằng thủ công hoặc tự động, xem nhu cầu của người dùng.
                    <br>
                    Trong vòng 30 giây đếm ngược khi người dùng ra giá, thời gian đấu giá sẽ kéo dài thêm 20 giây, thời gian kết thúc đấu giá sản phẩm không cố định, do tình hình động thái của hội viên tham gia đấu giá mà quyết định. 
                    <br>
                    Thông thường sản phẩm hot trong thời gian đấu giá sẽ kéo thời gian rất dài, khi bước vào thời gian 30 giấy đếm ngược của phiên đấu giá tức là lúc bắt đầu đấu giá.
                    <br><br>
                    ＊Nhắc nhở quý vị, cùng 1 thời gian chỉ được tham gia 2 phiên đấu giá. 
                    <br><br>
                  </li>

                  <li>
                    <strong>Trúng đấu giá</strong>
                    <br><br>
                    Khi đến thời gian kết thúc đấu giá, mà quý vị là người cho giá cao nhất, màn hình sẽ hiển thị “ đấu giá thành công” . Chúc mừng quý vị trúng đấu giá sản phẩm !<br>
                    Sau khi trúng đấu giá thành công, hệ thống sẽ trang bị cho quý vị 1 tổ hợp hiển thị “ tên khác” mới, để dùng cho việc đấu giá tiếp theo. 
                    <br><br>
                    ※Nhắc nhở quý vị, mỗi lần trúng đấu giá thành công, hệ thống sẽ đồng thời thay đổi biệt danh của quý vị
                    <br><br>
                  </li>

                  <li>
                    <strong>Mua sản phẩm trúng đấu giá</strong>
                    <br><br>
                    Nội dung mua sản phẩm xác nhận trúng đấu giá 
                    <br>
                    Tới khu dành riêng cho hội viên vào trang “ đã trúng đấu giá” , đồng thời bấm vào “ mua” sản phẩm trúng đấu giá.
                    <br><br>
                    -Điền thông tin sản phẩm trúng đấu giá
                    <br><br>
                    Nhắc nhở quý vị, sản phẩm trúng đấu giá cần phải trong vòng 14 ngày sau khi trúng đấu giá hoàn thành việc điền thông tin mua, nếu quá thời gian chưa mua sẽ đánh mất tư cách mua sản phẩm trúng đấu giá;  cho dù quý vị quyết định không mua sản phẩm trúng đấu giá, số điểm mà quý vị xài trong việc đấu giá đều không được trả lại.
                    <br><br>
                    -Sản phẩm gửi đi
                    <br><br>
                    Chúc mừng quý vị hoàn thành thủ tục liên quan mua sản phẩm trúng đấu giá, sản phẩm trúng đấu giá sẽ gửi đến trong vòng 7 -14 ngày, vui lòng kiễn nhẫn chờ đợi, nhắc nhở quý vị, nếu gặp trường hợp sản phẩm cháy hàng hoặc sản phẩm thuộc hàng bán chạy, thời gian gửi đến có thể vượt quá 14 ngày, vui lòng hội viên phải hiểu rõ.
                    <br><br>
                  </li>

                  <li>
                    <strong>Các loại đấu giá</strong>
                    <br><br>
                    -Đấu giá 1000 VNĐ : mỗi lần cho giá, giá cả tăng 1000 VNĐ.
                    <br><br>
                    -Đấu giá 2000 VNĐ : mỗi lần cho giá, giá cả tăng 2000 VNĐ.
                    <br><br>
                    -Đấu giá 3000 VNĐ : mỗi lần cho giá, giá cả tăng 3000 VNĐ.
                    <br><br>

                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
