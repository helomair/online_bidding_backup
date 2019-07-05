@extends('layouts.master')
@section('title', '常見問題') <!-- 單行記錄 -->
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
                    Giới thiệu dịch vụ
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">

                </h3>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content10 cid-rsuhmjDo0X" id="content10-b">
    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                   Giới thiệu cơ bản
               </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style font-size-20 display-5">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style">
                <ol>
                  <li>
                    <strong>I-bid là gì ?</strong><br><br>
                    Toàn bộ sản phẩm đấu giá đều có giá khởi điểm là 0 Tệ<br><br>
                    Mức trúng thầu cần sử dụng số điểm<br><br>
                    Mỗi lần giá đấu giá trúng thầu là 1000-3000 Tệ<br><br>
                    Trong khi đếm ngược 30 giây mỗi khi người sử dụng cho giá thì tự động kéo dài thêm 20 giây<br><br>
                    Sản phẩm đều là sản phẩm mới <br><br>
                    Phí giải quyết trúng thầu là 100000 Tệ
                    <br><br>
                  </li>
                    
                  <li>
                    <strong>Giới thiệu cơ bản dịch vụ</strong><br><br>
                    Sử dụng dịch vụ đấu thầu này, cần phải mua điểm số cần cho việc cho giá ( 1 điểm = 30000 VNĐ )<br><br>
                    Mỗi lần ra giá thì tiêu tốn 1 điểm. Điểm số tiêu tốn cho việc ra giá, bất kể có trúng thầu hay không, đều không được trả lại.<br><br>
                    Mỗi 1 lần trúng thầu thành công, hệ thống sẽ trang bị cho quý vị 1 tổ hợp hiển thị tên khác mới, để sử dụng việc đấu thầu tiếp theo<br><br>
                    Cùng 1 thời gian người dùng chỉ được tham gia 2 phiên đấu giá <br><br>
                    Mỗi lần người dùng ra giá, thời gian đấu thầu sẽ kèo dài them 20 giây, thời gian sản phẩm kết thúc đấu giá không cố định, do tình hình động thái của hội viên đấu giá mà quyết định.<br><br>

                    <br><br>
                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content10 cid-rsuhmjDo0X" id="content10-b">
    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                   Cách sử dụng cơ bản
               </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style font-size-20 display-5">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

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
                    -Sau khi chi trả phí bình thường, lần tiếp theo đăng nhập hội viên, bên góc phải phía trên trang web sẽ hiển thị mục điểm số còn lại.
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

<section class="mbr-section article content10 cid-rsuhmjDo0X" id="content10-b">
    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                    Giải thích tính năng tự động đấu giá
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">
                  Tính năng tự động cho giá , là trợ thủ đắc lực để cho hệ thống thay thế quý vị tiến hành đấu giá.<br>
                  Không cần phải lúc nào cũng phải chăm chú vào thị trường đấu giá, cho dù có việc phải tạm thời rời đi, không đăng nhập thị trường đấu giá cũng không cần phải lo lắng.<br>
                  Chỉ cần thiết lặp tốt, trong thời gian phù hợp điều kiện cho giá của quý vị, hệ thống sẽ tự động tiến hành cho giá.
                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style ">
                <ol>
                  <li>
                    <strong>Trạng thái hiển thị khi chưa thiết lặp tự động cho giá</strong><br><br>
                     Khi chưa thiết lặp tự động cho giá, hình ảnh sẽ giống như hình ảnh hiển thị bên trái. Tại cột “giá khởi điểm”, nhập vào giá muốn khởi động cho giá, khi giá thầu đạt đến mức giá thiết lập, hệ thống sẽ bắt đầu tự động cho giá. Với lại ở cột “giới hạn cao nhất”, sau khi nhập mức giá cao nhất cho việc ngưng cho giá, giá thầu đạt đến mức giá đã thiết lập, hệ thống sẽ ngưng việc tự động cho giá, tại vị trí “ số lần cho giá”, có thể nhập vào số lần tự động cho giá. Khi giá thầu rơi vào giữa mức giá khởi điểm đã và thiết lập và khu giá giới hạn cao nhất, đồng thời đã hoàn thành số lần cho giá đã thiết lập, hệ thống sẽ ngưng tự động cho giá.
                     <br><br>
                     ・“ Số lần cho giá ” ít nhất phải thiết lập 10 lần trở lên ( tiêu hao 10 điểm ))
                     <br>
                     ・“ giới hạn cao nhất ” cần phải thiết lặp mức tiền cao hơn mức cho giá hiện tại là 30.000 VNĐ trở lên

                    <br><br>
                  </li>

                  <li>
                    <strong>Quy tắc tự động cho giá</strong><br><br>
                    1.Khi thời gian đếm ngược còn 10 giây kết thúc phiên đấu giá, mà giá đấu giá đạt đến vị trí giới hạn thấp nhất của tự động cho giá mà quý vị thiết lập, hệ thống tự động cho giá sẽ giúp bạn cho giá ngẫu nhiên, mỗi lần cho giá, thời gian đấu giá sẽ kéo dài thêm 20 giây. Đương nhiên, nếu quý vị là người đã cho giá cao nhất, hệ thống sẽ không tiến hành cho giá nữa.
                    <br><br>
                    2.Thiết lặp tự động cho giá cần phải thiết lặp trong thời gian kết thúc đấu giá mà chưa bước vào thời gian đếm ngược 10 giây, một khi bước vào thời gian đếm ngược 10 giây của kết thúc đấu giá thì không thể thiết lặp tự động cho giá.
                    <br><br>
                    3.Số lần cao nhất cho mỗi lần thiết lặp tự động cho giá là 100 lần. 
                    <br><br>
                    4.Vui lòng lưu ý thiết lặp cho mức tiền giới hạn cao nhất, do là mức tiền cho giá trong lúc đấu giá là mức tăng cố định <br>Ví dụ : trong lúc đấu giá của phiên 3000 VNĐ, mức giá trúng đấu già nhất định là bội số của 3, mức giới hạn cao nhất mà quý vị thiết lặp là 1.000.000 VNĐ thì tự động cho giá chỉ có tiến hành tiến mức 999.0000 VNĐ ( bội số của 3 )
                    <br><br>
                    5.Đấu giá sản phẩm có giá trị cao, sẽ có rất nhiều hội viện sử dụng tính năng cho giá tự động. Khi trong cùng khu có mức giá giống nhau, đồng thời có 2 người đều thiết lặp tự động cho giá, hệ thống sẽ tiến hành tuần hoàn tự động đấu giá với nhau, hoàn thành tự động cho giá trong chớp mắt, điểm số có thể xài hết trong chớp mắt, thời gian kết thúc đấu giá cũng là lúc tích lũy 1 lượng lớn và kéo dài ( tất cả số lần tự động cho giá trong việc giá tương đồng* 20 giây ) đề nghị quý vị cẩn thận khi lựa chọn sử dụng cho giá cho đúng thời điểm.
                    <br><br>
                    6.Sau khi kết thúc tự động cho giá, điểm số chưa sử dụng hết sẽ trả lại cho người dùng.
                    <br><br>
                    7.Nhắc nhở quý vị, tất cả lịch sử tự động cho giá, có thể tra cứu trong trang hiển thị của phiên đấu giá kết thúc.
                    <br><br>
                  </li>

                  <li>
                    <strong>Làm sao để sử dụng tốt chức năng tự động cho giá</strong><br><br>
                     Khi mà sản phẩm chưa có ai thiết lặp tự động cho giá là thời điểm tốt nhất để thiết lặp tự động cho giá, đề nghị là có thể tra cứu lịch sử cho giá của sản phẩm, sau đó suy nghĩ xem thời gian thiết lặp tự động cho giá, hoặc sử dụng chức năng tự động cho giá.
                    <br><br>
                  </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content10 cid-rsuhmjDo0X" id="content10-b">
    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                Mẹo nhỏ khi đấu giá
            </div>

            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style">
							<h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5 font-size-20" style="color:#767676; text-align:left;">
								<strong>Nắm rõ nguyên tắc trò chơi : </strong>     sau khi cho giá thì điểm số sẽ không được trả lại, thời gian kết thúc đấu giá căn cứ số người đấu giá tự động kéo dài.
								<br><br>
								<strong>Đọc lịch sử kết thúc đấu giá của sản phẩm : </strong>     giá kết thúc đấu giá có cao có thấp, cẩn thận lựa chọn.
								<br><br>
								<strong>Cẩn thận khi lựa chọn sản phẩm đấu giá cho người mới bắt đầu : </strong>bắt đầu với sản phẩm đơn giản.
								<br><br>
								<strong>Lưu ý cho dù động thái đấu giá thay đổi chiến lược : t</strong>hủ công/ tự động/ kiểm soát vốn
								<br><br>
							</h3>
                <ol>
							<li>
							<strong>Phải chuẩn bị thật tốt trước khi đấu giá</strong><br><br>
							Đề nghị hội viên mới chỉ chuyên tập trung vào sản phẩm mình thực sự muốn, đồng thời nghiên cứu lịch sử đấu giá của sản phẩm đã qua trong “ đã kết thúc đấu giá”. Tìm hiểu tình trạng kết thúc đấu giá và cường độ cạnh tranh của mục tiêu sản phẩm. 
							</li>

							<li>
							<strong>Trước khi cho giá thực tế, trước tiên nên quan sát tình trạng cạnh tranh đấu giá tức thời của các hội viên khác</strong><br><br>
								Vui lòng trước tiên quan sát tình trạng đấu giá online lúc 15 giờ trở về sau mỗi ngày, tìm hiểu cách thức cho giá của 1 số hội viên 							</li>

							<li>
							   <strong>Bắt đầu với sản phẩm đơn giản</strong><br><br>
						       Hội viên mới tốt nhất nên bắt đầu học tập kỹ năng đấu giá từ các sản phẩm có mức giá chạm đáy, thông qua tham gia đấu giá các vật phẩm nhỏ, để gia tăng hiệu quả kinh nghiệm đấu giá và cơ hội trúng đấu giá.
									</li>

							<li>
								<strong>cẩn thẩn khi sử dụng “ tự động cho giá “ </strong><br><br>
								Khi cùng giống nhau về giá cả, nếu như đồng thời có nhiều người sử dụng “ tự động cho giá”, mỗi 20 giây của thời gian cho giá sẽ đồng thời tăng tích lũy, điểm số cũng đồng thời tiêu hao trong chớp mắt. Có thể tránh sử dụng trong thời gian cao điểm, để tiết kiệm tiêu hao điểm số. 
							</li>

							<li>
							    <strong>Thông minh thiết lặp dừng lỗ</strong><br><br>
				                Lúc bắt đầu thì phải thiết lặp vốn dự tính ( giá trúng đấu giá + điểm số đã chi ), nhất là trong lúc đấu giá với các sản phẩm hot, một mực theo đuổi giá điên cuồng, như vậy dễ dàng rơi vào tình trạng “ được không bằng mất”, do là sản phẩm cùng loại đều sẽ duy trì đưa ra sàn đấu giá, do đó thiết lặp dừng lỗ hợp lý, về sau cũng sẽ có nhiều cơ hội trúng đấu giá.
							</li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
