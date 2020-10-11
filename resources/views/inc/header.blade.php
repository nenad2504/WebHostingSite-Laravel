<body>    
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/home') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/post') }}">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    @if( auth()->check() )
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/logout">Log Out</a>
                                        </li>
                                    @else
                                        <div class="header-btns d-none d-lg-block f-right">
                                            <a href="{{ url('/login') }}" class="btn">Log In</a>
                                            <a href="{{ url('/register') }}" class="btn">Sign In</a>
                                        </div>
                                    @endif
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn
                        <div class="header-btns d-none d-lg-block f-right">
                        <a href="{{ url('/login') }}" class="btn">Log In</a>
                            <a href="{{ url('/register') }}" class="btn">Sign In</a>
                        </div> -->
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
