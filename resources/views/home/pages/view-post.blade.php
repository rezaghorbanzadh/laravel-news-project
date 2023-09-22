@extends("home.layouts.master")


@section("content")
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start single-post Area -->
                        <div class="single-post-wrap">
                            <div class="feature-img-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                @if(!empty($post->image))
                                <img class="img-fluid" src="{{asset("uploads/".$post->image)}}" alt="">
                                @endif
                            </div>
                            <div class="content-wrap">
                                @if(!empty($post->category->name))
                                <ul class="tags mt-10">
                                    <li><a href="#">{{$post->category->name}}</a></li>
                                </ul>
                                @endif
                                @if(!empty($post->title))
                                <a href="#">
                                    <h3>{{$post->title}}</h3>
                                </a>
                                @endif

                                    <ul class="meta pb-20">
                                    <li><a href="#"><span class="lnr lnr-user"></span>{{ $post->user->name }}</a></li>
                                    <li><a href="#">{{ jdate( $post->cerated_at ) }}<span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">{{ $post->comments->count() }}<span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    {!! $post->body !!}


                                    <div class="navigation-wrap justify-content-between d-flex">
                                        @if($prevPost !== null)
                                    <a class="prev" href="{{ route('home.view-post', $prevPost->id) }}"><span class="lnr lnr-arrow-right"></span>خبر بعدی</a>
                                        @endif
                                        @if($nextPost !== null)
                                    <a class="next" href="{{ route('home.view-post', $nextPost->id) }}">خبر قبلی<span class="lnr lnr-arrow-left"></span></a>
                                        @endif
                                </div>

                                <div class="comment-sec-area">
                                    <div class="container">
                                        <div class="row flex-column">
                                            <h6>نظرات</h6>
                                            @if (empty($post->comments)))
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex comment-box">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="desc">
                                                                <p class="comment">
                                                                    <span class="text-danger">نظری وجود ندارد</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @foreach ($post->comments()->where('status', 1)->get() as $comment)
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex comment-box">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="desc">
                                                                <h5><a href="#">{{ $comment->user->name }}</a></h5>
                                                                <p class="date mt-3">{{ jdate($comment->created_at) }}</p>
                                                                <p class="comment">
                                                                    {{ $comment->comment }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h4>درج نظر جدید</h4>

                                <form action="{{ route('admin.comment.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="comment" placeholder="متن نظر" onfocus="this.placeholder = ''" onblur="this.placeholder = 'متن نظر'" required=""></textarea>
                                    </div>
                                    <button  href="{{ route('admin.comment.store', $post->id) }}" class="primary-btn text-uppercase">ارسال</button>
                                </form>

                            </div>
                        </div>
                        <!-- End single-post Area -->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">Editor’s Pick</h6>
                                <div class="editors-pick-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset("assets/Home/img/e1.jpg")}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4 class="mt-20">A Discount Toner Cartridge Is Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                        </ul>
                                        <p class="excert">
                                            Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                        </p>
                                    </div>
                                    <div class="post-lists">
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset("assets/Home/img/e2.jpg")}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html">
                                                    <h6>Help Finding Information Online is so easy</h6>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset("assets/Home/img/e3.jpg")}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html">
                                                    <h6>Compatible Inkjet Cartr world famous</h6>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset("assets/Home/img/e4.jpg")}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html">
                                                    <h6>5 Tips For Offshore Soft Development </h6>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="{{asset("assets/Home/img/sidebar-ads.jpg")}}" alt="">
                            </div>
                            <div class="single-sidebar-widget newsletter-widget">
                                <h6 class="title">Newsletter</h6>
                                <p>
                                    Here, I focus on a range of items andfeatures that we use in life without giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="col-autos">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p>
                                    You can unsubscribe us at any time
                                </p>
                            </div>
                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">Most Popular</h6>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m1.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>Help Finding Information Online is so easy</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m2.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>Compatible Inkjet Cartr world famous</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m3.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>5 Tips For Offshore Soft Development </h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset("assets/Home/img/m4.jpg")}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>5 Tips For Offshore Soft Development </h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget social-network-widget">
                                <h6 class="title">Social Networks</h6>
                                <ul class="social-list">
                                    <li class="d-flex justify-content-between align-items-center fb">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <p>983 Likes</p>
                                        </div>
                                        <a href="#">Like our page</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center tw">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <p>983 Followers</p>
                                        </div>
                                        <a href="#">Follow Us</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center yt">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            <p>983 Subscriber</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center rs">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                            <p>983 Subscribe</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>


@endsection


