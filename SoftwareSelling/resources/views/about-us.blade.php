<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/open9/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:12 GMT -->
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

<body class="body counter-scroll">

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
        <div id="page" class="pt-40 about-us-page">

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
                                            <li class="menu-item current-menu-item">
                                                <a href="{{url('about-us')}}">About us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('explore-1') }}">Explore</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
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
                                    <a class="item-menu-mobile" href="{{ url('explore-1.html') }}">Explore</a>
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

            <div class="page-title about-us relative">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12 pages-title">
                            <div class="content">
                                <h1 data-wow-delay="0s" class="wow fadeInUp">This unique story driven nft experience</h1>
                                <p data-wow-delay="0.1s" class="wow fadeInUp">get started with the easiest and most secure platform to buy and trade digital ART and NFTs</p>
                                <div data-wow-delay="0.2s" class="wow fadeInUp flat-button flex justify-center">
                                    <a href="#" class="tf-button style-1 h50 w190">Get started <i class="icon-arrow-up-right2"></i></a>
                                </div>
                            </div>
                            <div class="icon-background">
                                <img class="absolute item1" src="{{asset('/../template/assets/images/item-background/item11.png')}}" alt="">
                                <img class="absolute item2" src="{{asset('/../template/assets/images/item-background/item10.png')}}" alt="">
                                <img class="absolute item3" src="{{asset('/../template/assets/images/item-background/item12.png')}}" alt="">
                                <img class="absolute item4" src="{{asset('/../template/assets/images/item-background/item13.png')}}" alt="">
                            </div>
                            <div class="relative">
                                <div class="swiper-container carousel3-type2" data-swiper='{
                                    "loop":false,
                                    "slidesPerView": 1,
                                    "observer": true,
                                    "observeParents": true,
                                    "spaceBetween": 12,
                                    "breakpoints": {
                                        "768": {
                                            "slidesPerView": 2
                                        },
                                        "1024": {
                                            "slidesPerView": 3
                                        }
                                    }
                                }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tf-card-box style-7">
                                                <div class="card-media">
                                                    <a href="#">
                                                        <img src="{{asset('/../template/assets/images/box-item/about-us-03.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-card-box style-7">
                                                <div class="card-media">
                                                    <a href="#">
                                                        <img src="{{asset('/../template/assets/images/box-item/about-us-01.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-card-box style-7">
                                                <div class="card-media">
                                                    <a href="#">
                                                        <img src="{{asset('/../template/assets/images/box-item/about-us-02.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-card-box style-7">
                                                <div class="card-media">
                                                    <a href="#">
                                                        <img src="{{asset('/../template/assets/images/box-item/about-us-01.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 counter">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="counter__body-1">
                                <div class="counter-1">
                                    <div class="number-counter">
                                        <span class="number" data-speed="3000" data-to="99" data-inviewport="yes">99</span>K+
                                    </div>
                                    <h6 class="title">Artwork</h6>    
                                </div>
                                <div class="space">
                                    <svg width="80" height="19" viewBox="0 0 80 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                        <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                    </svg>
                                </div>
                                <div class="counter-1">
                                    <div class="number-counter">
                                        <span class="number" data-speed="3000" data-to="72" data-inviewport="yes">72</span>K+
                                    </div>
                                    <h6 class="title">Auction</h6>    
                                </div>
                                <div class="space">
                                    <svg width="80" height="19" viewBox="0 0 80 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                        <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                    </svg>
                                </div>
                                <div class="counter-1">
                                    <div class="number-counter">
                                        <span class="number" data-speed="3000" data-to="35" data-inviewport="yes">35</span>K+
                                    </div>
                                    <h6 class="title">Artist</h6>    
                                </div>
                                <div class="space">
                                    <svg width="80" height="19" viewBox="0 0 80 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                        <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                        <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white" stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                    </svg>
                                </div>
                                <div class="counter-1">
                                    <div class="number-counter">
                                        <span class="number" data-speed="3000" data-to="128" data-inviewport="yes">128</span>K+
                                    </div>
                                    <h6 class="title">NFTs Created</h6>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 widget-box-icon">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section-1">
                                <h2 class="tf-title pb-40">Why choose us</h2>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-md-4">
                            <div class="box-icon-item">
                                <img src="{{asset('/../template/assets/images/item-background/about-01.png')}}" alt="">
                                <div class="title"><a href="#">Flexible payment</a></div>
                                <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-md-4">
                            <div class="box-icon-item">
                                <img src="{{asset('/../template/assets/images/item-background/about-02.png')}}" alt="">
                                <div class="title"><a href="#">Huge data warehouse</a></div>
                                <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-md-4">
                            <div class="box-icon-item">
                                <img src="{{asset('/../template/assets/images/item-background/about-03.png')}}" alt="">
                                <div class="title"><a href="#">3 layer security</a></div>
                                <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-our-team">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section-1">
                                <h2 class="tf-title pb-40">Meet Our Amazing Team</h2>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-01.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-02.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-03.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-04.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-05.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.5s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-38 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-06.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-center">
                        <div data-wow-delay="0s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-40 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-07.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-40 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-08.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-40 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-09.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-40 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-10.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" class="wow fadeInUp col-md-2 col-6">
                            <div class="our-team-item pb-40 text-center">
                                <img src="{{asset('/../template/assets/images/avatar/team-11.png')}}" alt="">
                                <div class="name"><a href="#">Marvin McKinney</a></div>
                                <div class="info">CEO, Director</div>
                                <div class="widget-social">
                                    <ul class="flex justify-center">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="tf-button style-1 h50 w190 m-auto">Join us<i class="icon-arrow-up-right2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 wrap-accordion pt-80">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section-1">
                                <h2 class="tf-title pb-40">Frequently Asked Questions</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flat-accordion">
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle">
                                    <h6 class="toggle-title">1. Why are NFTs becoming popular?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle">
                                    <h6 class="toggle-title">2. How do I keep my NFTs safe?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle">
                                    <h6 class="toggle-title">3. What is blockchain?</h6>
                                    <div class="toggle-content">
                                        <p>Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network. An asset can be tangible (a house, car, cash, land) or intangible (intellectual property, patents, copyrights, branding). Virtually anything of value can be tracked and traded on a blockchain network, reducing risk and cutting costs for all involved</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle">
                                    <h6 class="toggle-title">4. What is an NFT?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle">
                                    <h6 class="toggle-title">5. How do I set up my Ledger?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flat-accordion2">
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                    <h6 class="toggle-title">6. Why are NFTs becoming popular?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                    <h6 class="toggle-title">7. How do I keep my NFTs safe?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                    <h6 class="toggle-title">8. What is blockchain?</h6>
                                    <div class="toggle-content" >
                                        <p>Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network. An asset can be tangible (a house, car, cash, land) or intangible (intellectual property, patents, copyrights, branding). Virtually anything of value can be tracked and traded on a blockchain network, reducing risk and cutting costs for all involved</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                    <h6 class="toggle-title">9. What is an NFT?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>
                                <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                    <h6 class="toggle-title">10. How do I set up my Ledger?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                <div class="text">Still have question?</div>
                                <p>Can't find what you're looking for? Please <a href="#" class="tf-color">chat to our friendly team</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget-income">
                                <div class="title">Generate passive income with the platform <span class="tf-color">Open9</span></div>
                                <p>get started with the easiest and most secure platform to buy and trade digital ART and NFTs</p>
                                <a href="#" class="tf-button style-1 h50 w190">Get started<i class="icon-arrow-up-right2"></i></a>
                                <div class="image">
                                    <img class="iphone" src="{{asset('/../template/assets/images/box-icon/iphone.png')}}" alt="">
                                    <img class="icon-1" src="{{asset('/../template/assets/images/item-background/item11.png')}}" alt="">
                                    <img class="icon-2" src="{{asset('/../template/assets/images/item-background/item12.png')}}" alt="">
                                    <img class="icon-3" src="{{asset('/../template/assets/images/item-background/item13.png')}}" alt="">
                                    <img class="icon-4" src="{{asset('/../template/assets/images/item-background/item14.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer id="footer" class="no-bg">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content flex flex-grow">
                                <div class="widget-logo flex-grow">
                                    <div class="logo-footer" id="logo-footer">
                                        <a href="index.html">
                                            <img id="logo_footer" src="{{asset('/../template/assets/images/logo/logo.png')}}" 
                                            data-retina="{{asset('/../template/assets/images/logo/logo.png')}}">
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
            </footer>
            <!-- /#footer -->
           
        </div>
        <!-- /#page -->

        <!-- Modal Popup Bid -->
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="image">
                            <img src="{{asset('/../template/assets/images/backgroup-section/popup.png')}}" alt="">
                        </div>
                        <div class="logo-rotate">
                            <img class="" src="{{asset('/../template/assets/images/item-background/item6-img.png')}}" alt="">
                        </div>
                        <h2>Subscribe to our newsletter</h2>
                        <p>Subscribe for our newsletter to stay in the loop</p>
                        <fieldset class="email">
                            <input type="email" class="style-1" id="email" placeholder="Email address*" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <a href class="tf-button style-1 h50">Subscribe<i class="icon-arrow-up-right2"></i></a>
                    </div>
                </div>
            </div>
        </div>

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


<!-- Mirrored from themesflat.co/html/open9/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:21 GMT -->
</html>