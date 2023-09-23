@extends("home.layouts.master")

<style>
    .box{
        background-color: #f8f8f8;
        border: 1px solid #e5e5e5;
        padding: 15px;
        margin: 15px 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
</style>

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
                                                    <div class="single-comment justify-content-between d-flex box">
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


