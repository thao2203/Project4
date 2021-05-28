<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="/"><img src={{ asset('assets/images/logo/logo_black.png') }} alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--black menu-hover-color--golden">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="/">Trang chủ </i></a>
                                       
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="product-details-default.html">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">                                  
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(0)->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(($datas->count()/4))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(($datas->count()/2))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip($datas->count()-($datas->count()/4))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog-single-sidebar-left.html">Bài viết <i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <!-- <ul class="sub-menu">
                                            <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                            <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                            <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                            <li><a href="blog-list-sidebar-left.html">Blog List Sidebar Left</a></li>
                                            <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                            <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                            <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="has-dropdown">
                                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            
                                            <ul class="sub-menu">
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li> -->
                                    <li>
                                        <a href="/chinh-sach">Về chúng tôi</a>
                                    </li>
                                    <li>
                                        <a href="/lien-he">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li> -->
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>