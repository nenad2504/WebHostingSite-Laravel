<body>    
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
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
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="#" class="mr-40">+880 156 278 256</a>
                            <a href="#" class="btn">Sign In</a>
                        </div>
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
