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
                    服務條款
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
                    基本介紹
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

<section class="mbr-section article content10 cid-rsuhmjDo0X" id="content10-b">
    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                    自動投標功能說明
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-white mbr-light mbr-fonts-style display-5 font-size-20">
                  自動下標功能，是讓系統代替您進行下標的競標好幫手。不需時時盯著賣場，就算有事暫離、
                  未登入賣場也不用擔心。只要事先設定好，在符合您下標的條件期間，系統即會自動進行下標。
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
                    <strong>未設定自動下標的畫面狀態</strong><br><br>
                     未設定自動下標時，畫面如左方圖示。在「起價」的欄位，輸入要啓動自動下標的價格。當標價達到設定的價格時，系統就會開始自動下標。而「上限」的 欄位，輸入要停止下標的最高價格後，標價達到所設定的價格，系統即會停止自動下標。
                     在「下標次數」的地方，可輸入要自動下標的次數。當標價落入所設定的起標價及上限價區間，並已執行完所預設的下標次數，系統也會停止自動下標。
                     <br><br>
                     ・「下標次數」至少要設定10次(消費10個點數)以上。
                     <br>
                     ・「上限」需設定比目前出價再高30000元以上的金額。
                    <br><br>
                  </li>

                  <li>
                    <strong>自動下標規則</strong><br><br>
                    1.當拍賣結標時間在倒數10秒內，而拍賣價格到達您設定的自動下標下限價位，自動下標系統即會為您隨機下標，每下一標，拍賣時間就再延長20秒。 當然，若您已是最高價下標者的話，系統就不會再執行下標。
                    <br><br>
                    2.自動下標設定需在結標時間尚未進入倒數10秒設定，一旦進入結標時間倒數10秒即無法設定自動下標。
                    <br><br>
                    3.每次設定自動下標的最高次數為100次。
                    <br><br>
                    4.請留意 上限金額的設定，因拍賣中的下標金額是固定增加的數值。例如：3000元拍賣中，得標價一定會是3的倍數。上限金額即使設定為1000000元，自動下標只會運作到999000元(3的倍數)。
                    <br><br>
                    5.高價商品的競標，會有許多會員使用自動下標功能。當同一價格區間，同時有2人以上都設 定了自動下標，系統將進入互相競標的自動循環，在瞬間完成相同價位內的所有自動標，
                    點數因此可能瞬間用完，結標時間也同時大量累計且延後(相同價位內所有自動標次數*20秒)。建議您慎選使用自動下標的時機。
                    <br><br>
                    6.在自動下標結束後，未用完的點數會再退還給使用者。
                    <br><br>
                    7.提醒您，自動下標的所有紀錄，可在物件結標後的頁面中查詢 。
                    <br><br>
                  </li>

                  <li>
                    <strong>如何有效利用自動下標</strong><br><br>
                     當此商品沒有人設定自動下標時就是使用的好時機。建議可以檢查商品的下標歷史，再思考設定自動下標的時間點，活用自動下標功能。
                    <br><br>

                  </li>

                  <li>
                    <strong>競標小技巧</strong><br><br>
                    熟悉遊戲規則:下標後點數均無法退還，結標時間依競標人數自動延長。
                    <br>
                    拜讀商品結標紀錄:結標價有高有低，慎選入場實機。
                    <br>
                    慎選入門競標商品:從簡單小物下手。留意即時競標動態調整策略:手動/自動/成本控制。
                    <br><br>
                    1.事前準備功課要做足建議新手會員只專注在你真正有需求的商品，並研究「已結標拍賣」中該商品過去的結標紀錄。了解目標商品的結標狀況與競爭強度，你可以在多次的觀察後，抓出其趨勢或最有利的時間點。
                    <br><br>
                    2.實際下標前,先觀察其他會員的即時競標狀況請先觀察每日15:00之後的即時線上競標狀況，了解一般會員的下標方式。
                    <br><br>
                    3.從簡單的小物開始新手會員最好從低價商品入門學習競標技巧，透過參與小物競標，可有效增加競拍經驗與得標機會喔。
                    <br><br>
                    4.小心使用「自動出價」同樣價格區間中，如有多人同時使用「自動出價」，每標20秒的時間會同時累積增加，點數也會在瞬間消耗。可避免於熱門時段中使用，以節省點數的消耗。
                    <br><br>
                    5.聰明設定停損一開始就要設定預期成本(得標價+支出點數)，尤其是在競拍熱門商品時，一路瘋狂追價，這樣容易得不償失，由於同樣的商品均會持續推出，因此適時設定停損，未來也會有更高的機會得標。
                    <br><br>
                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection