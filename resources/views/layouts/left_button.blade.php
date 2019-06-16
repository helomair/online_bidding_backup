<?php
$url = URL::current();
$tok_str = strtok($url,"/");
for($i=0;$i<2;$i++){
	$tok_str = strtok("/");
}
?>
<nav class="nav nav-pills nav-fill margin-top-100 cursor-pointer" >
    <a class="nav-item nav-link col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("user","bidding"))) echo "active";?>" href="{{ route('user_interface') }}" >進行中拍賣</a>
    <a class="nav-item nav-link col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("closed"))) echo "active";?>" href="{{ route('closed') }}" >已結標拍賣</a>
    <a class="nav-item nav-link col-lg-4 border-radius-0 <?php if(in_array($tok_str,array("account"))) echo "active";?>" href="{{ route('account') }}" >帳戶狀態</a>
</nav>
