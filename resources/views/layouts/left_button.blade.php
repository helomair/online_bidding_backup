<?php
$url = URL::current();
$tok_str = strtok($url,"/");
for($i=0;$i<2;$i++){
	$tok_str = strtok("/");
}
?>

<section class="cid-rsuhG4Y4Z6 margin-top-50 row col-lg-12 space-around" id="footer1-f" style="background-color:white;">
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="margin-top:10px;">
		<a href="{{ route('user_interface') }}" class=" nav-font-a">
			進行中拍賣
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="margin-top:10px;">
		<a href="{{ route('closed') }}" class=" nav-font-b">
			已結標拍賣
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="margin-top:10px;">
		<a  href="{{ route('bid.rule') }}" class="nav-font-c">
			拍賣規則
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="margin-top:10px;">
		<a onclick="alert('功能尚未完成，敬請期待');" class="nav-font-d">
			分享區
		</a>
	</div>
	<div class="col-2 footer-rwd mbr-fonts-style display-7 text-align-center" style="margin-top:10px;">
		<a  href="{{ route('account') }}" class="nav-font-e">
			帳戶狀態
		</a>
	</div>
</section>




<!--nav class="nav nav-pills nav-fill margin-top-100 cursor-pointer" style="height:50px; line-height:48px; ">
    <a class="nav-item font-line col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("user","bidding"))) echo "active";?>" href="{{ route('user_interface') }}" >進行中拍賣</a>
    <a class="nav-item  font-line col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("closed"))) echo "active";?>" href="{{ route('closed') }}" >已結標拍賣</a>
    <a class="nav-item  font-line	col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("account"))) echo "active";?>" href="{{ route('account') }}" >帳戶狀態</a>
</nav-->
