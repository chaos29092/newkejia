@extends('master')

@section('nav')
    <nav class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/contact-service">Contact & Service</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/company">Company</a></li>
            <li class="current"><a href="/downloads">Downloads</a></li>
        </ul>
    </nav>
    @stop
    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


    </div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="/downloads/operating">Operating Manuals</a></li>
                <li><a href="/downloads/brochures">Brochures</a></li>
                <li><a href="/downloads/miscellaneous">Miscellaneous</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>Downloads</h1>

            <div id="c105433" class="csc-default" style="margin-bottom:15px;">
                <div>All important documents are available for download here. Please choose below.</div>
            </div>
            <div id="c192443" class="csc-default">
                <ul class="toc font-small">

                    <li><a href="/downloads/operating"><img
                                    src="/images/downloads-manuals.jpg"><span>Manuals</span></a>
                    </li>
                    <li><a href="/downloads/brochures"><img
                                    src="/images/downloads-catalogues.jpg"><span>Brochures</span></a>
                    </li>
                    <li><a href="/downloads/miscellaneous"><img
                                    src="/images/downloads-misc.jpg"><span>Miscellaneous</span></a>
                    </li>
                </ul>
                </ll></span></LINK></li>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@stop