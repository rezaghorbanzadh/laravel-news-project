<header>


    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset("assets/Home/img/logo.png")}}" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                    <img class="img-fluid" src="{{asset("assets/Home/img/banner-ad.jpg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu" style="display: inline!important;">
                    @foreach ( App\Models\Admin\Menu::get() as $menu)
                    <li  style="list-style-type: none;display: inline!important;margin-left: 10px"><a style="display: inline!important; color: white;" href="{{ $menu->url }}">{{ $menu->name }}</a></li>
                </ul>

                @endforeach
            </nav>
            <!-- #nav-menu-container -->
            <div class="navbar-right">
                <form class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
								<span class="lnr lnr-cross"></span>
                        </span>
                </form>
            </div>
        </div>
    </div>
</header>
