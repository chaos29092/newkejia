@extends('master')


@section('content')
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li class="current"><a href="/downloads/operating">Operating Manuals</a></li>
            <li><a href="/downloads/brochures">Brochures</a></li>
            <li><a href="/downloads/miscellaneous">Miscellaneous</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <div id="c192461" class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="8000">
                    <div class="item"><img
                                src="{{env('QINIU_DOMAIN')}}slider-downloads-manuals.jpg">

                        <div class="overlay textright"><span class="headline"></span><span class="subline"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Operating Manuals</h1>

        <div id="c104830" class="csc-default" style="margin-bottom:25px;">
            <div>Please find a list of all Kejia Furnace manuals (product manuals as well as controller manuals) below.
                You will also find the correct manual in the &quot;Information &amp; Downloads&quot; tab of each
                product.
            </div>
        </div>
        <div id="c208310" class="csc-default"><!-- web-2015-download_default.tpl -->


            <div class="foldBox">

                <div class="foldBoxContent">

                    <ul class="downloads default">
                        <li>
                            <div class="thumbnail">
                                <img
                                        src="{{env('QINIU_DOMAIN')}}down_thum.jpg" width="57" height="80" border="0"
                                        alt="">
                            </div>
                            <div class="information">
                                <h2>Laboratory/standard ovens & furnaces up to 1800°C</h2>


                                <div class="selector">
                                    <ul>
                                        <li class="label"><a href="index.html#">Choose...</a></li>
                                        <li>
                                            <a href="../../dltmp/www/53e4b581-ac1c-4a18-a982-636500000000-df492febc5ee/brochure_catalogue_general_en.pdf?file_id=53e4b581-ac1c-4a18-a982-636500000000"
                                               target="_blank" onclick="trackPageview('../../downloads.html');">[pdf]
                                                English (10 MB)</a></li>
                                        <li>
                                            <a href="../../dltmp/www/551adbef-2668-4ee2-ac7f-155c00000000-acf8a4416bc5/brochure_catalogue_general_de.pdf?file_id=551adbef-2668-4ee2-ac7f-155c00000000"
                                               target="_blank" onclick="trackPageview('../../downloads.html');">[pdf]
                                                German
                                                (11 MB)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- / downloads-default.tpl --><!-- / grouped-files.tpl -->
                </div>
            </div>
            <!-- / web-2015-download_default.tpl --></div>
    </div>
</div>
@stop