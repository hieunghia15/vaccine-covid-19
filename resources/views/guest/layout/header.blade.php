<!--Header-->
<header class="header_v1">
    <!--Header-v1--->
    <section class="navbar_outer">
        <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
            <div class="container">
                <a class="navbar-brand" href="{{ route('guest.index') }}"><img
                        src="{{ asset('citizen/assets/image/logo-default.png') }}" class="img-fluid"
                        alt="img" /></a>
                <button class="navbar-toggler toggler-spring">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse scroll-nav">
                    <ul class="navbar-nav navbar-mobile navbar_left ml-auto" id="navbarnav">
                        <li class="nav-item nav_item home active drop_down">
                            <a class="nav-link link_hd" href="#">
                                <i class="linearicons-home4 home_icon"></i>
                            </a>
                        </li>
                        <li class="nav-item nav_item drop_down">
                            <a class="nav-link link_hd" href="#">Tra cứu</a>
                            <ul class="navbar-nav submenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">Chứng nhận tiêm chủng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="coming-soon.html">Lịch sử đăng ký tiêm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav_item">
                            <a class="nav-link link_hd" href="faqs.html">Đăng ký tiêm chủng</a>
                        </li>
                        <li class="nav-item nav_item drop_down">
                            <a class="nav-link link_hd" href="{{route('guest.blog')}}"> Bài viết </a>
                            <ul class="navbar-nav submenu">
                                @foreach (App\Models\Category::all() as $category)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('guest.category',$category->category_slug)}}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-mobile navbar_right">
                        <li class="nav-item drop_down">
                            
                                <i class="linearicons-magnifier search_icon"></i>
                            <ul class="navbar-nav nav_search_submenu submenu">
                                <li class="nav_search">
                                    <form action="{{route('guest.search')}}" method="GET">
                                        <div class="form_group">
                                            <input type="search" name="search" placeholder="Tìm kiếm..." />
                                            <button class="search_btn" type="submit">
                                                <i class="linearicons-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @if (Auth::check())
                        <div class="dropdown">
                            <a class="btn btn-outline-primary dropdown-toggle" style="border-radius:1rem" href="#"
                                role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->fullname }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('citizen.user.index') }}">Thông tin cá nhân</a>
                                <a class="dropdown-item" href="{{ route('citizen.user.show-change-password') }}">Đổi
                                    mật khẩu</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item text-dange" href="{{ route('logout') }}" onclick="event.preventDefault();
                          this.closest('form').submit();">Đăng xuất</a>
                                </form>
                            </div>
                        </div>
                    @else
                        <a class="button btn btn-primary" style="margin-right: 20px; border-radius:1rem"
                            href="{{ route('login') }}"><span class="linearicons-user"></span> Đăng nhập</a>
                        <p width="20px"></p>
                        <a class="button btn btn-success" style="border-radius:1rem"
                            href="{{ route('register') }}"><span class="linearicons-register"></span> Đăng ký</a>
                    @endif
                </div>
            </div>
        </div>
        <!--Header-v1-end-->
    </section>
</header>
<!--Header-->
