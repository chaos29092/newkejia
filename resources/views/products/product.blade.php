@extends('master')
@section('nav')
    <nav class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li class="current"><a href="/products">Products</a></li>
            <li><a href="/contact-service">Contact & Service</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/company">Company</a></li>
            <li><a href="/downloads">Downloads</a></li>
        </ul>
    </nav>
    @stop
    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                @foreach($categories as $category)
                    <li @if($category == $category_this)class="active"@endif><a
                                href="/products/category/{{$category->id}}">{{ucwords($category->name)}}</a>
                        @if($category == $category_this)
                            <ul>
                                @foreach($products_this as $product)
                                    <li @if($product == $product_this)class="active"@endif><a
                                                href="/products/{{$product->id}}">{{ucwords($product->name)}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <div id="c91168" class="csc-default"><!-- pi2 - web-2015-product_details.tpl -->


                <h1 class="first">{{ucwords($product_this->name)}}</h1>

                <ul class="tabs">
                    <li class="current"><a href="/products/{{$product->id}}">Features
                            & Options</a></li>
                    <li><a href="/products/{{$product->id}}/models">Technical Details (Models)</a>
                    </li>
                </ul>

                <div class="product_details grid-parent tab-content">
                    <div class="grid-parent grid-66 tablet-grid-66 mobile-grid-100">
                        <div class="grid-50 tablet-grid-100 mobile-grid-100 grid-parent">
                            <div class="buttons">
                                <a href="../../../contact-service/contact-formf4c8.html?lltext=contact_form.request&amp;llproduct=C-2-IBF-A"
                                   class="button short contact">Contact us</a>
                            </div>

                        </div>
                    </div>

                    <div class="side">
                        <div class="mediaContainer">
                            <div class="media">
                                <a class="zoom image" rel="product_images"
                                   data-id="products-{{$product_this->id}}" title="{{$product_this->name}}"
                                   href="/images/width_700.jpg"><img
                                            src="/images/width_220.png"></a>

                                <div class="zoomIcon"></div>
                            </div>
                            <div class="thumbnails image">
                                <img data-id="products-{{$product_this->id}}"
                                     src="images/width_60.png">
                            </div>
                            <div class="thumbnails video">

                            </div>
                        </div>

                    </div>
                    <p><b>{!! $product_this->profile !!} <br></b>
                        {!! $product_this->main !!}
                    </p>


                    <h2>Standard Features</h2>
                    <ul id="advantages">
                        {!! $product_this->standard !!}
                    </ul>

                    <h2>Options (<i>specify these at time of order</i>)</h2>
                    <ul id="options" class="list bidspecs">
                        {!! $product_this->options !!}
                    </ul>

                    <p>
                        <small>Content may be subject to modifications or corrections</small>
                    </p>

                </div>
                <div class="tab-loading"></div>
                <!-- / pi2 - web-2015-product_details.tpl --></div>
        </div>
    </div>
@stop