<?php
$url = URL::current();
$tok_str = strtok($url,"/");
for($i=0;$i<3;$i++){
	$tok_str = strtok("/");
}
?>

<section class="cid-rsuhG4Y4Z6 margin-top-50 row space-around" id="footer1-f" style="background-color:white;">
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" >
		<a href="{{ route('aboutus') }}" class="pb-3 nav-font">
			商品管理
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" >
		<a href="{{ route('aboutus') }}" class="pb-3 nav-font">
			會員管理
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" >
		<a href="{{ route('aboutus') }}" class="pb-3 nav-font">
			公告管理
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" >
		<a href="{{ route('aboutus') }}" class="pb-3 nav-font">
			加值紀錄
		</a>
	</div>
</section>



<!--nav class="nav nav-pills nav-fill margin-top-100" style="background-color:#e5f0f7d9;">
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'product') echo "active";?>" href="{{ route('adm_Product') }}">商品管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'account') echo "active";?>" href="{{ route('adm_Account') }}">會員管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'bulletin') echo "active";?>" href="{{ route('adm_Bulletin') }}">公告管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'save') echo "active";?>" href="{{ route('adm_Save') }}">加值紀錄</a>
</nav-->
