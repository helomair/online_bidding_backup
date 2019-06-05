<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
  <a class="navbar-brand black font-size-40" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
  <button class="navbar-toggler bg-blue" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
	  @guest
      <li class="nav-item">
        <a class="nav-link black" href="{{ route('login') }}">登入</a>
      </li>
      <li class="nav-item">
        <a class="nav-link black" href="{{ route('register') }}">註冊</a>
      </li>
	  @endguest
	  @auth
	  <!--比較安全的登出方式不然直接把Route裡面logout從POST改成GET就好了-->
      <li class="nav-item">
        <a class="nav-link black" href="#" >{{ auth()->user()->name }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link black" href="{{ route('logout') }}"
		onclick="event.preventDefault();document.getElementById('logout-form').submit();">登出</a>
	    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	    </form>
	  </li>
	  <li class="nav-item">
		<a class="nav-link black" href="{{ route('user_interface') }}">會員專區</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link black" href="{{ route('adm_Product') }}">管理</a>
	  </li>
	  @endauth
	</ul>
  </div>
</div>
</nav>