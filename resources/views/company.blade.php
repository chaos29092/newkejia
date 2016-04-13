@extends('master')


@section('content')

        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


</div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="company">Company History & Profile</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <div id="c203559" class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="8000">
                    <div class="item"><img src="{{env('QINIU_DOMAIN')}}slider-company.jpg">

                        <div class="overlay textright"><span class="headline"></span><span class="subline"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Company History & Profile</h1>

        <div id="c194083" class="csc-default" style="margin-bottom:20px;">
            <div><b>The Kejia Furnace brand is synonymous with high quality, leading heat technology in
                    the design and manufacture of laboratory and industrial ovens and furnaces up to 1700°C and sold
                    globally to all over the world. </b><br><br>

                Kejia Furnace is always devoted to satisfying customers with guaranteed quality products, which include
                1200/1400/1700C Muffle furnaces, 1200/1400/1600C Tube furnaces, (Vacuum) Crucible furnaces, Vacuum Box
                furnace, Double(Multi) zones Tube furnaces, Multi-position Rotary Tube furnace, Bottom Loading Muffle
                furnace, etc...
                <br><br>
                In order to be more suitable for your requirements, Our customised solutions include products designed
                to meet specific customer requirements as well as adaptations of a standard model to make it a little
                larger or smaller or to add more features.
                <br><br>
                "Supplying service to customer for life" is our service target. So, quality is our most emphasized, all
                of our customers service staff has through the professional training, we have the corresponding customer
                service person for different language. Each of your opinion, It will be collected, prepared, resolved as
                quickly as possible, welcome to contact us!
                <br><br>
            </div>
        </div>
        <div id="c110826" class="csc-default">
            <div><b>To view and download our company certificates &amp; statements</b> <b><a
                            href="/downloads/miscellaneous" class="internal-link"
                            alt="Opens internal link in current window">please click here</a></b>.
            </div>
        </div>
    </div>
</div>
@stop