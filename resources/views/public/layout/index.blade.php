<!doctype html>
<html class="no-js" lang="">
    @include('public.layout.head')
<body class="pace-on pace-dot">
    <div class="pace-overlay"></div>
    @include('public.layout.topBar')
    @include('public.layout.menu')
    <div id="content" role="main">
        <article>
            @yield('content')
{{--            UPPER FOOTER--}}
            @include('public.layout.upperFooter')
{{--            UPPER FOOTER--}}
        </article>
        @include('public.layout.footer')
    </div>
    <a class="go-top go-top-square" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>
    <script type="text/javascript">
        var oxyThemeData = {
            navbarHeight: 130,
            navbarScrolled: 120,
            navbarScrolledPoint: 200,
            menuClose: 'off',
            scrollFinishedMessage: 'No more items to load.',
            hoverMenu:
                {
                    hoverActive: true,
                    hoverDelay: 200,
                    hoverFadeDelay: 200
                },
            siteLoader: 'on'
        };
    </script>
    <script src="{{asset('public')}}/assets/js/theme.min.js"></script>
    @yield('js')
</body>

</html>
