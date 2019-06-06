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
                    競標規則
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
                    <li><strong>如何下標?</strong><br><br>
                      1.您必須先註冊成為I-Bid會員，註冊會員是完全免費的。
                      <br><br>
                      2.登入會員後，您必須購買I-Bid代幣才能夠參與競標。I-Bid代幣請至【購買點數】網頁進行購買，I-Bid代幣1點等於越南盾30000元。
                      <br><br>
                      3.在【進行中的拍賣】裡，尋找自己想要的商品。
                      <br><br>
                      4.I-Bid的基本競標玩法，是在拍賣結束時間倒數0秒之前，按「下標」與其他會員搶標。每按一次下標，會扣1點I-Bid代幣。倒數30秒內每有人下一標，時間會增加20秒。若你是最後一位出價者，時間倒數0秒後無其他人再下標，你即為得標者。
                      <br><br>
                      拍賣結束後，最後未能得標的會員，過程中消耗的代幣，是無法退回的。這是一個純競標的服務，也是可以提供如此低價商品的原因，與一般拍賣網站有所不同。請確認你認同本賣場的競標方式，再加入會員或購買點數喔!
                      <br><br>
                      </li>

                    <li><strong>結標時間為何延長了?</strong><br><br>
                      最後倒數30秒只要有人下標，系統結標時間會再延長20秒，如果同一瞬間有多人下標，時間就會一起累計為20秒*下標數。如果同時有多人使用自動下標，
                      系統即為2位以上的競爭者同時瞬間進入相互持續下標的競賽中，拍賣結束的剩餘時間即延長為自動下標設定的標數* 20秒；若你是最後一位出價者，時間倒數0秒後無其他人再下標，你即為得標者。
                      <br><br>
                    </li>

                    <li><strong>如何知道正確的結標時間?</strong><br><br>
                      我們的結標時間是動態的，沒有固定時間。倒數30秒只要每有人下一標就會增加20秒，讓其他對標的物有興趣的人，還有挑戰的機會。這20秒內無人再投標，你即是贏家，30秒內有人再下標就再增加20秒，熱門商品因此可能結標時間會拉長很多。
                      <br><br>
                      如果同一瞬間有多人下標，時間就會一起累計為20秒*下標數。如果同時有多人使用自動下標，系統即為2位以上的競爭者同時瞬間進入相互持續下標的競賽中。拍賣結束的剩餘時間即延長為自動下標設定的標數* 20秒。競標時消費的點數，是無法退還的。
                      <br><br>
                    </li>

                    <li>
                      <strong>得標者的結標金額怎麼算?</strong><br><br>
                      結標金額為你實際付出金額，但競標過程所消費的點數，也是你獲得此商品的成本之一。
                        例：A B C商品的最後得標者是你，且結標價為$941000，但你過程可能花掉50點的點數，
                        因此你付出的成本為：941000元（得標後付）+ 50點*30000元（預先買點數才能參加競標）= 2,441,000元。
                        <br><br><br>
                        若你最後沒贏得拍賣，你所消費的點數50點* 30000元=1500000元，是無法退還的。
                        這是一個純競標的服務，也是可以提供如此低價商品的原因，與一般拍賣網站有所不同。請確認你認同本賣場的競標方式，再加入會員或購買點數喔!
                        <br><br>
                    </li>

                    <li>
                      <strong>競標暱稱與會員ID為何不同?</strong><br><br>

                      為減少會員的競標爭議或惡意攻擊及維持競標的公平性，系統將以「競標暱稱」代表您的拍賣身份，當會員每成功得標一次，
                        系統即會重新配發一組新的「暱稱」代號供會員下回競標使用，會員登入ID則為您固定不變的會員身份。<br><br>
                        提醒您，於商品競標結束後，下標紀錄中的會員資料也將由暱稱恢復為會員ID。
                        <br><br>

                    </li>

                    <li>
                      <strong>可以退出已參與的競標，改下標其他商品嗎?</strong><br><br>
                      不行，為維持賣場競標的公平性，同一時間每個用戶僅能參與兩場拍賣，需等到其中一場拍賣結束後，
                        方能進行下一場拍賣。成功得標後系統仍將隨機配發一組新的暱稱繼續參與競標。
                        <br><br>
                    </li>

                    <li>
                      <strong>可查詢我曾下標的所有紀錄嗎?</strong><br><br>
                      您可在【會員專區 】中的【出價紀錄】查詢您曾下標的所有紀錄。
                      <br><br>
                    </li>

                    <li>
                      <strong>為何進入0秒結標，還會有人出價?</strong><br><br>
                      因每位會員使用的網路頻寬速度不同，為維持競標的公平性，系統的確會在0秒之後保留一小段時間處理於0秒時送入系統的下標資料，
                        再反應最後是否結標。也就是說，保留這段時間的長短，會依發生當時資料筆數與系統處理資科的速度而定，無法訂定實際秒數。
                        <br><br>
                        然而，
                        這段緩衝時間並非投標時間，若有用戶利用0秒後的時間進行投標，此非系統提供之正式功能，無法保證0秒後投入的點數可以被接受。
                        <br><br>
                    </li>

                    <li>
                      <strong>為何有人會以超過市價的價格結標?（0%結標商品）</strong><br><br>
                        熱門商品的參與競標者較多，當會員長時間競標互不放棄時，有時結標付出的金額會超過市價（依會員總投入點時而定），
                        通常0 %結標商品，可能的原因為會員已投入不少點數與時間參與該競標物，即使已超過市價，卻不願放棄 。
                        <br><br>
                        再次重申，所有競標商品從開始至結束本公司保證絕無介入任何拍賣行為的操作，所有的競標結果均取決於用戶們的投標行為，相同商品結標價格有高有低，均端看該商品的在當日的競爭狀態。
                        <br><br>
                        提醒您，進行連續下標或長時間競標時，您所支付的費用有可能超出市場價格，故請謹慎考量可投標成本。
                        <br><br>
                    </li>

                    <li>
                      <strong>若遇到伺服器當機，後續如何處理呢?</strong><br><br>
                      如果 遇到伺服機當機狀況，相關競標處理原則分兩種：
                      1.就可歸責於本公司服務系統營運所導致之競標 異常處理原則
                      <br>
                      -  得標者資格保留，正常出貨。
                      <br>
                      -  非得標者會員所使用之點數，全數退還。
                      <br><br>
                      2 .就非可歸責 於本公司服務系統營運所生之競標異常處理原則(如：DNS系統異常、駭客攻擊等)
                      <br>
                      -  得標者資格無效，物件流標。
                      <br>
                      -  得標者及非得標者會員所使用之點數，全數退還。
                      <br><br>
                    </li>

                    <li>
                      <strong>系統異常時，如何處理?</strong><br><br>
                      本網站有可能因網路擁塞或遭第三方惡意攻擊，導致暫時無法使用服務。為排除異常與恢復系統，
                      我們有可能暫時停止服務。競標中的拍賣，會從異常發生當時的狀態、或還原至更往前一些時間的狀態繼續競標。
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
                    自動下標
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
                    <strong>何謂自動下標?</strong><br><br>
                    自動下標可透過自行設定要下標的上下限金額 區間，然後由系統代替你進行自動下標的功能。請注意，如同一場拍賣內有其他人也設定自動下標，系統會持續下標，直到達到設定的上限金額。
                    提醒您，每次設定自動下標的最 高次數為100次。 詳情請參閱【自動投標功能的說明 】
                    我們有可能暫時停止服務。競標中的拍賣，會從異常發生當時的狀態、或還原至更往前一些時間的狀態繼續競標。
                    <br><br>
                  </li>

                  <li>
                    <strong>使用自動下標，為何點數一下就沒了?</strong><br><br>
                    在高價商品的競標，有許多會員會使用自動下標功能。當同一價格區間內，有多人都設定了自動下標時，系統會為這些會員在同一秒內同時進入相互持續下標的競賽中，
                    您可在拍賣結束後的下標紀錄中查詢。拍賣結束的剩餘時間即延長為自動下標設定的標數* 20秒，您的點數也因此會在短時間內消耗，建議您慎選使用自動下標的時機。
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
                    關於I-Bid
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
                    <strong>網路上有人說I-Bid是騙人的?</strong><br><br>
                     I-Bid提供三大保證，誓言以公平、公正的方式經營本拍賣服務。
                     <br>
                     【100%合法競標，行政院公平委員會查核】
                     <br>
                     【無人為介入任一拍賣】
                     <br>
                     【出貨資訊全面透明化】
                    <br><br>
                  </li>

                  <li>
                    <strong>網站是否蓄意抬高得標金額?</strong><br><br>
                    本公司以誠信服務為商譽，保證絕無介入任何拍賣行為的操作，也無任何機器人程式，所有帳號都有完整真實的個人資料紀錄，絕無做假。
                    如有會員以不實資料登入註冊，為保護其他會員的權益，我們將取消其帳號，相關點數亦不退還。商品開始拍賣後，一切由競標用戶決定拍賣結果。
                    <br><br>
                  </li>

                  <li>
                    <strong>下標的點數均無法退還，你們是暴利集團?</strong><br><br>
                     I-Bid部分熱門商品拍賣的點數所得可能會超過市價，但多數商品拍賣的點數所得也遠低於市價。本公司是取前述兩者間平衡後的利潤，況且本公司仍需支出行銷、
                      系統 建置、營運費用，並非僅單純地自消費者取得購買點數之利益。故消費者於I-Bid購買代幣並無可能造成本公司所謂不合理獲利之情形 。
                    <br><br>
                  </li>

                  <li>
                    <strong>如何確認拍賣的公平性?</strong><br><br>
                    為維護拍賣的公正性，I-Bid嚴格禁止會員進行以下行為：
                    <br>
                    1.以個人身份註冊並使用多組帳號。
                    <br>
                    2.以家人或其他人的名義，註冊並使用多組帳號。
                    <br>
                    3.與其他會員違法合作進行競標。
                    <br>
                    4.其他影響或危害競標公平性的行為。
                    <br><br>
                    經查證，若會員使用多組帳號或進行危害 競標公平性的行為，我們將立即停權 。會員所得標的權利 將被取 消。所消費的點數與帳戶餘額的點數，將不被退還。若以違反 服務使用條款 的方式贏得競標，並取 得商品，我們將提起法  律訴訟追回商品或賠償損失。
                    <br><br>
                  </li>

                  <li>
                    <strong>有問題想要詢問，如何與您們聯繫?</strong><br><br>
                    請到【 聯繫 我們】說明您的問題。若您已經是I-Bid的會員，請於問題內容中提供您的會員帳號。我們將在收到您的問題後，於兩個工作天內以Email書面完整回覆。
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
                    點數問題
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
                    <strong>購買I-Bid代幣的付款方式?</strong><br><br>
                    您可使用ATM轉帳方式購買I-Bid點數。ATM付款方式因需等待銀行繳款通知確認，購買後工作人員核對完將立即匯入你的點數。
                    <br><br>
                  </li>

                  <li>
                    <strong>I-Bid代幣是否有使用期間?</strong><br><br>
                    本服務所購買的I-Bid代幣，未設有效期限，請安心購買。
                    <br><br>
                  </li>

                  <li>
                    <strong>如何確認目前所持有的I-Bid代幣?</strong><br><br>
                    在會員登入狀態下，畫面右上方的地方即有顯示I-Bid代幣，可進行確認。
                    <br><br>
                  </li>

                  <li>
                    <strong>什麼是免費點數?</strong><br><br>
                    免費點數是I-Bid在各式活動中贈送給會員的點數，與用戶付費購買的I-Bid代幣來源不同，但同樣可使用於I-Bid下標。
                    <br><br>
                  </li>

                  <li>
                    <strong>免費點數的使用規範有哪些?</strong><br><br>
                    1.免費點數的使用需在會員完成首次點數包購買後，免費點數方具使用資格。
                    <br>
                    2.使用於I-Bid競標時，系統將優先消耗會員帳戶內的免費點數，使用完畢後，再開始扣除會員的付費I-Bid代幣。
                    <br>
                    3.免費點數的使用期限為系統撥放後的30日內需使用完畢，逾期未使用完則失效視同棄權。但30日內如有再次獲得免費點數或購買I-Bid代幣，免費點數之有效期限將再次更新。
                    <br>
                    4.免費點數僅限會員本人使用，不可轉贈他人且不得合併於其他會員帳戶。
                    <br>
                    5.免費點數為本公司贈送之無料商品不可折現、亦不得要求退費。
                    <br><br>
                  </li>

                  <li>
                    <strong>如何獲得免費點數?</strong><br><br>
                    獲得免費點數最快的方法就是參與I-Bid的【贏家分享】活動。凡成功得標商品的會員，於收到商品後即可透過下列方式參與贏家分享活動投稿【直接上傳】
                    <br>
                    1.登入I-Bid後，至「會員專區 > 已得標的」，找到您欲投稿的得標商品。
                    <br>
                    2.點擊商品下的「贏家分享」按鈕，開啟投稿功能。
                    <br>
                    3.請輸入贏家心得感言，並附上照片（.jpg檔案 ），然後按「送出」完成投稿。
                    <br><br>
                    當I-Bid收到您的投稿後，會在三個工作天內進行審核，經確認無誤即會將您的投稿內容上傳至I-Bid【贏家見證】單元，同時發送免費點數給您。
                    <br>
                    1.凡提供文字心得+照片，經審核成功上傳者，I-Bid將提供5pt免費點數回饋。
                    <br><br>
                    在投稿之前，請務必留意以下投稿規範，感謝您的配合：
                    <br>
                    1.贏家分享僅受理得標實體商品投稿，非實體商品（例如點數包）不在受理投稿的範圍內。
                    <br>
                    2.照片中需為得標者本人與得標商品合照，不得由小朋友 代為入鏡。
                    <br>
                    3.為增加贏家分享見證之公信度，入鏡者不得遮臉，五官需清楚入鏡。
                    <br>
                    4.請在收到得標商品後再來投稿，不得以其他物品或方式代替應該入鏡的得標商品。
                    <br><br>
                  </li>

                  <li>
                    <strong>已購買的I-Bid代幣未使用完，可以退款嗎?</strong><br><br>
                    會員於購買本服務點數後七日內，針對七日內已購買而未使用完之剩餘點數，
                    可向本公司請求退費，惟本公司贈送之免費點數或會員於投標中所使用之點數則不在此限。
                    <br><br>

                    提醒您，若為會員透過競標得標的點數包，凡經使用本公司亦不提供退費。
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
                商品與寄送
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
                    <strong>得標後的後續流程</strong><br><br>
                    在【會員專區】中，選擇【已得標】即會顯示該得標商品的購買方法與結帳選項，請依畫面指示進行結帳。提醒您，請於商品得標後14天內完成商品購買，逾期將喪失得標資
                    <br><br>
                  </li>

                  <li>
                    <strong>商品是從哪裡出貨?</strong><br><br>
                    本賣場商品大多均來自其他線上購物中心及通路配合廠商訂購出貨。提醒您，本公司僅提供競標商品主機，其餘購物中心或通路廠商所提供之贈品並非包含在競標商品內容中。
                    <br><br>
                  </li>

                  <li>
                    <strong>商品的付款方式有哪些?</strong><br><br>
                    為防止有心人士不當使用本服務，購買結標商品僅能使用貨到付款為唯一付款方式。
                    <br><br>
                  </li>

                  <li>
                    <strong>是否會開立發票?</strong><br><br>
                    會員在本網站所購買的點數與商品，我們均提供會員紙本發票，發票將固定每兩週寄送一次。
                    <br><br>
                  </li>

                  <li>
                    <strong>需支付運費/處理費嗎?</strong><br><br>
                    賣場所有商品，均會一律收取100000元作業處理費。
                    <br><br>
                  </li>

                  <li>
                    <strong>商品大約多久可送達?</strong><br><br>
                    在您結帳後約7 ~ 14日内即可送達。若因庫存狀況延誤寄送，將另行連絡告知。
                    <br><br>
                  </li>

                  <li>
                    <strong>商品顏色該如何提出需求?</strong><br><br>
                    若您得標的商品是可供挑選顏色的，請記得於購買商品後三日內，至【聯繫我們】提出顏色需求，屆時我們將依您的需求提供商品給您。若無法於三日內提出顏色需求，本公司將隨機出貨。
                    <br><br>
                  </li>

                  <li>
                    <strong>商品可寄送國外嗎?</strong><br><br>
                    目前I-Bid僅提供越南的寄送服務。若您是海外用戶，請您提供越南親朋好友之寄送地址代為收貨
                    <br><br>
                  </li>

                  <li>
                    <strong>得標的商品有何保證?</strong><br><br>
                    I-Bid所上架的商品均為新品，保固內容均依出貨廠商規定，另因商品種類繁多，部分商品以網路登錄方式替代保固書。若有任何問題請至【聯繫我們】來信詢問。
                    <br><br>
                  </li>

                  <li>
                    <strong>可以索取I-Bid採購商品的發票來參加原廠舉辦的活動嗎?</strong><br><br>
                    凡會員得標商品並完成付款後所 取得的發票，為會員於I-Bid平台上「 支付金額購買得標商品」的消費行為所開立的。
                    至於本公司採購商品（進貨）的發票，為公司內部會計作帳使用，恕無法另行提供給會員。
                    <br>
                    因此，假設您得標了某款手機，後續手機廠商舉辦參加抽獎活動，活動辦法規定須回傳商品發票，很抱歉 您是無法向本公司申請採購（進貨）該款手機的發票來參加抽獎活動，不便之處敬請見諒。
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
                    會員帳號問題
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
                    <strong>忘記帳號ID</strong><br><br>
                    請按「 忘記帳號密碼 」申請補發。
                    <br><br>
                  </li>

                  <li>
                    <strong>忘記密碼</strong><br><br>
                    請按「 忘記帳號密碼 」申請補發。
                    <br><br>
                  </li>

                  <li>
                    <strong>想變更帳號ID</strong><br><br>
                    抱歉，I-Bid的帳號ID無法更改。
                    <br><br>
                  </li>

                  <li>
                    <strong>想變更密碼</strong><br><br>
                    請到【會員專區】中的【基本資料】進行更改。
                    <br><br>
                  </li>

                  <li>
                    <strong>想變更基本資料</strong><br><br>
                    請到【聯繫我們】提出申請進行更改。
                    <br><br>
                  </li>

                  <li>
                    <strong>未收到認證通知信</strong><br><br>
                    部分信箱有可能將通知信分類至垃圾信匣，導致信件本身無法正常收到，
                    若仍無法收到認證通知信，建議您改用其他的信箱試試
                    <br><br>
                  </li>

                </ol>
            </div>
        </div>
    </div>
</section>
@endsection