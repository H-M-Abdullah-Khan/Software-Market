<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/open9/author-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:20:44 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Open9 | NFT Marketplace HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('../template/assets/css/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('../template/assets/css/responsive.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('../template/assets/icon/Favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('../template/assets/icon/Favicon.png')}}">

</head>

<body class="body header-fixed">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
          </div>
    </div>
    <!-- /preload -->

    
        
    <div id="wrapper">
        <div id="page" class="pt-40">
            <!-- header -->
            <header id="header_main" class="header_1 header-fixed">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="wrap-box flex">
                                    <div id="site-logo">
                                        <div id="site-logo-inner">
                                            <a href="{{ url('welcome') }}" rel="home" class="main-logo">
                                                <img id="logo_header" src="{{asset('../template/assets/images/logo/logo.png')}}"
                                                data-retina="{{asset('../template/assets/images/logo/logo.png')}}" >
                                            </a>
                                        </div>
                                    </div><!-- logo -->
                                    <div class="mobile-button">
                                        <span></span>
                                    </div><!-- /.mobile-button -->
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item">
                                                <a href="{{ url('welcome') }}">Home</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{url('about-us')}}">About us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('explore-1') }}">Explore</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children current-menu-item">
                                                <a href="{{ url('market') }}">Market</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item has-item">
                                                            <li class="nav-menu-item"><a href="{{ url('market-create') }}">Create</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market') }}">Market</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-active-bid') }}">Active Bid</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-explore') }}">Explore</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-collection') }}">My collection</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-favorite') }}">My favorite</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-wallet') }}">Wallet</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market-history') }}">History</a></li>
                                                            <li class="nav-menu-item"><a href="{{ url('market') }}">Settings</a></li>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('blog-detail') }}">Blog</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('contact-us') }}">Contact</a>
                                            </li>
                                            @if (Route::has('login'))
                                            @auth
                                            <li>
                                                <a class="tf-button style-1"
                                                    href="{{ url('/dashboard') }}"  
                                                >
                                                    Dashboard
                                                </a>
                                            </li>
                                            @else
                                            <li class="menu-item">
                                                <a class=""
                                                    href="{{ route('login') }}"   
                                                >
                                                    Log in
                                                </a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li class="menu-item">
                                                    <a 
                                                        href="{{ route('register') }}"
                                                        >
                                                        Register
                                                    </a>
                                            </li>
                                                @endif
                                            @endauth
                                    @endif
                                        </ul>
                                    </nav>

                                <!-- /#main-nav -->
                                    {{-- <div class="flat-wallet flex">
                                        {{-- <div class="" id="wallet-header">
                                            <a  href="market-wallet') }}" id="connectbtn" class="tf-button style-1">
                                                <span>Wallet connect</span>
                                                <i class="icon-wa"></i>
                                            </a>
                                        </div> 
                                        <div class="header-search relative">
                                            <a href="#" class="show-search">
                                                <i class="icon-search"></i>
                                            </a>
                                            <div class="top-search">
                                                <form action="#" method="get" role="search" class="search-form relative">
                                                    <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                                    <button class="search search-submit" type="submit" title="Search">
                                                        <i class="icon-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="canvas">
                                            <span></span>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-nav-wrap">
                    <div class="overlay-canvas-nav"></div>
                    <div class="inner-canvas-nav">
                        <div class="side-bar">
                            <a href="{{ url('welcome') }}" rel="home" class="main-logo">
                                <img id="logo_header" src="{{asset('../template/assets/images/logo/logo.png')}}"
                                data-retina="{{asset('../template/assets/images/logo/logo.png')}}" >
                            </a>
                            <div class="canvas-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve"><g><path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/></g></svg>
                            </div>
                            <div class="widget-search mt-30">
                                <form action="#" method="get" role="search" class="search-form relative">
                                    <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                    <button class="search search-submit" type="submit" title="Search">
                                        <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widget widget-categories">
                                <h5 class="title-widget">Categories</h5>
                                <ul>
                                    <li>
                                        <div class="cate-item"><a href="#">NFTs</a></div>
                                        <div class="number">(1.483)</div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="#">Digital Art</a></div>
                                        <div class="number">(97)</div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="#">Crypto</a></div>
                                        <div class="number">(45)</div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="#">Technology</a></div>
                                        <div class="number">(728)</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-menu style-4">
                                <h5 class="title-widget">Company</h5>
                                <ul>
                                    <li><a href="#">Help center</a></li>
                                    <li><a href="#">Platform status</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="title-widget">Join the community</h5>
                                <div class="widget-social">
                                    <ul class="flex">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                        <li><a href="#" class="icon-vt"></a></li>
                                        <li><a href="#" class="icon-tiktok"></a></li>
                                        <li><a href="#" class="icon-youtube"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav-wrap">
                    <div class="overlay-mobile-nav"></div>
                    <div class="inner-mobile-nav">
                        <a href="{{ url('welcome') }}" rel="home" class="main-logo">
                            <img id="mobile-logo_header" src="{{asset('/../template/assets/images/logo/logo.png')}}" data-retina="{{asset('/../template/assets/images/logo/logo@2x.png')}}">
                        </a>
                        <div class="mobile-nav-close">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve"><g><path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/></g></svg>
                        </div>
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <ul id="menu-mobile-menu" class="menu">
                                <li class="menu-item current-menu-item">
                                    <a class="item-menu-mobile" href="{{ url('welcome') }}">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-menu-mobile" href="{{ url('about-us') }}">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-menu-mobile" href="{{ url('explore-1') }}">Explore</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile">Market</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="{{ url('market') }}">Market</a></li>
                                        <li class="menu-item"><a href="{{ url('market-create') }}">Create</a></li>
                                        <li class="menu-item"><a href="{{ url('market-active-bid') }}">Active Bid</a></li>
                                        <li class="menu-item"><a href="{{ url('market-explore') }}">Explore</a></li>
                                        <li class="menu-item"><a href="{{ url('market-collection') }}">My collection</a></li>
                                        <li class="menu-item"><a href="{{ url('market-favorite') }}">My favorite</a></li>
                                        <li class="menu-item"><a href="{{ url('market-wallet') }}">Wallet</a></li>
                                        <li class="menu-item"><a href="{{ url('market-history') }}">History</a></li>
                                        <li class="menu-item"><a href="{{ url('market') }}">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="item-menu-mobile" href="{{ url('blog-detail') }}">Blog</a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-menu-mobile" href="{{ url('contact-us') }}">Contact</a>
                                </li>
                                @if (Route::has('login'))
                                            @auth
                                            <li>
                                                <a class="tf-button style-1"
                                                    href="{{ url('/dashboard') }}"  
                                                >
                                                    Dashboard
                                                </a>
                                            </li>
                                            @else
                                            <li class="menu-item">
                                                <a class=""
                                                    href="{{ route('login') }}"   
                                                >
                                                    Log in
                                                </a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li class="menu-item">
                                                    <a 
                                                        href="{{ route('register') }}"
                                                        >
                                                        Register
                                                    </a>
                                            </li>
                                                @endif
                                            @endauth
                                    @endif
                            </ul>
                        </nav>
                        <div class="widget-search mt-30">
                            <form action="#" method="get" role="search" class="search-form relative">
                                <input type="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                <button class="search search-submit" type="submit" title="Search">
                                    <i class="icon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <div class="flat-title-page">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="heading text-center">top creators in
                                <span class="dropdown" id="select-day">
                                    <span class="btn-selector tf-color">
                                        <span>1 day</span>
                                    </span>
                                    <ul>
                                        <li><span>1 day</span></li>
                                        <li><span>3 day</span></li>
                                        <li><span>7 day</span></li>
                                    </ul>
                                </span>
                            </h1>
                            <ul class="breadcrumbs flex justify-center">
                                <li class="icon-keyboard_arrow_right">
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="#">Explore</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2">
                <div class="themesflat-container">
                    <div class="row">
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-01.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order tf-color">#1</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-02.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order tf-color">#2</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-03.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order tf-color">#3</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-04.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#4</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-05.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#5</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-06.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#6</div>
                            </div>  
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-01.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#7</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-02.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#8</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-03.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#9</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-04.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#10</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-05.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#11</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-06.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#12</div>
                            </div>  
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-01.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#13</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-02.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#14</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-03.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#15</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-04.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#16</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-05.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#17</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-06.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#18</div>
                            </div> 
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-01.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#19</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-02.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#20</div>
                            </div>  	
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-lg-4 col-md-6 mb-30">
                            <div class="tf-author-box style-2 type-1">
                                <div class="author-avatar ">
                                    <img src="{{asset('../template/assets/images/avatar/avatar-03.png')}}" alt="" class="avatar">
                                </div>
                                <div class="author-infor ">
                                    <h5><a href="author-2.html">Arlene McCoy</a></h5>
                                    <h6 class="price gem style-1"><i class="icon-gem"></i>7,080.95</h6>
                                </div>
                                <div class="order opacity-01">#21</div>
                            </div>  	 	
                        </div>
                        <div class="col-12">
                            <div class="widget-pagination">
                                <ul class="justify-center">
                                    <li>
                                        <a href="#"><i class="icon-keyboard_arrow_left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">...</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-keyboard_arrow_right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content flex flex-grow">
                                <div class="widget-logo flex-grow">
                                    <div class="logo-footer" id="logo-footer">
                                        <a href="index.html">
                                            <img id="logo_footer" src="{{asset('../template/assets/images/logo/logo.png')}}" 
                                            data-retina="{{asset('../template/assets/images/logo/logo@2x.png')}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="widget widget-menu style-1">
                                    <h5 class="title-widget">Marketplace</h5>
                                    <ul>
                                        <li><a href="#">All NFTs</a></li>
                                        <li><a href="#">Virtual worlds</a></li>
                                        <li><a href="#">Domain names</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Digital art</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div>
                                <div class="widget widget-menu style-2">
                                    <h5 class="title-widget">Resource</h5>
                                    <ul>
                                        <li><a href="#">Help center</a></li>
                                        <li><a href="#">Platform status</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="#">Discount community</a></li>
                                        <li><a href="#">Live auctions</a></li>
                                        <li><a href="#">Discover</a></li>
                                    </ul>
                                </div>
                                <div class="widget widget-menu style-3">
                                    <h5 class="title-widget">Account</h5>
                                    <ul>
                                        <li><a href="#">Authors</a></li>
                                        <li><a href="#">My Collection</a></li>
                                        <li><a href="#">Author Profile</a></li>
                                        <li><a href="#">Go to dashboard</a></li>
                                        <li><a href="#">Collection</a></li>
                                        <li><a href="#">Create Collection</a></li>
                                    </ul>
                                </div>
                                <div class="widget-last">
                                    <div class="widget-menu style-4">
                                        <h5 class="title-widget">Company</h5>
                                        <ul>
                                            <li><a href="#">Help center</a></li>
                                            <li><a href="#">Platform status</a></li>
                                        </ul>
                                    </div>
                                    <h5 class="title-widget mt-30">Join the community</h5>
                                    <div class="widget-social">
                                        <ul class="flex">
                                            <li><a href="#" class="icon-facebook"></a></li>
                                            <li><a href="#" class="icon-twitter"></a></li>
                                            <li><a href="#" class="icon-vt"></a></li>
                                            <li><a href="#" class="icon-tiktok"></a></li>
                                            <li><a href="#" class="icon-youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <p>© 2023 OpeN9 - Made By Themesflat</p>
                        <ul class="flex">
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer><!-- /#footer -->
           
        </div>
        <!-- /#page -->

    </div>
      <!-- /#wrapper -->

    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{asset('/../template/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/swiper.js')}}"></script>
    <script src="{{asset('/../template/assets/js/count-down.js')}}"></script>
    <script src="{{asset('/../template/assets/js/simpleParallax.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/gsap.js')}}"></script>
    <script src="{{asset('/../template/assets/js/SplitText.js')}}"></script>
    <script src="{{asset('/../template/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/ScrollTrigger.js')}}"></script>
    <script src="{{asset('/../template/assets/js/gsap-animation.js')}}"></script>
    <script src="{{asset('/../template/assets/js/tsparticles.min.js')}}"></script>
    <script src="{{asset('/../template/assets/js/tsparticles.js')}}"></script>
    <script src="{{asset('/../template/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from themesflat.co/html/open9/author-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:20:44 GMT -->
</html>