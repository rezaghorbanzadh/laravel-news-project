@extends("home.layouts.master")


@section("content")
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        @if(!empty($category->name))
                        <div class="hero-nav-area">
                            <h1 class="text-white">اخبار دسته بندی {{$category->name}}</h1>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-12">
                        @if (!empty($breakingNews[0]->title ))
                            <div class="news-tracker-wrap">
                                <h6><span>خبر فوری:</span> <a href="{{ route('home.view-post', $breakingNews[0]->id) }}">{{ $breakingNews[0]->title }}</a></h6>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">آخرین اخبار</h4>

                            @if (!empty($categories))

                                @foreach ($categories as $category)
                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>

                                                @if (!empty($category->image))
                                                    <img class="img-fluid" src="{{ asset("uploads/".$category->image)}}">
                                                @endif

                                            </div>

                                            @if (!empty($category->category->name))
                                                <ul class="tags">
                                                    <li><a href="#">{{ $category->category->name }}</a></li>
                                                </ul>
                                            @endif

                                        </div>
                                        <div class="col-lg-7 post-right">

                                            @if (!empty($category->title))
                                                <a href="{{ route('home.view-post', $category->id) }}">
                                                    <h4>{{ $category->title }}</h4>
                                                </a>
                                            @endif

                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span> {{ $category->user->username }}</a></li>
                                                <li><a href="#">{{ jdate($category->created_at) }}<span class="lnr lnr-calendar-full"></span></a></li>
                                                <li><a href="#"> {{ $category->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                            </ul>
                                            <p class="excert">
                                                {!! $category->summary !!}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                            @if (!empty($categories))
                                <div class="mt-3">
                                    {{ $categories->links() }}
                                </div>
                            @endif

                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="{{asset("assets/Home/img/banner-ad.jpg")}}" alt="">
                        </div>
                        <!-- End banner-ads Area -->
                        <!-- Start popular-post Area -->

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
                                    <div class="single-list flex-row d-flex box">
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


