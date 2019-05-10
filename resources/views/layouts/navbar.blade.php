<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">公告系統</a>
      </li>
	  @auth
      <li class="nav-item">
        <a class="nav-link" href="#">站內文件</a>
      </li>
	  @endauth
	  @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">登入</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">註冊</a>
      </li>
	  @endguest
	  @auth
	  <!--比較安全的登出方式
	  不然直接把Route裡面logout從POST改成GET就好了-->
      <li class="nav-item">
	  
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
	          onclick="event.preventDefault();
			  document.getElementById('logout-form').submit();">
		  登出
		  </a>
        </div>
      </li>
	  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	  </form>
	  @endauth
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>