<?php
$url = URL::current();
$tok_str = strtok($url,"/");
for($i=0;$i<3;$i++){
	$tok_str = strtok("/");
}
?>

<section class="cid-rsuhG4Y4Z6 margin-top-50 row col-lg-12 justify-content-center" id="footer1-f" style="background-color:white;">
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="border-right:5px solid #941f1fa3;">
		<a href="{{ route('adm_Product') }}" class="pb-3 nav-font-a">
			Quản lý sản phẩm  <!-- 商品管理 -->
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="border-right:5px solid #941f1fa3;">
		<a href="{{ route('adm_Account') }}" class="pb-3 nav-font-b">
			Quản lý công bố  <!-- 會員管理 -->
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="border-right:5px solid #941f1fa3;">
		<a href="{{ route('adm_Bulletin') }}" class="pb-3 nav-font-c">
			Quản lý hội viên  <!-- 公告管理 -->
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="border-right:5px solid #941f1fa3;">
		<a  href="{{ route('adm_Save') }}" class="pb-3 nav-font-d">
			Số lượt nạp tiền  <!-- 加值紀錄 -->
		</a>
	</div>
</section>



<!--nav class="nav nav-pills nav-fill margin-top-100" style="background-color:#e5f0f7d9;">
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'product') echo "active";?>" href="{{ route('adm_Product') }}">商品管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'account') echo "active";?>" href="{{ route('adm_Account') }}">會員管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'bulletin') echo "active";?>" href="{{ route('adm_Bulletin') }}">公告管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'save') echo "active";?>" href="{{ route('adm_Save') }}">加值紀錄</a>
</nav-->
