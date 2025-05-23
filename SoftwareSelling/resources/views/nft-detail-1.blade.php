<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/open9/nft-detail-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:23 GMT -->
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

<body class="body header-fixed counter-scroll">

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
                                            <li class="menu-item current-menu-item">
                                                <a href="{{ url('welcome') }}">Home</a>
                                            </li>
                                            <li class="menu-item">
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

            <div class="tf-section-2 product-detail">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                                <div class="card-media mb-0">
                                    <a href="#">
                                        <img src="assets/images/box-item/product-01.jpg" alt="">
                                    </a>
                                </div>
                                <h6 class="price gem"><i class="icon-gem"></i></h6>
                                <div class="wishlist-button">10<i class="icon-heart"></i></div>
                                <div class="featured-countdown">
                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                                <div class="card-media mb-0">
                                    <a href="#">
                                        <img src="assets/images/box-item/product-02.jpg" alt="">
                                    </a>
                                </div>
                                <h6 class="price gem"><i class="icon-gem"></i></h6>
                                <div class="wishlist-button">10<i class="icon-heart"></i></div>
                                <div class="featured-countdown">
                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                                <div class="card-media mb-0">
                                    <a href="#">
                                        <img src="assets/images/box-item/product-03.jpg" alt="">
                                    </a>
                                </div>
                                <h6 class="price gem"><i class="icon-gem"></i></h6>
                                <div class="wishlist-button">10<i class="icon-heart"></i></div>
                                <div class="featured-countdown">
                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                                <div class="text">8SIAN Main Collection <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div>
                                <div class="menu_card">
                                    <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-link-1"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                                <a class="dropdown-item" href="#"><i class="icon-facebook"></i>Share on facebook</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-twitter"></i>Share on twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-content"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="icon-refresh"></i>Refresh metadata</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-report"></i>Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Themesflat #0270</h2>
                                <div class="author flex items-center mb-30">
                                    <div class="avatar">
                                        <img src="assets/images/avatar/avatar-box-05.jpg" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Owned by:</span>
                                        <h6><a href="author-1.html">Marvin McKinney</a> </h6>
                                    </div>
                                </div>
                                <div class="meta mb-20">
                                    <div class="meta-item view">
                                        <i class="icon-show"></i>208 view
                                    </div>
                                    <div class="meta-item rating">
                                        <i class="icon-link-2"></i>Top #2 trending
                                    </div>
                                    <div class="meta-item favorites">
                                        <i class="icon-heart"></i>10 favorites
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
                                <h6><i class="icon-clock"></i>Sale ends May 22 at 9:39</h6>
                                <div class="content">
                                    <div class="text">Current price</div>
                                    <div class="flex justify-between">
                                        <p>0,032 ETH <span>$58,11</span></p>
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button style-1 h50 w216">Place a bid<i class="icon-arrow-up-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item description">
                                <h6><i class="icon-description"></i>Description</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <p>8,888 NFTs of beautiful, Asian women painstakingly-crafted where even the most intricate details are steeped in historical significance. We envision 8SIAN being a global, inclusive community that brings together members who share admiration for Asian cultures. We want to represent, educate and build a lasting presence in the NFT space.</p>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item history">
                                <h6><i class="icon-description"></i>Price History</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="chart">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item details">
                                <h6><i class="icon-description"></i>Details</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="details-item">
                                        <span>Contract Address</span>
                                        <span class="tf-color">0x1984...c38f</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token ID</span>
                                        <span class="tf-color">0270</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token Standard</span>
                                        <span class="">ERC-721</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Chain</span>
                                        <span class="">Ethereum</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Last Updated</span>
                                        <span class="">8 months ago</span>
                                    </div>
                                    <div class="details-item mb-0">
                                        <span>Creator Earnings</span>
                                        <span class="">8%</span>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item traits">
                                <h6><i class="icon-description"></i>Traits</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-12">
                            <div class="product-item offers">
                                <h6><i class="icon-description"></i>Offers</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="table-heading">
                                        <div class="column">Price</div>
                                        <div class="column">USD Price</div>
                                        <div class="column">Quantity</div>
                                        <div class="column">Floor Diference</div>
                                        <div class="column">Expiration</div>
                                        <div class="column">Form</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-12">
                            <div class="product-item item-activity mb-0">
                                <h6><i class="icon-two-arrow rotateZ90"></i>Item activity</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="table-heading">
                                        <div class="column">Event</div>
                                        <div class="column">Price</div>
                                        <div class="column">Form</div>
                                        <div class="column">To</div>
                                        <div class="column">Date</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-two-arrow"></i>Transfer</div>
                                        <div class="column">-/-</div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-sale"></i>Sale</div>
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0319</h6></div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-two-arrow"></i>Transfer</div>
                                        <div class="column">-/-</div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-sale"></i>Sale</div>
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0319</h6></div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 featured-item style-bottom">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section pb-20">
                                <h2 class="tf-title ">Related artworks</h2>
                                <a href="explore-3.html" class="">Discover more <i class="icon-arrow-right2"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="featured pt-10 swiper-container carousel" data-swiper='{
                                "loop":false,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "spaceBetween": 30,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".slider-next",
                                    "prevEl": ".slider-prev"
                                },
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "768": {
                                        "slidesPerView": 2,
                                        "spaceBetween": 30
                                    },
                                    "1024": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 30
                                    },
                                    "1300": {
                                        "slidesPerView": 4,
                                        "spaceBetween": 30
                                    }
                                }
                            }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-01.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-01.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-02.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-02.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-03.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-03.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-04.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-04.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-01.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-05.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-02.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-06.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-03.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-07.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="slider-next swiper-button-next"></div>
                                <div class="slider-prev swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer id="footer">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content flex flex-grow">
                                <div class="widget-logo flex-grow">
                                    <div class="logo-footer" id="logo-footer">
                                        <a href="{{ url('welcome') }}">
                                            <img id="logo_footer" src="{{asset('template/assets/images/logo/logo.png')}}"
                                            data-retina="{{asset('template/assets/images/logo/logo.png')}}">
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

        <!-- Modal Popup Bid -->
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="image">
                            <img src="assets/images/backgroup-section/popup.png" alt="">
                        </div>
                        <div class="logo-rotate">
                            <img class="" src="assets/images/item-background/item6-img.png" alt="">
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


<!-- Mirrored from themesflat.co/html/open9/nft-detail-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:29 GMT -->
</html>