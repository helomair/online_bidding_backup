<?php 
$url = URL::current(); 
$tok_str = strtok($url,"/");
for($i=0;$i<3;$i++){
	$tok_str = strtok("/");
}
?>
<nav class="nav nav-pills nav-fill " style="background-color:#e5f0f7d9;">
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'product') echo "active";?>" href="{{ route('adm_Product') }}">商品管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'account') echo "active";?>" href="{{ route('adm_Account') }}">會員管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'bulletin') echo "active";?>" href="{{ route('adm_Bulletin') }}">公告管理</a>
	<a class="nav-item nav-link col-lg-3 <?php if($tok_str == 'save') echo "active";?>" href="{{ route('adm_Save') }}">加值紀錄</a>
</nav>