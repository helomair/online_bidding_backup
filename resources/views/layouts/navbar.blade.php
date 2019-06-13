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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
				@guest
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{ route('login') }}">
                        登入
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{ route('register') }}">
                          註冊
                    </a>
                </li>
				@endguest
				@auth
				<li class="nav-item">
					<a class="nav-link link text-black display-4" href="{{ route('user_interface') }}">會員專區</a>
				</li>
				@if(auth()->user()->is_adm == 1)
				<li class="nav-item">
					<a class="nav-link link text-black display-4" href="{{ route('adm_Product') }}">管理</a>
				</li>
				@endif
				<!--比較安全的登出方式不然直接把Route裡面logout從POST改成GET就好了-->
				<li class="nav-item">
					<a class="nav-link link text-black display-4" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">登出</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
					</form>
				</li>
				@endauth
            </ul>

        </div>
    </nav>
</section>