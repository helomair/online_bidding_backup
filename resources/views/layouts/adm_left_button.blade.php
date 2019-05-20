<?php 
$url = URL::current(); 
$tok_str = strtok($url,"/");
for($i=0;$i<3;$i++){
	$tok_str = strtok("/");
}
?>
<nav class="nav nav-pills nav-fill margin-top-100 mx-auto width-75-percent border">
	<a class="nav-item nav-link <?php if($tok_str == 'product') echo "active";?>" href="{{ route('adm_Product') }}">商品管理</a>
	<a class="nav-item nav-link <?php if($tok_str == 'account') echo "active";?>" href="{{ route('adm_Account') }}">會員管理</a>
	<a class="nav-item nav-link <?php if($tok_str == 'bulletin') echo "active";?>" href="{{ route('adm_Bulletin') }}">公告管理</a>
	<a class="nav-item nav-link <?php if($tok_str == 'save') echo "active";?>" href="{{ route('adm_Save') }}">加值紀錄</a>
</nav>