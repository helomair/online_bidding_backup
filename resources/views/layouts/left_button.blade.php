<?php 
$url = URL::current(); 
?>
<nav class="nav nav-pills nav-fill margin-top-100 mx-auto width-75-percent border">
    <a class="nav-item nav-link <?php if(substr($url,-3) == 'ser') echo "active";?>" href="{{ route('user_interface') }}">進行中拍賣</a>
    <a class="nav-item nav-link <?php if(substr($url,-3) == 'sed') echo "active";?>" href="{{ route('closed') }}">已結標拍賣</a>
    <a class="nav-item nav-link <?php if(substr($url,-3) == 'adm') echo "active";?>" href="#">帳戶狀態</a>
    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>