<section class="menu cid-rsuh8SdWp4" once="menu" id="menu2-8">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo black font-size-40">
                    <a href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height:50px; background-color:#434343; border-radius:5px 0 0 5px; box-shadow:12px 7px 2px #b7b7b7;">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
				@guest
                <li class="nav-item">
                    <a class="nav-link link  display-7" href="{{ route('login') }}" style="color:white!important;">
                        登入
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-7" href="{{ route('register') }}" style="color:white!important;">
                          註冊
                    </a>
                </li>
				@endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link link  display-7 " style="color:white!important;">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-7" style="color:white!important;">{{ Auth::user()->balance }}代幣</a>
                </li>
				<li class="nav-item">
					<a class="nav-link link text-black display-7" href="{{ route('user_interface') }}" style="color:white!important;">會員專區</a>
                </li>
                @if(Session::get('adm_on') != 0)
				<li class="nav-item">
					<a class="nav-link link text-black display-7" href="{{ route('adm_Product') }}" style="color:white!important;">管理</a>
                </li>
                @endif
				<!--比較安全的登出方式不然直接把Route裡面logout從POST改成GET就好了-->
				<li class="nav-item">
					<a class="nav-link link text-black display-7" style="color:white!important;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">登出</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
					</form>
				</li>
				@endauth
            </ul>

        </div>
    </nav>
</section>
