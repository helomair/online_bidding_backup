@extends('layouts.master')
@section('title', '常見問題') <!-- 單行記錄 -->
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
                    常見問題
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
                    Quy tắc đấu giá
                </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>Làm thế nào để cho giá đấu giá ?</strong><br><br>
                      1.Đầu tiên quý vị phải đăng ký trở thành hội viên I-Bid, đăng ký hội viên là hoàn toàn miễn phí.
                      <br><br>
                      2.Sau khi đăng nhập hội viên, quý vị cần phải mua tiền I-Bid thì mới được tham gia đấu giá. Tiền I-Bid vui lòng tiến vào trang “ Mua điểm” tiến hành mua tiền, 1 điểm tiền I-bid tương đưỡng với 30.000 VNĐ
                      <br><br>
                      3.Trong “ đấu giá đang tiến hành”, tìm kiếm sản phẩm mình muốn.
                      <br><br>
                      4.Cách chơi đấu giá cơ bản của I-Bid, là trong 20 giây đếm ngược trước khi kết thúc đấu giá, ấn vào “ cho giá” và cạnh tranh với các hội viên khác, mỗi 1 lần cho giá, sẽ trừ 1 điểm tiền I-bid, trong thời gian đếm ngược 30 giây mỗi 1 người cho giá sẽ kéo dài thêm 20 giây. Nếu quý vị là người cho giá sau cùng, sau khi thời gian đếm ngược 0 giây và không còn ai cho giá nữa, thì quý vị là người trúng đấu giá.
                      <br><br>
                      Sau khi kết thúc đấu giá, sau cùng hội viên chưa được trúng đấu giá, số tiền điểm tiêu hao trong lúc đấu giá, sẽ không được hoàn trả. Đây là dịch vụ thuần đấu giá, cũng là nguyên nhân tại sao có thể cung cấp giá chạm đáy của sản phẩm, khác với các trang web đấu giá thông thường. Vùi lòng xác nhận quý vị đồng ý cách thức đấu giá của sàn đấu giá này, thì mới tham gia thành hội viên hoặc mua điểm số. 
                      <br><br>
                      </li>

                    <li><strong>Tại sao kéo dài thời gian kết thúc đấu giá ?</strong><br><br>
                      30 giây đếm ngược sau cùng chỉ cần có người cho giá, hệ thống thời gian kết thúc đấu giá sẽ kéo dài thêm 20 giây, nếu như cùng 1 thời gian mà có nhiều cho giá, thời gian sẽ tích lũy là 20 giây * số lần cho giá. Nếu như cùng 1 thời gian có nhiều người cùng sử dụng tự động cho giá, hệ thống sẽ lập tức cho 2 người đấu giá trở lên tiến vào trạng thái cạnh tranh liên tục cho giá, thời gian còn dư của kết thúc đấu giá thì kéo dài bằng số lần tự động cho giá * 20 giây;  nếu như quý vị là người cho giá cuối cùng, thời gian đếm ngược 0 giây không còn ai cho giá nữa, quý vị là người trúng đấu giá.
                      <br><br>
                    </li>

                    <li><strong>Làm sao biết chính xác thời gian kết thúc đấu giá?</strong><br><br>
                      Thời gian kết thúc đấu giá của chúng tôi là biến động, không có thời gian cố định, thời gian đếm ngược 30 giây chỉ cần mỗi 1 người cho giá thì tăng thêm 20 giây, để cho người có hứng thú với vật phẩm đấu giá, còn có cơ hội cạnh tranh, trong vòng 20 giây này không còn có ai cho giá nữa, thì quý vị là người thắng cuộc, trong vòng 30 giây có người cho giá thì kéo dài thêm 20 giây, do đó thời gian kết thúc đấu giá của các sản phẩm hot có thể bị kéo dài.
                      <br><br>
                      Nếu như cùng 1 thời gian có nhiều người cho giá, thời gian sẽ tích lũy là 20 giây * số lần cho giá. Nếu như cùng 1 thời gian có nhiều người cùng sử dụng tự động cho giá, hệ thống sẽ lập tức cho 2 người đấu giá trở lên tiến vào trạng thái cạnh tranh liên tục cho giá, thời gian còn dư của kết thúc đấu giá thì kéo dài bằng số lần tự động cho giá * 20 giây. Điểm số tiêu hao trong thời gian cạnh tranh đấu giá, là không có hoàn trả. 
                      <br><br>
                    </li>

                    <li>
                      <strong>Mức tiền kết thúc đấu giá của người thắng cuộc được tính bằng cách nào ?</strong><br><br>
                      Mức tiền kết thúc đấu giá là số tiền bạn chi trả thực tế. Nhưng điểm số đã tiêu hao trong quá trình đấu giá, cũng là 1 trong số vốn mà có được sản phẩm đó. Ví dụ : Người cuối cùng trúng đấu giá sản phẩm ABC là quý vị, và giá kết thúc đấu giá là 941.000 VNĐ, nhưng trong quá trình bạn đã xài hết 50 điểm số, do đó số vốn bạn bỏ ra là : 941.000 VNĐ ( trả sau khi trúng đấu giá ) +50 điểm * 30.000 VNĐ ( phải mua điểm trước thì mới có thể tham gia đấu giá ) = 2.441.000 VNĐ.
                        <br><br><br>
                        Nếu như cuối cùng quý vị không thể thắng đấu giá, điểm số mà quý vị đã tiêu xài là 50 điểm * 30.000 VNĐ = 1.500.000 VNĐ, là không được hoàn trả, đây dịch vụ thuần đấu giá, cũng là nguyên nhân mà sản phẩm đó có mức giá chám đáy, khác so với các trang đấu giá khác, vui lòng xác nhận quý vị đồng ý cách thức đấu giá của sàn đấu giá này, rồi mới tham gia thành hội viên hoặc là mua điểm số.
                        <br><br>
                    </li>

                    <li>
                      <strong>Tại sao biệt danh khi đấu giá và ID hội viên khác nhau ?</strong><br><br>

                      Vì muốn giảm thiểu tranh chấp hoặc là ác ý công kích giữa hội viên với nhau và duy trì tính công bằng đấu giá, hệ thống sẽ lấy “ biệt danh đấu giá “ để thay thế thân phận của quý vị, hội viên mỗi lần đấu giá thành công, hệ thống sẽ đặt 1 tổ hợp biệt danh và mã số mới cho hội viên để sử dụng cho lần đấu giá sau, ID mà hội viên đăng nhập là thân phận hội viên cố định không đổi.<br><br>
                        Nhắc nhở quý vị, sau khi kết thúc đấu giá sản phẩm, thông tin hội viên trong lịch sử đấu giá sẽ khôi phục thành ID hội viên từ biệt danh.
                        <br><br>

                    </li>

                    <li>
                      <strong>Được rút khỏi đấu giá đã tham gia, chuyển sang đấu giá sản phẩm khác được không ?</strong><br><br>
                      Không được, vì duy trì tính công bằng của cuộc đấu giá, cùng 1 thời gian mỗi người dùng chỉ có thể tham gia 2 sàn đấu giá, cần phải đợi đến 1 trong 2 sàn đấu giá kết thúc, thì mới được tiến hành tham gia sàn tiếp theo, sau khi đấu giá thành công thì hệ thống vẫn thiết lặp 1 tổ hợp biệt danh tiếp tục tham gia đấu giá.
                        <br><br>
                    </li>

                    <li>
                      <strong>Tôi có thể tra cứu toàn bộ lịch sử mà tôi đã từng đấu giá ?</strong><br><br>
                      Quý vị có tra cứu toàn bộ lịch sử mà quý vị đã từng đấu giá tại “ lịch sử cho giá” trong “ khu dành riêng cho hội viên” 
                      <br><br>
                    </li>

                    <li>
                      <strong>Tại sao bước vào o giây của kết thúc đấu giá, vẫn còn người cho giá?</strong><br><br>
                          Do là mỗi hội viên sử dụng băng thông lưu lượng internet khác nhau, nhằm duy trì tính công bằng đấu giá, đích thật hệ thống sẽ bảo lưu 1 khoảng thời gian rất ngắn sau 0 giây để xử lý thông tin cho giá gửi vào hệ thống trong lúc 0 giây, rồi phản ứng lại cuối cùng có phải kết thúc đấu giá, cũng tức là, bảo lưu thời gian dài hay ngắn, sẽ căn cứ số liệu thông tin trong lúc phát sinh so với tốc độ mà hệ thống xử lý thông tin mà quyết định, không thể xác định chính xác số giây.
                        <br><br>
                            Tuy nhiên, thời gian này không phải thời gian đấu giá, nếu như có người dùng lợi dụng sau o giây thời gian mà tiến hành cho giá, đó không phải tính năng chính thức mà hệ thống cung cấp, không thể bảo lưu điểm số khi đưa vào sau 0 giây có thể được chấp nhận. 
                        <br><br>
                    </li>

                    <li>
                      <strong>Tại sao có người có thể kết thúc đấu giá với giá vượt qua giá thị trường ? ( 0% sản phẩm kết thúc đấu giá )</strong><br><br>
                        Người tham gia đấu giá sản phẩm hot rất nhiều, khi hội viên cạnh tranh đấu giá trong thời gian dài mà không ai chịu bỏ cuộc, có khi mức chi trả để kết thúc đấu giá sẽ vượt qua giá thị trường ( căn cứ vào tổng điểm số bỏ vào mà quyết định ), thông thường 0% sản phẩm kết thúc đấu giá, nguyên nhân có thể là do hội viên đã bỏ vào không ít điểm số và thời gian tham gia đấu gia, cho dù đã vượt quá giá thị trường, nhưng lại không muốn bỏ cuộc.
                        <br><br>
                        Nhắc lại lần nữa, tất cả sản phẩm đấu giá từ bắt đầu tới kết thúc công ty chúng tôi cam kết tuyết đối không có bất kỳ hành vi trung gian đấu giá, tất cả kết quả đấu giá đều được quyết định bởi hành vi đấu giá của người dùng, giá cả kết thúc đấu giá sản phẩm tương đồng có cao có thấp, đều xem xét tại tình trạng đấu giá của ngày hôm đó.
                        <br><br>
                        Nhắc nhở quý vị, khi tiến hành cho giá liên tục hoặc trong 1 thời gian dài, chi phí mà quý vị đã chi trả có khả năng vượt quá giá thị trường, do đó vui lòng cẩn thận cân nhắc vốn có thể đấu giá.
                        <br><br>
                    </li>

                    <li>
                      <strong>Nếu sever gặp trục trặc, thì về sau xử lý ra sao ?</strong><br><br>
                      Nếu gặp tình trạng sever lỗi, nguyên tắc xử lý đấu giá liên quan chia thành 2 loại :
                      1.Nguyên tắc xử lý về việc có thể quy trách nhiệm cho hệ thống dịch vụ của công ty chúng tôi vận hành mà gây nên sự bất thường trong đấu giá
                      <br>
                      -  Bảo lưu tư cách người trúng đấu giá, xuất hàng bình thường.
                      <br>
                      -  Điểm số mà người không thắng đấu giá đã sử dụng, toàn bộ trả lại .
                      <br><br>
                      2 .Nguyên tắc xử lý về việc trách nhiệm không thuộc về hệ thống dịch vụ của công ty chúng tôi vận hành mà gây nên sự bất thường trong đấu giá ( ví dụ : hệ thống DNS bất thường, hacker tấn công )
                      <br>
                      -  Tư cách người trúng đấu giá không có hiệu lực, vật phẩm không được tính.
                      <br>
                      -  Điểm số mà người thắng đấu giá và không thắng đấu giá đã sử dụng, toàn bộ trả lại .
                      <br><br>
                    </li>

                    <li>
                      <strong>Khi hệ thống bất thường, xử lý ra sao ?</strong><br><br>
                      Trang web này có thể do tắc nghẽn đường truyền mạng hoặc do bên thứ 3 ác ý tấn công, dẫn đến tạm thời không thể sử dụng được dịch vụ. Nhằm loại bỏ bất thường và khôi phục hệ thống, chúng tôi có thể tạm thời dừng dịch vụ. Trong lúc đang cạnh tranh đấu giá, sẽ tiếp tục đấu gia tính từ lúc xảy ra tình trạng bất thường, hoặc là hoàn tác tới tình trạng trước đó khoảng thời gian.
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
                    Tự động cho giá
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
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                  <li>
                    <strong>Tự động cho giá là gì ?</strong><br><br>
                    Tự động cho giá có thể tự mình thiết lặp mức giới hạn cao nhất và thấp nhất mà mình muốn cho việc cho giá, sau đó do hệ thông thay quý vị tiến hành chức năng tự động cho giá. Xin lưu ý, nếu có người khác cũng thiết lặp tự động cho giá trong cùng 1 phiên đấu giá, hệ thống sẽ tiếp tục cho giá, cho đến khi đạt tới mức giới hạn cao nhất. Nhắc nhở quý vị, Số lần cao nhất cho mỗi lần thiết lặp tự động cho giá là 100 lần. Chi tiết vui lòng tham khảo ( mô tả chức năng tự động cho giá )
                    <br><br>
                  </li>

                  <li>
                    <strong>Sử dụng tự động cho giá, tại sao mới cho giá thì điểm số đã xài hết ?</strong><br><br>
                    Trong cuộc đấu giá sản phẩm có giá trị cao, rất nhiều hội viên sẽ sử dụng tự động cho giá. Khi cùng 1 giá cả, khi rất nhiều người đều thiết lặp tự động cho giá, hệ thống sẽ tiến hành cho giá với nhau giữa các hội viên trong vòng 1 giây , quý vị có thể tra cứu trong lịch sử cho giá khi kết thúc đấu giá.
                    <br><br>
                    Thời gian còn dư kết thúc đấu giá tức là thời gian kéo dài mà tự động cho giá đã thiết lặp số điểm * 20 giây, điểm số của quý vị cũng do đó mà xài hết trong thời gian ngắn, đề nghị quý vị cẩn thận lựa chọn sử dụng tự động cho giá cho đúng thời điểm
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
                    Về I-Bid
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                  <li>
                    <strong>Trên mạng có người nói I-Bid lừa gạt ?</strong><br><br>
                     I-Bid cung cấp 3 cam kết, thề rằng kinh doanh dịch vụ đấu giá với cách thức công bằng, rõ rệt
                     <br>
                     [ Đấu giá 100% hợp pháp, Ủy ban công bằng viện hành chính xét duyệt ]
                     <br>
                     [ không có bất cứ ai là người giỏi nhất trong đấu giá ]
                     <br>
                     [ thông tin xuất hàng hoàn toàn minh bạch ]
                    <br><br>
                  </li>

                  <li>
                    <strong>Trang web có phải cố tình nâng mức giá trúng đấu?</strong><br><br>
                    Công ty chúng tôi có tiếng là dịch vụ đáng tin cậy, cam kết tuyệt đối không nhúng tay vào đấu giá, cũng không có các chương trình người máy. Tất cả các tài khoản đều có lịch sử thông tin cá nhân hoàn chỉnh đúng sử thật, tuyệt đối không làm giả. 
                    <br><br>
                  </li>

                  <li>
                    <strong>Điểm số cho giá đều không được trả lại, các người là tập đoàn lợi nhuận khủng ?</strong><br><br>
                        Điểm số đấu giả có được của 1 số sản phẩm hot của I-Bid có thể vượt quá giá thị trường, nhưng điểm số của đa số sản phẩm thấp hơn giá thị trường. Lợi nhuận của công ty chúng tôi là sau khi cần bằng hai giá nói trên. Với lại công ty chúng tôi vẫn phải chi cho việc marketing, xây dựng hệ thống, chi phí vận hành, chứ không phải đơn thuần chỉ lấy lợi ích điểm số có được từ người tiêu thụ . Do đó việc người tiêu thụ mua điểm số tại I-Bid  không được xem là công ty chúng tôi có được lợi nhuận bất hợp lý.
                    <br><br>
                  </li>

                  <li>
                    <strong>Làm sao có thể xác minh tính công bằng của đấu giá ?</strong><br><br>
                    Nhằm bảo vệ tính công bằng của đấu giá, I-Bid nghiêm cấm hội viên có các hành vi sau đây :
                    <br>
                    1.Với tư cách 1 người đăng ký và sử dụng nhiều tài khoản.
                    <br>
                    2.Với danh nghĩa của người khác hoặc người nhà, đăng ký và sử dụng nhiều tài khoản khác nhau. 
                    <br>
                    3.Vị phạm hợp tác với hội viên khác để tiến hành đấu giá.
                    <br>
                    4.Các hành vi khác ảnh hưởng hoặc gây hại đến tính công bằng của đấu giá.
                    <br><br>
                    Sau khi xác minh, nếu hội viên sử dụng nhiều tài khoản hoặc có hành vi gây hại đến tính công bằng của đấu giá, chúng tôi lập tức đình chỉ quyền lợi. Quyền lợi của hội viên trúng đấu giá sẽ bị hủy bỏ. Điểm số đã xài và điểm số còn lại trong tài khoản, đều không được trả lại. Nếu như với cách thức vi phạm điều khoản sử dụng dịch vụ mà thắng cuộc đấu giá, đồng thời có sản phẩm, chúng tôi sẽ đệ đơn tố tụng để truy hồi sản phẩm hoặc bồi thường tổn thất.
                    <br><br>
                  </li>

                  <li>
                    <strong>Nếu có vấn đền muốn tư vấn, thì làm liên hệ với chúng tôi ?</strong><br><br>
                    Vui lòng đến “ liên hệ chúng tôi” nói rõ vấn đề của quý vị. Nếu quý vị đã là hội viên của I-Bid, vui lòng trong nội dung vấn đề cung cấp số tài khoản của quý vị, sau khi chúng tôi nhận được thư của quý vị, trong vòng 2 ngày làm việc sẽ trả lời bằng Email hoàn chỉnh tới quý vị. 
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
                Vần đề điểm số 
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                  <li>
                    <strong>Cách thức mua điểm số I-Bid?</strong><br><br>
                    Quý vị có thể sử dụng cách thức chuyển khoản qua ATM để mua điểm số. Do cách thức chuyển khoản ATM cần phải đợi xác nhận thông báo nộp khoản của ngân hàng, sau khi mua nhân viên làm việc đối chiếu xong sẽ lập tức chuyển điểm số vào tài khoản.
                    <br><br>
                  </li>

                  <li>
                    <strong>Điểm số I-Bid có thời hạn sử dụng không ?</strong><br><br>
                    Điểm số I-Bid đã mua tại dịch vụ này, không có thời hạn sử dụng, nên cứ yên tâm mà mua
                    <br><br>
                  </li>

                  <li>
                    <strong>Làm sao xác nhận điểm số hiện có ?</strong><br><br>
                    Trong trạng thái đăng nhập của hội viên, góc trên bên phải màn hình hiển thị có mục hiển thị điểm số I-Bid, có thể tiến hành xác nhận. 
                    <br><br>
                  </li>

                  <li>
                    <strong>Điểm số miễn phí là như thế nào ? </strong><br><br>
                    Điểm số miễn phí là điểm số mà I-Bid tặng cho hội viên trong mỗi chương trình event, khác với nguồn gốc điểm số mà người sử dụng mua, nhưng vẫn sử dụng như nhau trong việc cho giá.
                    <br><br>
                  </li>

                  <li>
                    <strong>Điểm số free có đặc điểm sử dụng nào ?</strong><br><br>
                    1.Sử dụng điểm số miễn phí cần phải sau khi hội viên hoàn tất thủ tục mua gói điểm số đầu tiên, thỉ điểm số miễn phí mới có tư cách sử dụng.
                    <br>
                    2.Khi sử dụng trong lúc đấu giá, hệ thống sẽ ưu tiên sử dùng điểm số miễn phí trong tài khoản trước, sau khi xài hết, thì mới bắt đầu trừ vào điểm số mà hội viên mua.
                    <br>
                    3.Thời hạn sử dụng của điểm số miễn phí cần phải xài hết trong vòng 30 ngày sau khi hệ thống gửi tặng, sau khi hết thời hạn mà chưa sử dụng hết thì sẽ không còn hiệu lực và được xem như từ bỏ quyền lợi. Nhưng trong vòng 30 ngày nếu có được điểm số miễn phí hoặc mua điểm số nữa, thời hạn hiệu lực của điểm sẽ được cập nhật lần nữa.
                    <br>
                    4.Điểm số miễn phí chỉ giới hạn cho bản thân người dùng sử dụng, không được tặng cho hội viện khác sử dụng hoặc là gộp vào tài khoản khác. 
                    <br>
                    5.Điểm số miễn phí là vật vô giá trị mà công ty chúng tôi gửi tặng nên không được chuyển thành tiền, cũng không được yêu cầu trả tiền lại. 
                    <br><br>
                  </li>

                  <li>
                    <strong>Làm thế nào để có được điểm số miễn phí ?</strong><br><br>
                    Cách có được điểm số free nhanh nhất là tham gia event “ chia sẻ của người thắng cuộc” của I-Bid 
Hễ hội viên thành công đấu trúng giá sản phẩm, sau khi nhận được sản phẩm thì có thể tham gia hoạt động chia sẻ của người chiến thắng bằng cách sau 
[ tải lên trực tiếp ] 
                    <br>
                    1.sau khi đăng nhập I-Bid, đến “ khu dành riêng cho hội viên > đã trúng đấu giá”, kiếm được sản phẩm mà quý vị muốn gửi bản thảo.
                    <br>
                    2.Click vào nút “ chia sẻ người thắng cuộc”, bắt đầu chức năng gửi bản thảo.
                    <br>
                    3.Vui lòng nhập câu từ thể hiện cảm xúc người thắng cuộc, và kèm theo hình ảnh (định dạng file .jpg ), sau đó ấn nút “ gửi đi” hoàn thành gửi bản thảo.
                    <br><br>
                    Khi I-Bid nhận được bản thảo của quý vị, tiến hành thẩm duyệt trong vòng 3 ngày làm việc, sau khi xác minh là đúng thì sẽ tải lên “ đánh giá của người thắng cuộc” của I-Bid về nội dung bản thảo của quý vị, đồng thời gửi tặng điểm số miễn phí cho quý vị.
                    <br>
                    1.Hễ cung cấp hình ảnh + lời văn tâm đắc, sau khi xét duyệt thành công tải lên, I-Bid sẽ cung cấp 5Pt điểm số miễn phí để phản hồi.
                    <br><br>
                    Trước khi gửi bản thảo, vui lòng lưu ý đặc điểm gửi bản thảo, cảm ơn quý vị đã hợp tác :
                    <br>
                    1.Chia sẻ người thắng cuộc chỉ chấp nhận bản thảo sản phẩm trúng đấu giá thực tế, sản phẩm không phải thực tế ( ví dụ gói điểm số ) không nằm trong phạm vi chấp nhận bản thảo.
                    <br>
                    2.Trong hình ảnh cần phải là ảnh chụp chung của bản thân người thắng cuộc và sản phẩm trúng đấu giá, không được để trẻ nhỏ chụp thế.
                    <br>
                    3.Nhằm tăng tính công bằng về việc đánh giá chia sẻ người thắng cuộc, người được chụp ảnh không được che mặt, mặt mũi phải được chụp rõ ràng.
                    <br>
                    4.Vui lòng nhận được sản phẩm trúng đấu giá mới gửi bản thảo, không được lấy vật phẩm hoặc cách thức khác thay thế vật phẩm trúng đấu giá đáng ra phải chụp ảnh.
                    <br><br>
                  </li>

                  <li>
                    <strong>Điểm số I-Bid đã mua chưa sử dụng hết, có thể đổi trả không ?</strong><br><br>
                    Trong vòng 7 ngày sau khi hội viên mua điểm số, nhằm vào điểm số dư đã mua mà chưa sử dụng hết trong vòng 7 ngày, có thể yêu cầu công ty đổi tiền lại, và điểm số miễn phí mà công ty chúng tôi gửi tặng hoặc điểm số đã sử dụng trong cuộc đấu giá thì không nằm trong giới hạn này.
                    <br><br>
                    Nhắc nhở quý vị, nếu gói điểm số mà hội viện trúng đấu giá trong cuộc đấu giá, hễ được sử dụng công ty chúng  tôi không cho đổi trả.
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
                Sản phẩm và vận chuyển
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                  <li>
                    <strong>Quy trình về sau sau khi trúng đấu giá</strong><br><br>
                    Trong [ khu dành riêng cho hội viên], lựa chọn [ đã trúng đấu giá] thì sẽ hiển thị cách thức mua hàng của sản phẩm trúng đấu giá đó. Nhắc nhở quý vị, công ty chúng tôi chỉ cung cấp chủ thể sản phẩm đấu giá, còn lại trung tâm mua sắm hoặc nhà xưởng khác cung cấp vật phẩm tặng kèm không nằm trong nội dung sản phẩm đấu giá.
                    <br><br>
                  </li>

                  <li>
                    <strong>Có bao nhiêu cách thức thanh toán của sản phẩm ?</strong><br><br>
                    Nhằm phòng chống người có tâm sử dụng không thỏa đáng dịch vụ này, mua sản phẩm trúng đấu giá chỉ được sử dụng cách thức thanh toán duy nhất là nhận hàng trả tiền trực tiếp.
                    <br><br>
                  </li>

                  <li>
                    <strong>Có viết hóa đơn hay không ?</strong><br><br>
                    Sản phẩm hay điểm số mà hội viên đã mua tại trang web này, chúng tôi đều cung cấp hóa đơn bằng giấy cho hội viên, hóa đơn sẽ gửi cố định 2 tuần 1 lần cho hội viên.
                    <br><br>
                  </li>

                  <li>
                    <strong>Cần phải chi trả chi phí vận chuyển/ chi phí xử lý không ?</strong><br><br>
                    Tất cả sản phẩm trong sàn đấu giá, đều thu với giá 100.000 VNĐ phí xử lý tác nghiệp.
                    <br><br>
                  </li>

                  <li>
                    <strong>Sản phẩm cần khoảng thời gian bao lâu thì gửi tới ?</strong><br><br>
                    Trong vòng 7 -14 ngày sau khi quý vị thanh toán thì có thể gửi tới. Nếu do kho chậm trễ, thì sẽ gửi thông báo cho quý vị.
                    <br><br>
                  </li>

                  <li>
                    <strong>Làm sao đưa ra yêu cầu về màu sắc sản phẩm?</strong><br><br>
                    Nếu sản phẩm quý vị trúng đấu giá thì có lựa chọn màu sắc, xin ghi nhớ trong vòng 3 ngày sau khi mua sản phẩm, vào mục “ liện hệ chúng tôi” để đưa ra yêu cầu về màu sắc, đến ngày chúng tôi sẽ căn cứ nhu cầu của mà cung cấp sản phẩm cho quý vị. Nếu không đưa yêu cầu màu sắc trong vòng 3 ngày, công ty chúng tôi sẽ chọn ngẫu nhiên mà xuất hàng
                    <br><br>
                  </li>

                  <li>
                    <strong>Sản phẩm có thể gửi ra nước ngoài không ?</strong><br><br>
                    Hiện tại sản phẩm mà I-Bid lên kệ đều là sản phẩm mới, nội dung bảo hành căn cứ theo quy định nhà sản xuất, ngoài ra chủng loại sản phẩm rất nhiều, 1 phần sản phẩm sử dụng cách thức đăng nhập trên mạng thay thế giấy bảo hành. Nếu có bất kỳ vấn đề vui lòng tới mục “ liên hệ chúng tôi “ để email tư vấn
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
                    Vấn đề tài khoản hội viên
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">

                </h3>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rsuhsHcFHj" id="content11-d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                  <li>
                    <strong>Quên ID tài khoản</strong><br><br>
                    Vui lòng ấn “ quên tài khoản mật khẩu “ để được cấp bổ sung
                    <br><br>
                  </li>

                  <li>
                    <strong>Quên mật khẩu</strong><br><br>
                    Vui lòng ấn “ quên tài khoản mật khẩu “ để được cấp bổ sung.
                    <br><br>
                  </li>

                  <li>
                    <strong>Muốn thay đổi ID tài khoản</strong><br><br>
                    Xin lỗi, tài khoản ID của I-Bid không thể thay đổi.
                    <br><br>
                  </li>

                  <li>
                    <strong>Muốn thay đổi mật khẩu</strong><br><br>
                    Vui lòng vào “ khu vực dành riêng cho hội viên” mục “ thông tin cơ bản” tiến hành thay đổi.
                    <br><br>
                  </li>

                  <li>
                    <strong>Muốn thay đổi thông tin cơ bản</strong><br><br>
                    Vui lòng tới “ liên hệ chúng tôi” đưa ra yêu cầu tiến hành thay đổi.
                    <br><br>
                  </li>

                  <li>
                    <strong>Chưa nhận được thư thông báo xác nhận</strong><br><br>
                    1 số hộp thư có thể chuyển thư thông báo xuống hộp thư rác, khiến cho thư thông báo không thể nhận được 1 cách bình thường, nếu vẫn không thể nhận được thư thông báo xác nhận, đề nghị quý vị thử bằng hộp thư khác .
                    <br><br>
                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
