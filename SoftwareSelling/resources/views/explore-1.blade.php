<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/open9/explore-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:21 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Explore</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../template/assets/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../template/assets/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('../template/assets/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('../template/assets/icon/Favicon.png') }}">
    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 520px;
            width: 90%;
            padding: 2.25rem 2rem 2rem 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 0.3s ease forwards;
            position: relative;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.85);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal-header {
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 1.25rem;
            color: #222;
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.5rem;
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #555;
            transition: color 0.2s ease;
        }

        .modal-close:hover {
            color: #000;
        }

        .receipt-details p {
            margin: 0.6rem 0;
            font-size: 1.1rem;
            color: #333;
            line-height: 1.3;
        }

        .receipt-details p strong {
            color: #000;
            width: 140px;
            display: inline-block;
        }

        .footer-button {
            background: #007bff;
            color: white;
            padding: 0.75rem 1.75rem;
            font-size: 1rem;
            border-radius: 6px;
            margin-top: 1.5rem;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        .footer-button:hover {
            background-color: #0056b3;
        }
    </style>

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
                                                <img id="logo_header"
                                                    src="{{ asset('../template/assets/images/logo/logo.png') }}"
                                                    data-retina="{{ asset('../template/assets/images/logo/logo.png') }}">
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
                                                <a href="{{ url('about-us') }}">About us</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="{{ url('explore-1') }}">Explore</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="{{ url('market') }}">Market</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item has-item">
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-create') }}">Create</a></li>
                                                    <li class="nav-menu-item"><a href="{{ url('market') }}">Market</a>
                                                    </li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-active-bid') }}">Active Bid</a></li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-explore') }}">Explore</a></li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-collection') }}">My collection</a>
                                                    </li>
                                                    <li class="nav-menu-item"><a href="{{ url('market-favorite') }}">My
                                                            favorite</a></li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-wallet') }}">Wallet</a></li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market-history') }}">History</a></li>
                                                    <li class="nav-menu-item"><a
                                                            href="{{ url('market') }}">Settings</a></li>
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
                                                @if (Auth::user()->role == 'admin')
                                                    <li class="menu-item">
                                                        <a href="{{ url('/admin/dashboard') }}">
                                                            Admin Dashboard
                                                        </a>
                                                    </li>
                                                @elseif(Auth::user()->role == 'company')
                                                    <li class="menu-item">
                                                        <a href="{{ url('/company/dashboard') }}">
                                                            Company Dashboard
                                                        </a>
                                                    </li>
                                                @elseif(Auth::user()->role == 'company')
                                                    <li class="menu-item">
                                                        <a href="{{ url('/dashboard') }}">
                                                            User Dashboard
                                                        </a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="menu-item">
                                                    <a class="" href="{{ route('login') }}">
                                                        Log in
                                                    </a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="menu-item">
                                                        <a href="{{ route('register') }}">
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
                                <img id="logo_header" src="{{ asset('../template/assets/images/logo/logo.png') }}"
                                    data-retina="{{ asset('../template/assets/images/logo/logo.png') }}">
                            </a>
                            <div class="canvas-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="white" x="0px" y="0px" width="20px" height="20px"
                                    viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="widget-search mt-30">
                                <form action="#" method="get" role="search" class="search-form relative">
                                    <input type="search" id="search" class="search-field style-1"
                                        placeholder="Search..." value="" name="s" title="Search for"
                                        required="">
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
                            <img id="mobile-logo_header"
                                src="{{ asset('/../template/assets/images/logo/logo.png') }}"
                                data-retina="{{ asset('/../template/assets/images/logo/logo@2x.png') }}">
                        </a>
                        <div class="mobile-nav-close">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="white" x="0px" y="0px" width="20px" height="20px"
                                viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                </g>
                            </svg>
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
                                        <li class="menu-item"><a href="{{ url('market-active-bid') }}">Active Bid</a>
                                        </li>
                                        <li class="menu-item"><a href="{{ url('market-explore') }}">Explore</a></li>
                                        <li class="menu-item"><a href="{{ url('market-collection') }}">My
                                                collection</a></li>
                                        <li class="menu-item"><a href="{{ url('market-favorite') }}">My favorite</a>
                                        </li>
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
                                        @if (Auth::user()->role == 'admin')
                                            <li class="menu-item">
                                                <a href="{{ url('/admin/dashboard') }}">
                                                    Admin Dashboard
                                                </a>
                                            </li>
                                        @elseif(Auth::user()->role == 'company')
                                            <li class="menu-item">
                                                <a href="{{ url('/company/dashboard') }}">
                                                    Company Dashboard
                                                </a>
                                            </li>
                                        @elseif(Auth::user()->role == 'user')
                                            <li class="menu-item">
                                                <a href="{{ url('/dashboard') }}">
                                                    User Dashboard
                                                </a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="menu-item">
                                            <a class="" href="{{ route('login') }}">
                                                Log in
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="menu-item">
                                                <a href="{{ route('register') }}">
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
                                <input type="search" class="search-field style-1" placeholder="Search..."
                                    value="" name="s" title="Search for" required="">
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
                            <h1 class="heading text-center">Explore Product</h1>
                            <ul class="breadcrumbs flex justify-center">
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

            {{-- Product Search & Filter --}}
            <div class="themesflat-container">
                <div class="soft-left">
                    <form method="GET" action="{{ route('products.Search') }}" class="search-form w-100">
                        <input type="text" name="search" placeholder="Search by name"
                            value="{{ request('search') }}" type="search"
                            class="search-field style-1 __web-inspector-hide-shortcut__" title="Search for">
                        <button class="search search-submit" type="submit" title="Search">
                            <i class="icon-search"></i>
                        </button>
                        {{-- <select name="category">
                    <option value="">All Categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select> --}}

                        <input type="number" name="min_price" placeholder="Min Price"
                            value="{{ request('min_price') }}">
                        <input type="number" name="max_price" placeholder="Max Price"
                            value="{{ request('max_price') }}">


                    </form>
                </div>
                <div class="tf-section-2 discover-item loadmore-12-item">
                    <div class="themesflat-container">
                        <div class="row">
                            <div class="col-md-12 pb-30">
                                <div class="tf-soft flex items-center justify-between">
                                    <div class="soft-left">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span class="inner">Category</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item">
                                                    <div class="sort-filter active">
                                                        <span>All</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Art</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Photography</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Music</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 6.25L15.625 5.15583M17.5 6.25V8.125M17.5 6.25L15.625 7.34417M2.5 6.25L4.375 5.15583M2.5 6.25L4.375 7.34417M2.5 6.25V8.125M10 10.625L11.875 9.53083M10 10.625L8.125 9.53083M10 10.625V12.5M10 18.125L11.875 17.0308M10 18.125V16.25M10 18.125L8.125 17.0308M8.125 2.96833L10 1.875L11.875 2.96917M17.5 11.875V13.75L15.625 14.8442M4.375 14.8442L2.5 13.75V11.875"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span class="inner">Items</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item">
                                                    <div class="sort-filter active">
                                                        <span>All</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Art</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Photography</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Music</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.25 14.0625H14.0625M14.0625 14.0625H16.875M14.0625 14.0625V11.25M14.0625 14.0625V16.875M5 8.75H6.875C7.37228 8.75 7.84919 8.55246 8.20082 8.20082C8.55246 7.84919 8.75 7.37228 8.75 6.875V5C8.75 4.50272 8.55246 4.02581 8.20082 3.67417C7.84919 3.32254 7.37228 3.125 6.875 3.125H5C4.50272 3.125 4.02581 3.32254 3.67417 3.67417C3.32254 4.02581 3.125 4.50272 3.125 5V6.875C3.125 7.37228 3.32254 7.84919 3.67417 8.20082C4.02581 8.55246 4.50272 8.75 5 8.75ZM5 16.875H6.875C7.37228 16.875 7.84919 16.6775 8.20082 16.3258C8.55246 15.9742 8.75 15.4973 8.75 15V13.125C8.75 12.6277 8.55246 12.1508 8.20082 11.7992C7.84919 11.4475 7.37228 11.25 6.875 11.25H5C4.50272 11.25 4.02581 11.4475 3.67417 11.7992C3.32254 12.1508 3.125 12.6277 3.125 13.125V15C3.125 15.4973 3.32254 15.9742 3.67417 16.3258C4.02581 16.6775 4.50272 16.875 5 16.875ZM13.125 8.75H15C15.4973 8.75 15.9742 8.55246 16.3258 8.20082C16.6775 7.84919 16.875 7.37228 16.875 6.875V5C16.875 4.50272 16.6775 4.02581 16.3258 3.67417C15.9742 3.32254 15.4973 3.125 15 3.125H13.125C12.6277 3.125 12.1508 3.32254 11.7992 3.67417C11.4475 4.02581 11.25 4.50272 11.25 5V6.875C11.25 7.37228 11.4475 7.84919 11.7992 8.20082C12.1508 8.55246 12.6277 8.75 13.125 8.75Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span class="inner">Status</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item">
                                                    <div class="sort-filter active">
                                                        <span>All</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Art</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Photography</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span>Music</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 5V15M7.5 12.6517L8.2325 13.2008C9.20833 13.9333 10.7908 13.9333 11.7675 13.2008C12.7442 12.4683 12.7442 11.2817 11.7675 10.5492C11.28 10.1825 10.64 10 10 10C9.39583 10 8.79167 9.81667 8.33083 9.45083C7.40917 8.71833 7.40917 7.53167 8.33083 6.79917C9.2525 6.06667 10.7475 6.06667 11.6692 6.79917L12.015 7.07417M17.5 10C17.5 10.9849 17.306 11.9602 16.9291 12.8701C16.5522 13.7801 15.9997 14.6069 15.3033 15.3033C14.6069 15.9997 13.7801 16.5522 12.8701 16.9291C11.9602 17.306 10.9849 17.5 10 17.5C9.01509 17.5 8.03982 17.306 7.12987 16.9291C6.21993 16.5522 5.39314 15.9997 4.6967 15.3033C4.00026 14.6069 3.44781 13.7801 3.0709 12.8701C2.69399 11.9602 2.5 10.9849 2.5 10C2.5 8.01088 3.29018 6.10322 4.6967 4.6967C6.10322 3.29018 8.01088 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10322 17.5 8.01088 17.5 10Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span class="inner">Price range</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item">
                                                    <div class="sort-filter active">
                                                        <span> Price: Low to High</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="sort-filter">
                                                        <span> Price: High to Low</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="soft-right">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.125 5.625H16.875M3.125 10H16.875M3.125 14.375H10"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>Sort by: recently added</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <h6>Sort by</h6>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter" href="#">
                                                        <span>Recently added</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter active" href="#">
                                                        <span>Price: Low to High</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter" href="#">
                                                        <span>Price: High to Low</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter" href="#">
                                                        <span>Auction ending soon</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>

                                                <h6>Options</h6>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter" href="#">
                                                        <span>Auction ending soon</span>
                                                        <input class="check" type="checkbox" value="checkbox"
                                                            name="check" checked="">
                                                    </div>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <div class="sort-filter" href="#">
                                                        <span>Show lazy minted</span>
                                                        <input class="check" type="checkbox" value="checkbox"
                                                            name="check">
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Card Start --}}
                            @if ($products->count())
                                @foreach ($products as $product)
                                    <div data-wow-delay="0s"
                                        class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="{{ url('software_products', $product->id) }}">
                                                    @if (is_array($product->screenshots) && count($product->screenshots) > 0)
                                                        <img src="{{ asset('storage/' . $product->screenshots[0]) }}"
                                                            alt="{{ $product->name }}">
                                                    @else
                                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-01.jpg') }}"
                                                            alt="No image">
                                                    @endif
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="button-place-bid">
                                                    <a {{-- href="{{  url('software_products', $product->id) }}"
                                                class="tf-button" --}} href="#" data-toggle="modal"
                                                        data-target="#popup_bid" class="tf-button">
                                                        <span>{{ $product->pricing_type === 'free' ? 'Download' : 'Buy Now' }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5 class="name">
                                                <a href="{{ url('software_products', $product->id) }}">
                                                    {{ Str::limit($product->name, 30) }}
                                                </a>
                                            </h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="{{ asset('user_profile') }}" alt="Creator Avatar">
                                                </div>
                                                <div class="info">
                                                    <span>Created by:</span>
                                                    <h6>
                                                        <a href="#">{{ $product->user->name ?? 'Unknown' }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Price</span>
                                                <h6 class="price gem">
                                                    <i class="icon-gem"></i>
                                                    {{ $product->pricing_type === 'free' ? 'Free' : number_format($product->price, 2) }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center mt-3 mb-5">
                                    <h1>No products found.</h1>
                                </div>
                            @endif
                            {{-- Card End --}}

                            {{-- <div data-wow-delay="0.1s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-36.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-02.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-37.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-03.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-38.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-04.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-01.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-05.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-02.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-06.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-03.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-07.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-04.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-01.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-19.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-01.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-20.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-02.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-21.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-03.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-22.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-04.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-27.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-05.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-28.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-06.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-29.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-07.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('/../template/assets/images/box-item/card-item-30.jpg') }}"
                                            alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('/../template/assets/images/avatar/avatar-box-01.jpg') }}"
                                            alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6><a href="author-2.html">Kristin Watson</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div> --}}
                            <div class="col-md-12 load-more">
                                <a id="button-loadmore" class="tf-button-loadmore">
                                    <span>Load More</span>
                                    <i class="icon-loading-1"></i>
                                </a>
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
                                            <a href="{{ url('welcome') }}">
                                                <img id="logo_footer"
                                                    src="{{ asset('/../template/assets/images/logo/logo.png') }}"
                                                    data-retina="{{ asset('/../template/assets/images/logo/logo.png') }}">
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            id="popupBidCloseBtn">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body">
                            <div class="image">
                                <img src="{{ asset('/../template/assets/images/backgroup-section/popup.png') }}"
                                    alt="">
                            </div>
                            <div class="logo-rotate">
                                <img src="{{ asset('/../template/assets/images/item-background/item6-img.png') }}"
                                    alt="">
                            </div>
                            <h2>Confirmation Purchase</h2>
                            <p>Are You Sure You Want To Buy This Software</p>
                            <fieldset class="email">
                                <input type="email" class="style-1" id="email" placeholder="Email address*"
                                    name="email" tabindex="2" value="" aria-required="true"
                                    required="">
                            </fieldset>
                            <form action="/purchase-requests" method="POST" id="order-form">
                                @csrf
                                <div class="d-flex justify-content-center mt-3">
                                    <input type="hidden" name="software_id" value="{{ $product->id }}">
                                    <input type="hidden" name="product_name" value="{{ $product->name }}">
                                    <input type="hidden" name="order_date" value="{{ now() }}">
                                    <input type="hidden" name="customer_name"
                                        value="{{ Auth::check() ? Auth::user()->name : 'Guest' }}">
                                    <input type="hidden" name="payment" value="Credit Card">
                                    <input type="hidden" name="payment_status" value="Pending">
                                    <input type="hidden" name="total_price" value="{{ $product->price }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="order_status" value="Pending">
                                    <button class="tf-button style-1 h50 buy-now" style="color: black;"
                                        type="submit">
                                        Yes, Buy Now<i class="icon-arrow-up-right2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Order Receipt Modal --}}
            <div style="background-color:white;" id="order-receipt-modal" class="modal-overlay" role="dialog"
                aria-modal="true" aria-labelledby="modal-title" aria-describedby="modal-desc" tabindex="-1"
                aria-hidden="true">
                <div class="modal-content">
                    <button class="modal-close" aria-label="Close Order Receipt">&times;</button>
                    <div class="modal-header" id="modal-title" class="text-center">
                        <h1 class="text-center">
                            Order Receipt
                        </h1>
                    </div>
                    <p class="text-center"><strong>
                            Make Sure To Take Screenshot Of The Order Receipt Or Save It
                        </strong></p>
                    <div class="receipt-details" id="receipt-details" aria-live="polite" aria-atomic="true"></div>
                    <button class="footer-button" id="modal-close-footer-btn">Close</button>
                </div>
            </div>


        </div>
        <!-- /#wrapper -->

        <div class="tf-mouse tf-mouse-outer"></div>
        <div class="tf-mouse tf-mouse-inner"></div>

        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
                </path>
            </svg>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Javascript -->
        <script src="{{ asset('/../template/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/swiper.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/count-down.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/simpleParallax.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/gsap.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/tsparticles.min.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/tsparticles.js') }}"></script>
        <script src="{{ asset('/../template/assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const orderForm = document.getElementById('order-form');
                const receiptModal = document.getElementById('order-receipt-modal');
                const receiptDetails = document.getElementById('receipt-details');
                const closeModalBtn = receiptModal.querySelector('.modal-close');
                const closeModalFooterBtn = document.getElementById('modal-close-footer-btn');
                const popupBidModal = document.getElementById('popup_bid');
                const popupBidCloseBtn = document.getElementById('popupBidCloseBtn');
                let lastFocusedElement = null;

                function openReceiptModal() {
                    lastFocusedElement = document.activeElement;
                    receiptModal.classList.add('active');
                    receiptModal.setAttribute('aria-hidden', 'false');
                    closeModalBtn.focus();
                    trapFocus(receiptModal);
                }

                function closeReceiptModal() {
                    receiptModal.classList.remove('active');
                    receiptModal.setAttribute('aria-hidden', 'true');
                    if (lastFocusedElement) {
                        lastFocusedElement.focus();
                    }
                }

                function closePopupBidModal() {
                    popupBidModal.classList.remove('show'); // custom CSS class hatayein (agar ho)
                    popupBidModal.setAttribute('aria-hidden', 'true');
                    popupBidModal.style.display = 'none'; // actual DOM se hide karein
                    document.body.classList.remove('modal-open'); // scroll issue solve karein
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) backdrop.remove(); // agar backdrop use kiya ho to
                }


                function trapFocus(element) {
                    const focusableElements = element.querySelectorAll(
                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                    const firstElement = focusableElements[0];
                    const lastElement = focusableElements[focusableElements.length - 1];

                    element.addEventListener('keydown', function(e) {
                        if (e.key === 'Tab' || e.keyCode === 9) {
                            if (e.shiftKey) {
                                if (document.activeElement === firstElement) {
                                    e.preventDefault();
                                    lastElement.focus();
                                }
                            } else {
                                if (document.activeElement === lastElement) {
                                    e.preventDefault();
                                    firstElement.focus();
                                }
                            }
                        }
                        if (e.key === "Escape" || e.key === "Esc") {
                            closeReceiptModal();
                        }
                    });
                }

                orderForm.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    const buyNowButton = orderForm.querySelector('button.buy-now');
                    buyNowButton.disabled = true;
                    buyNowButton.textContent = "Processing...";

                    const formData = new FormData(orderForm);

                    // Send form data via fetch to backend
                    try {
                        const response = await fetch(orderForm.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                                    .value,
                                'Accept': 'application/json',
                            },
                            body: formData
                        });

                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }

                        const data = await response.json();

                        // Assuming backend responds with the saved order info
                        receiptDetails.innerHTML =
                            `<h5 style="color:black;"><strong>Product Name:</strong> ${data.product_name}</h5><br>
                            <h5 style="color:black;"><strong>Order Date:</strong> ${new Date(data.order_date).toLocaleString()}</h5><br>
                            <h5 style="color:black;"><strong>Customer Name:</strong> ${data.customer_name}</h5><br>
                            <h5 style="color:black;"><strong>Payment Status:</strong> ${data.payment_status}</h5><br>
                            <h5 style="color:black;"><strong>Total Price:</strong> $${parseFloat(data.total_price).toFixed(2)}</h5><br>
                            <h5 style="color:black;"><strong>Quantity:</strong> ${data.quantity}</h5><br>
                            <h5 style="color:black;"><strong>Order Status:</strong> ${data.order_status}</h5><br>
                            <h5 style="color:black;"><strong>Invoice Number:</strong> ${data.invoice_number ?? 'N/A'}</h5>`;

                        // Close the first modal
                        closePopupBidModal();

                        // Open receipt modal
                        openReceiptModal();

                    } catch (error) {
                        alert('There was an error processing your request. Please try again.');
                        console.error('Error:', error);
                    } finally {
                        buyNowButton.disabled = false;
                        buyNowButton.textContent = "Buy Now";
                    }
                });

                closeModalBtn.addEventListener('click', closeReceiptModal);
                closeModalFooterBtn.addEventListener('click', closeReceiptModal);

                receiptModal.addEventListener('click', (e) => {
                    if (e.target === receiptModal) {
                        closeReceiptModal();
                    }
                });

                if (popupBidCloseBtn) {
                    popupBidCloseBtn.addEventListener('click', () => {
                        // Close popup modal if close button clicked
                        $(popupBidModal).modal('hide');
                    });
                }

            });
        </script>



</body>


<!-- Mirrored from themesflat.co/html/open9/explore-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 14:19:21 GMT -->

</html>
