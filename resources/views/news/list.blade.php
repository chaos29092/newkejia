@extends('master')

    @section('content')
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>
    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="/news">News</a></li>
                <li><a href="/news/cases">Custom Cases</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>

    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>@if($news->first()->tag =='news') News @else Custom Cases @endif</h1>

            <div class="csc-default">
                <ul class="news-list">
                    @foreach($news as $new)
                        <li>
                            <div class="image">
                                <img src="{{$new->image}}?imageView2/2/w/180/h/180"
                                     alt="{{$new->title}}">
                            </div>
                            <div class="information">
                                <h2><a href="/news/{{$new->id}}">{{ucwords($new->title)}}</a></h2>

                                <p>{{$new->profile}}</p>

                                <p><a href="/news/{{$new->id}}" target="_top">[more...]</a></p>
                            </div>
                        </li>
                    @endforeach
                    {{$news->render()}}
                        </ul>
                    </div>
                </div>
            </div>
@stop