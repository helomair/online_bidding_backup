<div class="col-lg-2">
	<?php $url = URL::current(); ?>
	<div class="list-group margin-top-50">
	  <a href="{{ route('adm_Product') }}" class="list-group-item <?php if(substr($url,-3) == 'adm') echo "active";?>">商品管理</a>
	  <a href="{{ route('adm_Account') }}" class="list-group-item <?php if(substr($url,-3) == 'unt') echo "active";?>">會員管理</a>
	  <a href="{{ route('adm_Bulletin') }}" class="list-group-item <?php if(substr($url,-3) == 'tin') echo "active";?>">公告管理</a>
	</div> 
</div>