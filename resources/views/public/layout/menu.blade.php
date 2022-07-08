<div class="menu navbar navbar-static-top header-logo-center-menu-below oxy-mega-menu text-caps" id="masthead">
    <div class="logo-navbar container-logo">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="shop-index.html"> <img alt="Lambda Theme - Shop" src="{{asset('public')}}/assets/images/shop/lambda-shop.png"> </a>
                <div class="logo-sidebar"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav-container clearfix">
            <nav class="collapse navbar-collapse main-navbar">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item dropdown @if(Route::currentRouteName() == 'home') active @endif"> <a href="{{route('home')}}">خانه</a> </li>
                        <li class="menu-item dropdown @if(Route::currentRouteName() == 'showCategory') active @endif "> <a href="{{route('showCategory')}}">دسته بندی</a>
                            <ul class="dropdown-menu dropdown-menu-left ">
                                <li class="menu-item"> <a href="">Flexslider</a> </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown @if(Route::currentRouteName() == 'contact') active @endif "> <a href="{{route('contact')}}">تماس با ما</a> </li>
                        <li class="menu-item dropdown @if(Route::currentRouteName() == 'FAQ') active @endif "> <a href="{{route('FAQ')}}">پرسش و پاسخ متداول</a> </li>
                        <li class="menu-item dropdown @if(Route::currentRouteName() == 'TR') active @endif "> <a href="{{route('TR')}}">قوانین و مقررات</a> </li>
                    </ul>
                </div>
                @include('public.layout.basket')
            </nav>
        </div>
    </div>
</div>
