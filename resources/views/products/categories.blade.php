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
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


    </div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                @foreach($categories as $category)
                    <li><a href="/products/category/{{$category->id}}">{{$category->name}}</a>
                        <ul>
                            @foreach($products->where('category_id',$category->id)->all() as $product)
                                <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>Carbolite Gero Furnaces and Ovens</h1>

            <div class="csc-default">
                <ul class="toc font-small">
                    @foreach($categories as $category)
                        <li><a href="/products/category/{{$category->id}}"><img
                                        src="{{$category->main_pic}}"><span>{{ucwords($category->name)}}</span></a>
                            <ul>
                                <li><strong>{{ucwords($category->max_temp)}}</strong></li>
                                @foreach($products->where('category_id',$category->id)->all() as $product)
                                    <li><a href="/products/{{$product->id}}">{{ucwords($product->name)}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@stop