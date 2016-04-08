@extends('master')

@section('content')
        <!-- Banner Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">
    <div class="content grid-100">
        <div class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="5000">
                    <div class="item"><a href="products/vacuum-furnace/laboratory-furnaces/index.html"><img
                                    src="images/banner.jpg">

                            <div class="overlay textright"><span class="headline">3000°C&nbsp;Laboratory <br>Vacuum Furnace</span><span
                                        class="subline">- High vacuum and reactive gases available<br>- Graphite or metal insulation</span>
                            </div>
                        </a></div>
                    <div class="item"><a href="http://win.verder-scientific.com/"><img
                                    src="images/slider-start-competition_en.jpg">

                            <div class="overlay textright"><span class="headline"></span><span
                                        class="subline"></span>
                            </div>
                        </a></div>
                    <div class="item"><a
                                href="products/application-specific-furnaces/coal-coke-test-equipment/coal-ash-fusibility-test-furnace/index.html"><img
                                    src="images/slider-start-coal-ash-fusibility-furnace.jpg">

                            <div class="overlay textright"><span class="headline">New CAF G5 <br>Ash Fusibility Furnace</span><span
                                        class="subline">Advanced automatic analysis software</span></div>
                        </a></div>
                    <div class="item"><a
                                href="products/application-specific-furnaces/crystal-growth-furnaces/bridgman-crystal-growth-furnace/index.html"><img
                                    src="images/slider-start-bridgman-crystal-growth.jpg">

                            <div class="overlay textright"><span
                                        class="headline">Bridgman <br>Crystal Growth Furnace</span><span
                                        class="subline">ideal gradient for the Bridgman method <br>with temperature up to 1800°C</span>
                            </div>
                        </a></div>
                    <div class="item"><a
                                href="products/tube-furnace-range/rotary-tube-furnaces/htr-rotary-reactor-tube-furnaces/index.html"><img
                                    src="images/slider-start-laboratory-furnace-htr.jpg">

                            <div class="overlay textright"><span
                                        class="headline">Rotary Reactor <br>Tube Furnaces</span><span
                                        class="subline">for simultaneous heating and mixing</span>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Left Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <div class="content"><p><b>Carbolite Gero Limited</b><br> Parsons Lane, Hope, <br> Hope Valley, S33 6RB, UK<br>
            Tel: +44 (0) 1433 620011<br> <a href="mailto:info@carbolite-gero.com" class="mail"
                                            alt="Opens window for sending email">info@carbolite-gero.com</a></p>
        <hr>
    </div>
    <div class="content">
        <div id="home_companies">
            <img src="img/home_companies-placeholder.png" usemap="#home_companies_map">
            <map name="home_companies_map">
                <area name="verder-scientific" href="http://verder-scientific.com/" shape="poly"
                      coords="72,0,108,22,108,62,72,84,36,62,36,22">
                 
                <area name="carbolite" href="home/index.html" shape="poly"
                      coords="108,62,144,84,144,124,108,146,72,124,72,84">
                 
                <area name="eltra" href="http://eltra.com/eltra-elemental-analyzers/" shape="poly"
                      coords="72,124,108,146,108,186,72,208,36,186,36,146">
                 
                <area name="retsch" href="http://retsch.com/" shape="poly"
                      coords="144,124,180,146,180,186,144,208,108,186,108,146">
                 
                <area name="atm" href="http://atm-m.com/" shape="poly"
                      coords="36,186,72,208,72,248,36,270,0,248,0,208">
                 
                <area name="retsch-technology" href="http://retsch-technology.com/rt/solutions-in-particle-sizing/"
                      shape="poly" coords="108,186,144,208,144,248,108,270,72,248,72,208">
            </map>
        </div>
    </div>
    <div class="tagcloud-container content"></div>
</div>


<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <h1>Carbolite Gero - laboratory & industrial furnaces up to 3000°C</h1>

        <div class="csc-default" style="margin-bottom:20px;">
            <div>CARBOLITE GERO is a leading manufacturer of high temperature furnaces and ovens from 30°C to 3000°C
                with a focus on vacuum and special atmosphere technology. With more than 100 years of experience in
                thermal engineering our products are used in research laboratories, pilot plants and manufacturing
                sites worldwide.
            </div>
        </div>
        <div class="csc-default">
            <ul class="toc font-small">
                @foreach($categories as $category)
                    <li><a href="/products/category/{{$category['id']}}"><img
                                    src="http://{{\Config::get('filesystems.disks.qiniu.domain')}}/category_{{$category['name']}}.jpg"><span>{{$category['name']}}</span></a>
                        <ul>
                            <li><strong>{{$category['max_temp']}}</strong></li>

                            @foreach($products->where('category_id',$category['id'])->all() as $product)
                                <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>

        <div id="c192748" class="csc-default">
            <ul class="news-home">
                <li>
                    <a href="http://win.verder-scientific.com/future/pure-science-no-fiction/" target="_blank"> <img
                                src="images/news-competition.jpg" width="223" height="131" alt="">
                    </a> <span><a href="http://win.verder-scientific.com/future/pure-science-no-fiction/"
                                  target="_blank">Join our competition to win an electric BMW I3!</a></span>
                </li>
                <li>
                    <a href="products/application-specific-furnaces/metal-and-ceramic-injection-moulding-furnaces-mim-and-cim/pds/index.html">
                        <img src="images/news-competition.jpg" width="223" height="131" alt="">
                    </a> <span><a
                                href="products/application-specific-furnaces/metal-and-ceramic-injection-moulding-furnaces-mim-and-cim/pds/index.html">Debinding
                            and sintering in one furnace - PDS</a></span>
                </li>
                <li>
                    <a href="products/vacuum-furnace/tube-furnaces/htrh-h2/index.html"> <img
                                src="images/news-competition.jpg" width="223" height="131" alt="">
                    </a> <span><a href="products/vacuum-furnace/tube-furnaces/htrh-h2/index.html">Hydrogen Tube
                            Furnace up to 1600°C - HTRH-H<sub>2</sub></a></span>
                </li>
                <li>
                    <a href="home/news_detail/1003/dl_details/1/file/54369fa5-484c-41ac-bc3c-0f5200000000/index.html"><img
                                src="images/news-competition.jpg" width="170" height="100"
                                alt=""></a> <span><a
                                href="home/news_detail/1003/dl_details/1/file/54369fa5-484c-41ac-bc3c-0f5200000000/index.html">New
                            issue no. 41</a></span>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop