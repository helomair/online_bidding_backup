<nav class="nav nav-pills nav-fill margin-top-100 mx-auto width-75-percent border">
	<?php $url = URL::current(); ?>
	<a class="nav-item nav-link <?php if(substr($url,-3) == 'adm') echo "active";?>" href="{{ route('adm_Product') }}">商品管理</a>
	<a class="nav-item nav-link <?php if(substr($url,-3) == 'unt') echo "active";?>" href="{{ route('adm_Account') }}">會員管理</a>
	<a class="nav-item nav-link <?php if(substr($url,-3) == 'tin') echo "active";?>" href="{{ route('adm_Bulletin') }}">公告管理</a>
	<a class="nav-item nav-link <?php if(substr($url,-3) == 'ave') echo "active";?>" href="{{ route('adm_Save') }}">加值紀錄</a>
</nav>