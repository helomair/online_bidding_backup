<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
  <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
	  @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">登入</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">註冊</a>
      </li>
	  @endguest
	  @auth
	  <!--比較安全的登出方式不然直接把Route裡面logout從POST改成GET就好了-->
      <li class="nav-item">
        <a class="nav-link" href="#" >{{ auth()->user()->name }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
		onclick="event.preventDefault();document.getElementById('logout-form').submit();">登出</a>
	    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	    </form>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#">會員專區</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#">管理</a>
	  </li>
	  @endauth
	  <li class="nav-item">
		<a class="nav-link" href="#">聯絡我們</a>
	  </li>
	</ul>
  </div>
</div>
</nav>