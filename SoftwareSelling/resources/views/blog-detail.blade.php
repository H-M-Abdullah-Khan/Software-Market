<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/open9/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:22:30 GMT -->
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
                                            <li class="menu-item current-menu-item">
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
                                <li class="menu-item current-menu-item">
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

            <div class="flat-title-page blog-detail">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="breadcrumbs flex">
                                <li class="icon-keyboard_arrow_right">
                                    <a href="{{ url('welcome') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Explore</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section tf-blog-detail pb-48">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="wrapper col-md-8">
                            <div class="inner-content mr-20">
                                <h2 class="title-post">Star Atlas Showroom 2.1: Massive ships and pretty skins</h2>
                                <div class="meta-post flex justify-between mt-10 items-center">
                                    <div class="author flex items-center justify-between">
                                        <div class="avatar">
                                            <img src="{{asset('../template/assets/images/avatar/avatar-box-01.jpg')}}" alt="Image">
                                        </div>
                                        <div class="info">
                                            <span>Posted by:</span>
                                            <h6><a href="{{url ('author-2') }}">Marvin McKinney</a> </h6>
                                        </div>
                                    </div>
                                    <div class="meta-info flex">
                                        <div class="item art active">NFTs</div>
                                        <div class="item date">Mon, 08 May</div>
                                        <div class="item comment">0 Comment</div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="title">If you are an investor, trying to pick which blockchain game to pour your money into, how do you tease apart the gold and the mud?</div>
                                <div class="image">
                                    <img src="{{asset('../template/assets/images/blog/blog-detail-01.png')}}" alt="Image">
                                </div>
                                <div class="inner-post">
                                    <h3 class="heading">The answer has changed for Yan Liberman over the past few years.</h3>    
                                    <p>Yan is a founder at Delphi Digital, an organisation which started out researching crypto, moved into consulting (actually building stuff) and then moved into full-on investment. Delphi have financed scores of projects, including Polemos. Eighty-five people say they work for Delphi on LinkedIn, double what is listed on the website. That speaks to explosive growth.
                                    </p> 
                                    <blockquote>
                                        <span class="icon-quote"></span>
                                        <p>
                                            Hal: So Yan, you’ve been through some ups and downs because you were in crypto in 2017. So you experienced the fluctuations of the market a few times since then. I think two big downturns, and we’re still in the second of those. Is that exhausting?
                                        </p>
                                    </blockquote>
                                    <div class="image-box">
                                        <img src="{{asset('../template/assets/images/blog/blog-detail-02.png')}}" alt="Image">
                                    </div>
                                    <p>Yan: I like to invest and something that helps me excel is just having a very large tolerance for risk. And so the swings up are euphoric and the swings down can be tough. I think what ends up happening is you just, you’re dead inside from the volatility.</p>
                                </div>
                                <div class="inner-post style-1">
                                    <h3 class="heading ">Countdown to Zero</h3>    
                                    <p>At a preview of the device days before its launch, Meta gave reporters a glimpse of the type of user it had in mind by showcasing apps like Tribe XR, a virtual training environment for DJs learning how to use complex equipment.
                                    </p> 
                                    <div class="image-box">
                                        <div class="w-full">
                                            <img src="{{asset('../template/assets/images/blog/blog-detail-03.png')}}" alt="Image">
                                        </div>
                                        <div class="w-full">
                                            <img src="{{asset('../template/assets/images/blog/blog-detail-04.png')}}" alt="Image">
                                        </div>
                                    </div>
                                    <p>The latest demo version of Illuvium’s city builder Zero was due out in February. It’s here now, released yesterday, so I can stop whining.</p>
                                    <p>Our experts Caveman and Moggy have been playing and passing on their wisdom. Right now, there’s only a small group of people who could benefit from knowing exactly how to maximise resource production by the placement of footpaths, but we’ve got them covered</p>
                                </div>
                                <div class="divider style-1"></div>
                                <div class="bottom flex justify-between items-center">
                                    <div class="widget-tag flex items-center">
                                        <h3 class="title-widget">Tags:</h3>
                                        <ul class="flex flex-wrap gap4 items-center">
                                            <li><a href="#">nfts</a></li>
                                            <li><a href="#">crypto</a></li>
                                            <li><a href="#">cyfonii</a></li>
                                            <li><a href="#">collection</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-social">
                                        <ul class="flex">
                                            <li><a href="#" class="icon-facebook"></a></li>
                                            <li><a href="#" class="icon-twitter"></a></li>
                                            <li><a href="#" class="icon-linkedin2"></a></li>
                                            <li><a href="#" class="icon-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="related-post">
                                    <div class="prev">
                                        <a href="#"><i class="icon-keyboard_arrow_left"></i>Previous post</a>
                                        <div class="action items-center left flex mt-16">
                                            <img src="{{asset('../template/assets/images/blog/related-01.jpg')}}" alt="">
                                            <div class="content">
                                                <h5>Unreal Engine for Fortnite is a big deal</h5>
                                                <div class="meta-info flex">
                                                    <div class="item date">Mon, 08 May</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next text-end">
                                        <a href="#">Next post<i class="icon-keyboard_arrow_right"></i></a>
                                        <div class="action items-center right flex mt-16">
                                            <div class="content">
                                                <h5>Regulators step in, mayhem ensues</h5>
                                                <div class="meta-info flex justify-end">
                                                    <div class="item date">Mon, 08 May</div>
                                                </div>
                                            </div>
                                            <img src="{{asset('../template/assets/images/blog/related-02.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-comment">
                                    <h3>Comment (5)</h3>
                                    <ul>
                                        <li class="comment-box">
                                            <img src="{{asset('../template/assets/images/avatar/avatar-user-01.jpg')}}" alt="">
                                            <div class="comment-right">
                                                <div class="top flex justify-between items-center">
                                                    <div class="info">
                                                        <h5>Annette Black</h5>
                                                    </div>
                                                    <span>Mon, 08 May </span>
                                                </div>
                                                <p class="">Nullam ornare a magna quis aliquet. Duis suscipit eros in suscipit venenatis. Pellentesque quis efficitur leo. Maecenas accumsan est in nibh interdum, quis dignissim neque scelerisque.</p>
                                                <a href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li class="comment-box rep">
                                            <img src="{{asset('../template/assets/images/avatar/avatar-user-02.jpg')}}" alt="">
                                            <div class="comment-right">
                                                <div class="top flex justify-between items-center">
                                                    <div class="info">
                                                        <h5>Annette Black</h5>
                                                    </div>
                                                    <span>Mon, 08 May </span>
                                                </div>
                                                <p class="">Nullam ornare a magna quis aliquet. Duis suscipit eros in suscipit venenatis. Pellentesque quis efficitur leo. Maecenas accumsan est in nibh interdum, quis dignissim neque scelerisque.</p>
                                                <a href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li class="comment-box">
                                            <img src="{{asset('../template/assets/images/avatar/avatar-user-03.jpg')}}" alt="">
                                            <div class="comment-right">
                                                <div class="top flex justify-between items-center">
                                                    <div class="info">
                                                        <h5>Annette Black</h5>
                                                    </div>
                                                    <span>Mon, 08 May </span>
                                                </div>
                                                <p class="">Nullam ornare a magna quis aliquet. Duis suscipit eros in suscipit venenatis. Pellentesque quis efficitur leo. Maecenas accumsan est in nibh interdum, quis dignissim neque scelerisque.</p>
                                                <a href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li class="comment-box">
                                            <img src="{{asset('../template/assets/images/avatar/avatar-user-04.jpg')}}" alt="">
                                            <div class="comment-right">
                                                <div class="top flex justify-between items-center">
                                                    <div class="info">
                                                        <h5>Annette Black</h5>
                                                    </div>
                                                    <span>Mon, 08 May </span>
                                                </div>
                                                <p class="">Nullam ornare a magna quis aliquet. Duis suscipit eros in suscipit venenatis. Pellentesque quis efficitur leo. Maecenas accumsan est in nibh interdum, quis dignissim neque scelerisque.</p>
                                                <a href="#">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-reply">
                                    <h3 class="heading">
                                        Leave A Reply
                                    </h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form   id="commentform" class="comment-form" >
                                        <div class="flex justify-between">
                                            <fieldset class="name">
                                                <input type="text" id="name" placeholder="Your name*" class="style-1" name="name" tabindex="2" value="" aria-required="true" required>
                                            </fieldset>
                                            <fieldset class="email">
                                                <input type="email" id="email" placeholder="Email address*" class="style-1" name="email" tabindex="2" value="" aria-required="true" required>
                                            </fieldset>
                                        </div>
                                        <fieldset class="message">
                                            <textarea id="message" name="message" rows="4" placeholder="Your comment*" class="style-1 m-0" tabindex="4" aria-required="true" required></textarea>
                                        </fieldset>
                                        <div class="btn-submit text-center">
                                            <button class="" type="submit">
                                                Submit comment
                                        </button>
                                        </div>
                                    </form>
                                </div>
    
                            </div>
                        </div>
                        <div class="side-bar col-md-4">
                            <div class="widget-search">
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
                            <div class="widget widget-related-posts">
                                <h5 class="title-widget">Related posts</h5>
                                <div class="related-posts-item main">
                                    <div class="card-media">
                                        <img src="{{asset('../template/assets/images/blog/sidebar-01.jpg')}}" alt="">
                                    </div>
                                    <div class="meta-info flex">
                                        <div class="item art active">Digital Art</div>
                                        <div class="item date">Mon, 08 May </div>
                                    </div>
                                    <h5><a href="{{url ('nft-detail-2') }}">Lorem ipsum dolor sit amet, consectetur adipiscing pulvinar</a></h5>
                                </div>
                                <div class="related-posts-item">
                                    <div class="card-media">
                                        <img src="{{asset('../template/assets/images/blog/sidebar-02.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5><a href="{{url ('nft-detail-2') }}">Explore Arc8: Web3 Concepts Meet Gaming</a></h5>
                                        <div class="item date">Mon, 08 May </div>
                                    </div>
                                </div>
                                <div class="related-posts-item">
                                    <div class="card-media">
                                        <img src="{{asset('../template/assets/images/blog/sidebar-03.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5><a href="{{url ('nft-detail-2') }}">Explore Arc8: Web3 Concepts Meet Gaming</a></h5>
                                        <div class="item date">Mon, 08 May </div>
                                    </div>
                                </div>
                                <div class="related-posts-item">
                                    <div class="card-media">
                                        <img src="{{asset('../template/assets/images/blog/sidebar-04.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5><a href="{{url ('nft-detail-2') }}">Explore Arc8: Web3 Concepts Meet Gaming</a></h5>
                                        <div class="item date">Mon, 08 May </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-tag ">
                                <h5 class="title-widget">Popular tags</h5>
                                <ul class="flex flex-wrap">
                                    <li><a href="#" class="box-widget-tag">ICO</a></li>
                                    <li><a href="#" class="box-widget-tag">Digital Art</a></li>
                                    <li><a href="#" class="box-widget-tag">Gaming</a></li>
                                    <li><a href="#" class="box-widget-tag">NFTs</a></li>
                                    <li><a href="#" class="box-widget-tag">Crypto</a></li>
                                    <li><a href="#" class="box-widget-tag">Concepts</a></li>
                                    <li><a href="#" class="box-widget-tag">Technology</a></li>
                                    <li><a href="#" class="box-widget-tag">Land</a></li>
                                    <li><a href="#" class="box-widget-tag">Web3</a></li>
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


<!-- Mirrored from themesflat.co/html/open9/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:22:59 GMT -->
</html>