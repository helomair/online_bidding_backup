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
                    基本介紹
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
                <ol>
                  <li><strong>什麼是I-Bid?</strong><br><br>
                    -拍賣商品全部0元起標<br>
                    -下標需使用點數<br>
                    -每一次下標拍賣價格1000~3000元<br>
                    -倒數30秒內每當使用者下標自動延長20秒<br>
                    -商品皆為全新商品<br>
                    -得標處理費100000元<br><br>
                    </li>

                  <li>
                    <strong>免費加入會員</strong><br><br>
                    -點選上方「免費加入會員」<br>
                    -輸入基本資料後，按「確認」鍵<br>
                    -確認所輸入的內容<br>
                    -完成會員註冊作業<br>
                    -輸入電子郵件地址後，按「寄出」鍵<br>
                    -收到驗證通知信後，點選認證用的URL連結
                    <br><br>
                  </li>

                  <li>
                    <strong>購買點數</strong><br><br>
                    -點選購買點數<br>
                    -確認付款方式<br>
                    -購買完成<br>
                    -正常支付費用後,下次登入會員時，網頁右上方即會顯示目前結餘的點數值。
                    <br><br>
                  </li>

                  <li>
                    <strong>出價</strong><br><br>
                    -尋找想下標物品
                    <br><br>
                    (在首頁及開標中的拍賣裡,尋找到想下標的商品後,點選下標!＊未登入或非會員者，請先登入或註冊為會員後再下標。)
                    <br><br>
                    -進行下標
                    <br><br>
                    每下標一次需消費1個點數(1點=30000元越南盾)
                    <br>
                    同時商品得標價將跟著累加1000元、2000元或3000元(視拍賣種類而有所不同)
                    <br><br>
                    你可選擇使用手動下標或自動下標參與競標，端看用戶個人需求。
                    <br>
                    倒數30秒內每當用戶下標，競標時間將再延長20秒，商品結標時間不固定，由會員競標狀況動態決定。
                    <br>
                    通常熱門商品競標時間會拉長很多，在進入競標倒數30秒的時候即是競標的開始。
                    <br><br>
                    ＊提醒您，同一時間僅能參與兩場拍賣。)
                    <br><br>
                  </li>

                  <li>
                    <strong>得標</strong>
                    <br><br>
                    當結標時間一到，而你所下標的金額為最高時，畫面則會顯示「競標成功」，即可確認得標，恭禧您標中商品!
                    成功得標後，系統將會隨機配發您一組新的"暱稱"顯示，供下回競標使用。
                    <br><br>
                    ※提醒您，每成功得標一次，系統將同時更換您的暱稱顯示。
                    <br><br>
                  </li>

                  <li>
                    <strong>購買得標商品</strong>
                    <br><br>
                    確認得標商品購買內容
                    <br>
                    至會員專區進入「已得標」頁面，並在得標商品上點選「購買」。
                    <br><br>
                    -得標商品資料填寫
                    <br><br>
                    提醒您，得標商品需在得標後14天內完成購買填寫，若超過時間未購買將喪失得標商品購買資格；即使您決定不購買得標商品，您在參與競標時所花費的點數均將不會退還。
                    <br><br>
                    -寄送商品
                    <br><br>
                    恭喜您完成相關得標商品購買手續，得標商品將於7~14天內完成配送，請耐心等候。 提醒您，若遇商品缺貨或屬預購商品，配送時間均將可能超過14天，請會員務必了解。
                    <br><br>
                  </li>

                  <li>
                    <strong>拍賣種類</strong>
                    <br><br>
                    -1000元拍賣:每次下標，價格增加1000元。
                    <br><br>
                    -2000元拍賣:每次下標，價格增加2000元。
                    <br><br>
                    -3000元拍賣:每次下標，價格增加3000元。
                    <br><br>

                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
