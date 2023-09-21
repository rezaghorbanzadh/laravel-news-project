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
                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset("assets/Home/img/top-post2.jpg")}}" alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="#">دسته بندی</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h4>عنوان</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                    <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#"> ۱<span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-top-post mt-10">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset("assets/Home/img/top-post3.jpg")}}" alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="#">دسته بندی</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h4>عنوان</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                    <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">۵<span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>خبر فوری:</span> <a href="#">مربی تیم ایران اخراج شد</a></h6>
                        </div>
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
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset("assets/Home/img/l1.jpg")}}" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">دسته بندی</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>عنوان</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                        <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#"> ۵<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    <p class="excert">
                                        خلاصه متن خبر
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset("assets/Home/img/l1.jpg")}}" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">دسته بندی</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>عنوان</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                        <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#"> ۵<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    <p class="excert">
                                        خلاصه متن خبر
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset("assets/Home/img/l1.jpg")}}" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">دسته بندی</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>عنوان</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                        <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#"> ۵<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    <p class="excert">
                                        خلاصه متن خبر
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset("assets/Home/img/l1.jpg")}}" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">دسته بندی</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>عنوان</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                        <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#"> ۵<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    <p class="excert">
                                        خلاصه متن خبر
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="{{asset("assets/Home/img/banner-ad.jpg")}}" alt="">
                        </div>
                        <!-- End banner-ads Area -->
                        <!-- Start popular-post Area -->
                        <div class="popular-post-wrap">
                            <h4 class="title">اخبار پربازدید</h4>
                            <div class="feature-post relative">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset("assets/Home/img/f1.jpg")}}" alt="">
                                </div>
                                <div class="details">
                                    <ul class="tags">
                                        <li><a href="#">دسته بندی</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h3>عنوان</h3>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                        <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#">۷<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-20 medium-gutters">
                                <div class="col-lg-6 single-popular-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset("assets/Home/img/f2.jpg")}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">دسته بندی</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4>عنوان</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#"> ۵<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                        <p class="excert">
                                            خلاصه متن خبر
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 single-popular-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset("assets/Home/img/f3.jpg")}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">دسته بندی</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4>عنوان</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۷<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                        <p class="excert">
                                            خلاصه متن خبر
                                    </div>
                                </div>
                            </div>
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
                                            <img class="img-fluid" src="{{asset("assets/Home/img/e1.jpg")}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">دسته بندی</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4 class="mt-20">عنوان</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۵<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                        <p class="excert">
                                            خلاصه متن خبر
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="{{asset("assets/Home/img/sidebar-ads.jpg")}}" alt="">
                            </div>

                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">پر بحث ترین ها</h6>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m1.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>عنوان خبر</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۱۰۰<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m1.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>عنوان خبر</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۱۰۰<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m1.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>عنوان خبر</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۱۰۰<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m1.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>عنوان خبر</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">۱۰۰<span class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>

@endsection


