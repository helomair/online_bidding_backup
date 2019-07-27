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
                    <a href="{{ route('index') }}">
                        <img src="{{ URL::to('/') }}/images/1409806_0701_logo.svg" alt="Mobirise" title="">
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height:50px; background-color:#f3f3f3; border-radius:5px 0 0 5px; box-shadow:12px 7px 2px #b7b7b7; width:100%;">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
				@guest
                <li class="nav-item" style="border-right:5px solid #dc3545; border-radius:5px;">
                    <a class=" display-7 hover-a" href="{{ route('login') }}">
                        Đăng nhập
                    </a>
                </li>
                <li class="nav-item" style="border-right:5px solid #ff8507; border-radius:5px;">
                    <a class=" display-7 hover-b" href="{{ route('register.confirm') }}" >
                        Đăng ký
                    </a>
                </li>
				@endguest
                @auth
                <li class="nav-item" style="border-right:5px solid #dc3545; border-radius:5px;">
                    <a href="" class=" display-7 hover-a" >{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item" style="border-right:5px solid #ff8507; border-radius:5px;">
                    <a href="{{route('coin')}}" class=" display-7 hover-b" >{{ Auth::user()->balance }}cái đồng xu</a>
                </li>
				        <li class="nav-item" style="border-right:5px solid #ffc107; border-radius:5px;">
					             <a class=" hover-c display-7" href="{{ route('user_interface') }}" >Khu dành riêng cho hội viên</a>
                </li>
                @if(Session::get('adm_on') != 0)
				        <li class="nav-item" style="border-right:5px solid #28a745; border-radius:5px;">
					             <a class=" hover-d display-7" href="{{ route('adm_Product') }}" >Quản lý</a>
                </li>
                @endif
				<!--比較安全的登出方式不然直接把Route裡面logout從POST改成GET就好了-->
				<li class="nav-item" style="border-right:5px solid #34abff; border-radius:5px;">
					<a class="hover-e display-7"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Thoát ra</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
					</form>
				</li>
				@endauth
            </ul>

        </div>
    </nav>
</section>
