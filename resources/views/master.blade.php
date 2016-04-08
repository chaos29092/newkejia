<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en">

    <link rel="stylesheet" type="text/css" href="{{asset('css\main.css')}}" media="screen">
    <script src="{{asset('js/kejia.js')}}" type="text/javascript"></script>

    <title>Title</title>
    <meta name="keywords"
          content="carbolite, industrial oven, laboratory oven, tube furnace, chamber furnace, carbolite gero">
    <meta name="description"
          content="CARBOLITE GERO is a world leading manufacturer of high temperature furnaces up to 3000°C and ovens for laboratory, research & process applications.">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
</head>

<body>
<div class="frame grid-container grid-parent">
    <!-- Top Area -->
    <div class="top-area sidebar-column grid-parent grid-25 tablet-grid-25 mobile-grid-80">
        <a class="logo" href="/"><span>Carbolite Gero Ltd.</span></a>
    </div>
    <div class="top-area grid-parent mobile-grid-20 hide-on-tablet hide-on-desktop">
        <a class="mobile-nav-button" href="home.html#mobile-nav">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="top-area main-column with-sidebar grid-parent grid-75 tablet-grid-75">
        <div class="header grid-parent grid-100 tablet-grid-100 hide-on-mobile">
            <div class="widgets">
                {{--<form class="search" method="get" action="http://www.carbolite-gero.com/search/">--}}
                    {{--<input type="hidden" name="nocache" value="1">--}}
                    {{--<input type="text" class="search-input" name="search">--}}
                    {{--<button type="submit" class="search-button">Search</button>--}}
                {{--</form>--}}
                <div class="language">
                    <ul>
                        <li class="label"><span>English</span></li>
                        <li class="current"><a href="home/index.html">English</a></li>
                        <li><a href="http://www.carbolite-gero.de/de/">Deutsch</a></li>
                        <li><a href="http://www.carbolite-gero.fr/fr/">Fran&ccedil;ais</a></li>
                        <li><a href="http://www.carbolite-gero.it/it/">Italiano</a></li>
                        <li><a href="http://www.carbolite-gero.jp/jp/">日本語</a></li>
                        <li><a href="http://www.carbolite-gero.cn/cn/">&#20013;&#25991;</a></li>
                        <li><a href="http://www.carbolite-gero.ru/ru/">
                                &#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;</a></li>
                        <li><a href="http://www.carbolite-gero.pl/pl/home/">Polski</a></li>
                        <li><a href="http://www.carbolite-gero.ro/ro/">Română</a></li>
                        <li><a href="http://www.carbolite-gero.cz/cz/">Česky</a></li>
                        <li><a href="http://www.carbolite-gero.nl/nl/home/">Nederlands</a></li>
                        <li><a href="http://www.carbolite-gero.sk/sk/">Slovensky</a></li>
                        <li><a href="http://www.carbolite-gero.bg/bg/">Български</a></li>
                        <li><a href="http://www.carbolite-gero.hu/hu/kezdolap/">Magyar</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav">
                <ul>
                    <li @if(url()->current()=='http://'.$_SERVER['SERVER_NAME'])class="current"@endif><a
                                href="/">Home</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/products'))class="current"@endif><a
                                href="/products">Products</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/contact-service'))class="current"@endif><a
                                href="/contact-service">Contact & Service</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/news'))class="current"@endif><a
                                href="/news">News</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/company'))class="current"@endif><a
                                href="/company">Company</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/downloads'))class="current"@endif><a
                                href="/downloads">Downloads</a></li>
                </ul>
            </nav>

        </div>
        <nav class="breadcrumbs grid-100 tablet-grid-100">
            <ul>
                <li><a href="/">Carbolite</a></li>
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/products'))
                    <li><a href="/products">Products</a></li>
                    @yield('breadcrumbs')
                @endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/contact-service'))<li><a href="/contact-service">Contact & Service</a></li>@endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/news'))<li><a href="/news">News</a></li>@endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/company'))<li><a href="/company">Company</a></li>@endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/downloads'))<li><a href="/downloads">Products</a></li>@endif

            </ul>
        </nav>
    </div>


    @yield('content')
            <!-- Mobile Navigation -->
    <div id="mobile-nav" class="mobile-nav grid-parent mobile-grid-100 hide-on-tablet hide-on-desktop">
    </div>

    <!-- Footer Area -->
    <div class="footer-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent clear">
        <div class="grid-15 tablet-grid-15 hide-on-mobile">
            <ul>
                <li><a href="products/index.html">Products</a></li>
            </ul>
        </div>
        <div class="grid-15 tablet-grid-15 hide-on-mobile">
            <ul>
                <li><a href="applications/index.html">Applications</a></li>
                <li><a href="applications/industries/index.html">Industries</a></li>
                <li><a href="applications/heating-applications/index.html">Heating Applications</a></li>
            </ul>
        </div>
        <div class="grid-15 tablet-grid-15 mobile-grid-100">
            <ul>
                <li><strong><a href="https://advancedweb.verder-scientific.com/">AdvancedWeb</a></strong></li>
                <li>&nbsp;</li>
                <li><a href="siteservice/imprint/index.html">Imprint</a></li>
                <li><a href="siteservice/sitemap/index.html">Sitemap</a></li>
            </ul>
        </div>
        <div class="part-of-vs prefix-5 grid-25 tablet-grid-25 mobile-grid-100">
            <a href="http://www.verder-scientific.com/"><img src="{{asset('img/footer-vs.png')}}"></a>
        </div>
    </div>

    <!-- Copyright Area -->
    <div class="copyright-area grid-100">
        &copy; 2016 Carbolite Gero Ltd.
    </div>

</div>

</body>
</html>