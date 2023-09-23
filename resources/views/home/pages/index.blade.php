@extends("home.layouts.master")


@section("content")
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            {{--   post1--}}
                            @if(!empty($SelectedPost[0]->image))
                            <img class="img-fluid" src='{{ asset("uploads/".$SelectedPost[0]->image) }}' alt="">
                            @endif
                        </div>
                        <div class="top-post-details">
                            @if(!empty($SelectedPost[0]->category->name))
                                <ul class="tags">
                                    <li><a href="{{ route('home.category', $SelectedPost[0]->category->id) }}">{{ $SelectedPost[0]->category->name }}</a></li>
                                </ul>
                            @endif
                                @if (!empty($SelectedPost[0]->title))
                                    <a href="{{ route('home.view-post', $SelectedPost[0]->id) }}">
                                        <h3>{{ $SelectedPost[0]->title }}</h3>
                                    </a>
                                @endif
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>{{$SelectedPost[0]->user->name}}</a></li>
                                <li><a href="#">{{jdate($SelectedPost[0]->created_at)}}<span class="lnr lnr-calendar-full"></span></a></li>
                                <li><a href="#">{{ $SelectedPost[0]->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 top-post-right">
                        {{--   post2--}}
                        @if(!empty($SelectedPost[1]))
                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                @if(!empty($SelectedPost[1]->image))
                                    <img class="img-fluid" src='{{ asset("uploads/".$SelectedPost[1]->image) }}' alt="">
                                @endif
                            </div>
                            <div class="top-post-details">
                                @if(!empty($SelectedPost[1]->category->name))
                                    <ul class="tags">
                                        <li><a href="{{ route('home.category', $SelectedPost[1]->category->id) }}">{{ $SelectedPost[1]->category->name }}</a></li>
                                    </ul>
                                @endif
                                @if (!empty($SelectedPost[1]->title))
                                    <a href="{{ route('home.view-post', $SelectedPost[1]->id) }}">
                                        <h3>{{ $SelectedPost[1]->title }}</h3>
                                    </a>
                                @endif
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>{{$SelectedPost[1]->user->name}}</a></li>
                                    <li><a href="#">{{jdate($SelectedPost[1]->created_at)}}<span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">{{ $SelectedPost[1]->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        {{--   post3--}}
                         @if(!empty($SelectedPost[2]))
                                <div class="single-top-post">
                                    <div class="feature-image-thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        @if(!empty($SelectedPost[2]->image))
                                            <img class="img-fluid" src='{{ asset("uploads/".$SelectedPost[2]->image) }}' alt="">
                                        @endif
                                    </div>
                                    <div class="top-post-details">
                                        @if(!empty($SelectedPost[2]->category->name))
                                            <ul class="tags">
                                                <li><a href="{{ route('home.category', $SelectedPost[2]->category->id) }}">{{ $SelectedPost[2]->category->name }}</a></li>
                                            </ul>
                                        @endif
                                        @if (!empty($SelectedPost[2]->title))
                                            <a href="{{ route('home.view-post', $SelectedPost[2]->id) }}">
                                                <h3>{{ $SelectedPost[2]->title }}</h3>
                                            </a>
                                        @endif
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$SelectedPost[2]->user->name}}</a></li>
                                            <li><a href="#">{{jdate($SelectedPost[2]->created_at)}}<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">{{ $SelectedPost[2]->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                         @endif
                    </div>
                    @if(!empty($breakingNews[0]))
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>خبر فوری:</span> <a href="{{ route('home.view-post', $breakingNews[0]->id) }}">{{$breakingNews[0]->title}}</a></h6>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">\
                        <div class="popular-post-wrap">
                            <h4 class="title">اخبار پربازدید</h4>
                            @if (!empty($latestNews))
                                <div class="latest-post-wrap">
                                    <h4 class="cat-title">آخرین اخبار</h4>
                                    @foreach ($latestNews as $latestNew)
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-lg-5 post-left">
                                                <div class="feature-img relative">
                                                    <div class="overlay overlay-bg"></div>
                                                    @if (!empty($latestNew->image))
                                                        <img class="img-fluid" src="{{ asset("uploads/".$latestNew->image)}}">
                                                    @endif
                                                </div>
                                                @if (!empty($latestNew->category->name))
                                                    <ul class="tags">
                                                        <li><a href="{{ route('home.category', $latestNew->category->id) }}">{{ $latestNew->category->name }}</a></li>
                                                    </ul>
                                                @endif
                                            </div>
                                            <div class="col-lg-7 post-right">
                                                @if (!empty($latestNew->title))
                                                    <a href="{{ route('home.view-post', $latestNew->id) }}">
                                                        <h4>{{ $latestNew->title }}</h4>
                                                    </a>
                                                @endif
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-user"></span> {{ $latestNew->user->username }}</a></li>
                                                    <li><a href="#">{{ jdate($latestNew->created_at) }}<span class="lnr lnr-calendar-full"></span></a></li>
                                                    <li><a href="#"> {{ $latestNew->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                                </ul>
                                                <p class="excert">
                                                    {!! $latestNew->summary !!}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        <!-- End latest-post Area -->
                            <!-- Start banner-ads Area -->
                            @if (!empty($banners[0]->image))
                                <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                                    <img class="img-fluid" src="{{ asset("uploads/".$banners[0]->image) }}">
                                </div>
                        @endif
                        <!-- End banner-ads Area -->
                            <!-- Start popular-post Area -->
                        </div>
                        <!-- End popular-post Area -->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">انتخاب سردبیر</h6>
                                <div class="editors-pick-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset("uploads/".$SelectedPost[0]->image)}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="{{ route('home.category', $SelectedPost[0]->category->id) }}">{{ $SelectedPost[0]->category->name }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('home.view-post', $SelectedPost[0]->id) }}">
                                            <h4 class="mt-20">{{ $SelectedPost[0]->title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span> {{ $SelectedPost[0]->user->username }}</a></li>
                                            <li><a href="#">{{ jdate( $SelectedPost[0]->cerated_at ) }}<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#"> {{ $SelectedPost[0]->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                        <p class="excert">
                                            {!! $SelectedPost[0]->summary !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="{{asset("uploads/".$banners[0]->image)}}" alt="">
                            </div>
                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">پر بحث ترین ها</h6>
                                @foreach ($mostControversialPosts as $mostControversialPost)
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img width="110" src="{{asset("uploads/".$mostControversialPost->image)}}  }}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="{{ route('home.view-post', $mostControversialPost->id) }}">
                                                <h6>{{ $mostControversialPost->title }}</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"> {{ jdate($mostControversialPost->created_at) }}<span class="lnr lnr-calendar-full"></span></a></li>
                                                <li><a href="#"> {{ $mostControversialPost->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection


