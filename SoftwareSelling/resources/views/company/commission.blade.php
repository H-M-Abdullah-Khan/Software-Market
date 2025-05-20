<!doctype html>
<html lang="en" data-bs-theme="dark">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:22:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Dashboard</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('/../admin/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('/../admin/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/../admin/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('/../admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/../admin/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/../admin/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/../admin/assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('/../admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('/../admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/../admin/sass/responsive.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .commission-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .commission-table th,
        .commission-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .commission-table th {
            /* background-color: #007BFF;
            color: #fff; */
            text: center;
        }

        .commission-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007BFF;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        form.inline-form {
            display: inline;
        }

        .input-rate {
            width: 80px;
            padding: 6px;
            font-size: 14px;
        }

        @media (max-width: 600px) {

            .commission-table,
            .commission-table thead,
            .commission-table tbody,
            .commission-table th,
            .commission-table td,
            .commission-table tr {
                display: block;
            }

            .commission-table tr {
                margin-bottom: 15px;
            }

            .commission-table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .commission-table td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                top: 12px;
                font-weight: bold;
                text-align: left;
            }

            .input-rate {
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-[#f3f7f6] min-h-screen p-4 sm:p-6 md:p-10">

    <!--start header-->
    <header class="top-header">
        <nav class="navbar navbar-expand align-items-center gap-4">
            <div class="btn-toggle">
                <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative">
                    <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text"
                        placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                    <span
                        class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                    <div class="search-popup p-3">
                        <div class="card rounded-4 overflow-hidden">
                            <div class="card-header d-lg-none">
                                <div class="position-relative">
                                    <input class="form-control rounded-5 px-5 mobile-search-control" type="text"
                                        placeholder="Search">
                                    <span
                                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                                    <span
                                        class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                                </div>
                            </div>
                            <div class="card-body search-content">
                                <p class="search-title">Recent Searches</p>
                                <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                                    <a href="javascript:;" class="kewords"><span>Angular Template</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>Dashboard</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>Admin Template</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>Bootstrap 5 Admin</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>Html eCommerce</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>Sass</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                    <a href="javascript:;" class="kewords"><span>laravel 9</span><i
                                            class="material-icons-outlined fs-6">search</i></a>
                                </div>
                                <hr>
                                <p class="search-title">Tutorials</p>
                                <div class="search-list d-flex flex-column gap-2">
                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="list-icon">
                                            <i class="material-icons-outlined fs-5">play_circle</i>
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title ">Wordpress Tutorials</h5>
                                        </div>
                                    </div>
                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="list-icon">
                                            <i class="material-icons-outlined fs-5">shopping_basket</i>
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title">eCommerce Website Tutorials</h5>
                                        </div>
                                    </div>

                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="list-icon">
                                            <i class="material-icons-outlined fs-5">laptop</i>
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title">Responsive Design</h5>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <p class="search-title">Members</p>

                                <div class="search-list d-flex flex-column gap-2">
                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="memmber-img">
                                            <img src="{{ asset('/../admin/assets/images/avatars/01.png') }}"
                                                width="32" height="32" class="rounded-circle" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title ">Andrew Stark</h5>
                                        </div>
                                    </div>

                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="memmber-img">
                                            <img src="{{ asset('/../admin/assets/images/avatars/02.png') }}"
                                                width="32" height="32" class="rounded-circle" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title ">Snetro Jhonia</h5>
                                        </div>
                                    </div>

                                    <div class="search-list-item d-flex align-items-center gap-3">
                                        <div class="memmber-img">
                                            <img src="{{ asset('/../admin/assets/images/avatars/03.png') }}"
                                                width="32" height="32" class="rounded-circle" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0 search-list-title">Michle Clark</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-center bg-transparent">
                                <a href="javascript:;" class="btn w-100">See All Search Results</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav gap-1 nav-right-links align-items-center">
                <li class="nav-item d-lg-none mobile-search-btn">
                    <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;"
                        data-bs-toggle="dropdown"><img src="{{ asset('/../admin/assets/images/county/02.png') }}"
                            width="22" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/01.png') }}" width="20"
                                    alt=""><span class="ms-2">English</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/02.png') }}" width="20"
                                    alt=""><span class="ms-2">Catalan</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/03.png') }}" width="20"
                                    alt=""><span class="ms-2">French</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/04.png') }}" width="20"
                                    alt=""><span class="ms-2">Belize</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/05.png') }}" width="20"
                                    alt=""><span class="ms-2">Colombia</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/06.png') }}" width="20"
                                    alt=""><span class="ms-2">Spanish</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/07.png') }}" width="20"
                                    alt=""><span class="ms-2">Georgian</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                    src="{{ asset('/../admin/assets/images/county/08.png') }}" width="20"
                                    alt=""><span class="ms-2">Hindi</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown position-static d-md-flex d-none">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
                        data-bs-toggle="dropdown" href="javascript:;"><i
                            class="material-icons-outlined">done_all</i></a>
                    <div class="dropdown-menu dropdown-menu-end mega-menu shadow-lg p-4 p-lg-5">
                        <div class="mega-menu-widgets">
                            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4 g-lg-5">
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="mega-menu-icon flex-shrink-0 bg-danger">
                                                    <i class="material-icons-outlined">question_answer</i>
                                                </div>
                                                <div class="mega-menu-content">
                                                    <h5>Marketing</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/02.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Website</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/03.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Subscribers</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/01.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Hubspot</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/11.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Templates</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/13.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Ebooks</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/12.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Sales</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/08.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Tools</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-4 shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ asset('/../admin/assets/images/megaIcons/09.png') }}"
                                                    width="40" alt="">
                                                <div class="mega-menu-content">
                                                    <h5>Academy</h5>
                                                    <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum
                                                        is a placeholder text commonly used to demonstrate
                                                        the visual form of a document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
                        data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">apps</i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-apps shadow-lg p-3">
                        <div class="border rounded-4 overflow-hidden">
                            <div class="row row-cols-3 g-0 border-bottom">
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/01.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Gmail</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/02.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Skype</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/03.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Slack</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->

                            <div class="row row-cols-3 g-0 border-bottom">
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/04.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">YouTube</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/05.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Google</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/06.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Instagram</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <div class="row row-cols-3 g-0 border-bottom">
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/07.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Spotify</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/08.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Yahoo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/09.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <div class="row row-cols-3 g-0">
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/10.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Figma</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/11.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Paypal</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-wrapper d-flex flex-column gap-2 text-center">
                                        <div class="app-icon">
                                            <img src="{{ asset('/../admin/assets/images/apps/12.png') }}"
                                                width="36" alt="">
                                        </div>
                                        <div class="app-name">
                                            <p class="mb-0">Photo</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                        data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:;"><i
                            class="material-icons-outlined">notifications</i>
                        <span class="badge-notify">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                        <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
                            <h5 class="notiy-title mb-0">Notifications</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-icons-outlined">
                                        more_vert
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">inventory_2</i>Archive All</a>
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">done_all</i>Mark all as read</a>
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">mic_off</i>Disable
                                            Notifications</a></div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="notify-list">
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="{{ asset('/../admin/assets/images/avatars/01.png') }}"
                                                class="rounded-circle" width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Congratulations Jhon</h5>
                                            <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                                            <p class="mb-0 notify-time">Today</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="user-wrapper bg-primary text-primary bg-opacity-10">
                                            <span>RS</span>
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Account Created</h5>
                                            <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                            <p class="mb-0 notify-time">Yesterday</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="{{ asset('/../admin/assets/images/apps/13.png') }}"
                                                class="rounded-circle" width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Payment Recived</h5>
                                            <p class="mb-0 notify-desc">New payment recived successfully</p>
                                            <p class="mb-0 notify-time">1d ago</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="{{ asset('/../admin/assets/images/apps/14.png') }}"
                                                class="rounded-circle" width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Order Recived</h5>
                                            <p class="mb-0 notify-desc">Recived new order from michle</p>
                                            <p class="mb-0 notify-time">2:15 AM</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="{{ asset('/../admin/assets/images/avatars/06.png') }}"
                                                class="rounded-circle" width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Congratulations Jhon</h5>
                                            <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                                            <p class="mb-0 notify-time">Today</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                                            <span>PK</span>
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Account Created</h5>
                                            <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                            <p class="mb-0 notify-time">Yesterday</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-md-flex d-none">
                    <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart"><i
                            class="material-icons-outlined">shopping_cart</i>
                        <span class="badge-notify">8</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                        <img src="{{ asset('/../admin/assets/images/avatars/01.png') }}"
                            class="rounded-circle p-1 border" width="45" height="45" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                        <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                            <div class="text-center">
                                <img src="{{ asset('/../admin/assets/images/avatars/01.png') }}"
                                    class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                                    alt="">
                                <h5 class="user-name mb-0 fw-bold">Admin</h5>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                            href="{{ url('user-profile') }}"><i
                                class="material-icons-outlined">person_outline</i>Profile</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">local_bar</i>Setting</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">dashboard</i>Dashboard</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">account_balance</i>Earning</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">cloud_download</i>Downloads</a>
                        <hr class="dropdown-divider">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="material-icons-outlined">power_settings_new</i>Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="{{ asset('/../admin/assets/images/logo-icon.png') }}" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">Maxton</h5>
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav">
            <!--navigation-->
            <ul class="metismenu" id="sidenav">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/index') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Analysis</a>
                        </li>
                        <li><a href="{{ url('/../company/index2') }}"><i
                                    class="material-icons-outlined">arrow_right</i>eCommerce</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                        </div>
                        <div class="menu-title">Widgets</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/widgets-data') }}')}}"><i
                                    class="material-icons-outlined">arrow_right</i>Data</a>
                        </li>
                        <li><a href="{{ url('/../company/widgets-static') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Static</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">apps</i>
                        </div>
                        <div class="menu-title">Apps</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/app-emailbox') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Email Box</a>
                        </li>
                        <li><a href="{{ url('/../company/app-emailread') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Email Read</a>
                        </li>
                        <li><a href="{{ url('/../company/app-chat-box') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Chat</a>
                        </li>
                        <li><a href="{{ url('/../company/app-fullcalender') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Calendar</a>
                        </li>
                        <li><a href="{{ url('/../company/app-to-do') }}"><i
                                    class="material-icons-outlined">arrow_right</i>To do</a>
                        </li>
                        <li><a href="{{ url('/../company/app-invoice') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                    <a href="{{ url('/../company/cards') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">Cards</div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                        </div>
                        <div class="menu-title">eCommerce</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/ecommerce-add-product') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Add Product</a>
                        </li>
                        <li><a href="{{ url('/../company/ecommerce-products') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Products</a>
                        </li>
                        <li><a href="{{ url('/../company/ecommerce-customers') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Customers</a>
                        </li>
                        <li><a href="{{ url('/../company/ecommerce-customer-details') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Customer Details</a>
                        </li>
                        <li><a href="{{ url('/../company/ecommerce-company-orders') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Orders</a>
                        </li>
                        <li><a href="{{ url('/../company/ecommerce-order-details') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Order Details</a>
                        </li>
                        <li><a href="{{ url('/../company/commissions') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Manage Commission</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
                        </div>
                        <div class="menu-title">Components</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/component-alerts') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Alerts</a>
                        </li>
                        <li><a href="{{ url('/../company/component-accordions') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Accordions</a>
                        </li>
                        <li><a href="{{ url('/../company/component-badges') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Badges</a>
                        </li>
                        <li><a href="{{ url('/../company/component-buttons') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Buttons</a>
                        </li>
                        <li><a href="{{ url('/../company/component-carousels') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Carousels</a>
                        </li>
                        <li><a href="{{ url('/../company/component-media-object') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Media
                                Objects</a>
                        </li>
                        <li><a href="{{ url('/../company/component-modals') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Modals</a>
                        </li>
                        <li><a href="{{ url('/../company/component-navs-tabs') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Navs & Tabs</a>
                        </li>
                        <li><a href="{{ url('/../company/component-navbar') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Navbar</a>
                        </li>
                        <li><a href="{{ url('/../company/component-paginations') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Pagination</a>
                        </li>
                        <li><a href="{{ url('/../company/component-popovers-tooltips') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Popovers
                                & Tooltips</a>
                        </li>
                        <li><a href="{{ url('/../company/component-progress-bars') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Progress</a>
                        </li>
                        <li><a href="{{ url('/../company/component-spinners') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Spinners</a>
                        </li>
                        <li><a href="{{ url('/../company/component-notifications') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Notifications</a>
                        </li>
                        <li><a href="{{ url('/../company/component-avtars-chips') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Avatrs &
                                Chips</a>
                        </li>
                        <li><a href="{{ url('/../company/component-typography') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Typography</a>
                        </li>
                        <li><a href="{{ url('/../company/component-text-utilities') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Utilities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                        </div>
                        <div class="menu-title">Icons</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/icons-line-icons') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Line Icons</a>
                        </li>
                        <li><a href="{{ url('/../company/icons-boxicons') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Boxicons</a>
                        </li>
                        <li><a href="{{ url('/../company/icons-feather-icons') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Feather
                                Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Forms & Tables</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">toc</i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/form-elements') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Form Elements</a>
                        </li>
                        <li><a href="{{ url('/../company/form-input-group') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Input Groups</a>
                        </li>
                        <li><a href="{{ url('/../company/form-radios-and-checkboxes') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Radios &
                                Checkboxes</a>
                        </li>
                        <li><a href="{{ url('/../company/form-layouts') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Forms Layouts</a>
                        </li>
                        <li><a href="{{ url('/../company/form-validations') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Form Validation</a>
                        </li>
                        <li><a href="{{ url('/../company/form-wizard') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Form Wizard</a>
                        </li>
                        <li><a href="{{ url('/../company/form-file-upload') }}"><i
                                    class="material-icons-outlined">arrow_right</i>File Upload</a>
                        </li>
                        <li><a href="{{ url('/../company/form-date-time-pickes') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Date
                                Pickers</a>
                        </li>
                        <li><a href="{{ url('/../company/form-select2') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Select2</a>
                        </li>
                        <li><a href="{{ url('/../company/form-repeater') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Form Repeater</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">api</i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/table-basic-table') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Basic Table</a>
                        </li>
                        <li><a href="{{ url('/../company/table-datatable') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">lock</i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Basic</a>
                            <ul>
                                <li><a href="{{ url('/../company/auth-basic-login') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="{{ url('/../company/auth-basic-register') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="{{ url('/../company/auth-basic-forgot-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="{{ url('/../company/auth-basic-reset-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Cover</a>
                            <ul>
                                <li><a href="{{ url('/../company/auth-cover-login') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="{{ url('/../company/auth-cover-register') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="{{ url('/../company/auth-cover-forgot-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="{{ url('/../company/auth-cover-reset-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Boxed</a>
                            <ul>
                                <li><a href="{{ url('/../company/auth-boxed-login') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="{{ url('/../company/auth-boxed-register') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="{{ url('/../company/auth-boxed-forgot-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="{{ url('/../company/auth-boxed-reset-password') }}" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/user-profile') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">person</i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/timeline') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">report_problem</i>
                        </div>
                        <div class="menu-title">Pages</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/pages-error-404') }}" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>404
                                Error</a>
                        </li>
                        <li><a href="{{ url('/../company/pages-error-505') }}" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>505
                                Error</a>
                        </li>
                        <li><a href="{{ url('/../company/pages-coming-soon') }}" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Coming Soon</a>
                        </li>
                        <li><a href="{{ url('/../company/pages-starter-page') }}" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Blank Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/../company/faq') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">help_outline</i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/../company/pricing-table') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Pricing</div>
                    </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">fitbit</i>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/charts-apex-chart') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Apex</a>
                        </li>
                        <li><a href="{{ url('/../company/charts-chartjs') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Chartjs</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Maps</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/../company/map-google-maps') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Google Maps</a>
                        </li>
                        <li><a href="{{ url('/../company/map-vector-maps') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">face_5</i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Level
                                One</a>
                            <ul>
                                <li><a class="has-arrow" href="javascript:;"><i
                                            class="material-icons-outlined">arrow_right</i>Level
                                        Two</a>
                                    <ul>
                                        <li><a href="javascript:;"><i
                                                    class="material-icons-outlined">arrow_right</i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">description</i>
                        </div>
                        <div class="menu-title">Documentation</div>
                    </a>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">support</i>
                        </div>
                        <div class="menu-title">Support</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
    </aside>
    <!--end sidebar-->


    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Components</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Comissions</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card mt-4">
                <div class="card-body">
                    <div class="customer-table">
                        <div class="table-responsive white-space-nowrap">
                            <!-- Table -->

                            <div class="container">
                                <h1 class="text-center fw-bolder">Commissions for {{ $company->name }}</h1>

                                @if ($commissions->isEmpty())
                                    <br>
                                    <p class="text-center">You have no commissions at this time.</p>
                                @else
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Software Product</th>
                                                <th>Commission Rate (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($commissions as $commission)
                                                <tr>
                                                    <td>{{ $commission->softwareProduct->name }}</td>
                                                    <td>{{ $commission->commission_rate }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
    </main>
    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--start footer-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2024. All right reserved.</p>
    </footer>
    <!--top footer-->

    <!--start cart-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header border-bottom h-70">
            <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body p-0">
            <div class="order-list">
                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/01.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">White Men Shoes</h5>
                        <p class="mb-0 order-price">$289</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/02.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Red Airpods</h5>
                        <p class="mb-0 order-price">$149</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/03.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                        <p class="mb-0 order-price">$139</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/04.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                        <p class="mb-0 order-price">$485</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/05.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Fancy Shirts</h5>
                        <p class="mb-0 order-price">$758</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/06.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Home Sofa Set </h5>
                        <p class="mb-0 order-price">$546</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/07.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Black iPhone</h5>
                        <p class="mb-0 order-price">$1049</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ url('/../admin/assets/images/orders/08.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Goldan Watch</h5>
                        <p class="mb-0 order-price">$689</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer h-70 p-3 border-top">
            <div class="d-grid">
                <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View
                    Products</button>
            </div>
        </div>
    </div>
    <!--end cart-->



    <!--start switcher-->
    <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BlueTheme">
                            <span class="material-icons-outlined">contactless</span>
                            <span>Blue</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BoderedTheme">
                            <span class="material-icons-outlined">border_style</span>
                            <span>Bordered</span>
                        </label>
                    </div>
                </div><!--end row-->

            </div>
        </div>
    </div>
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="{{ url('/../admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ url('/../admin/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ url('/../admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/../admin/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('/../admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ url('/../admin/assets/js/main.js') }}"></script>
    <script>
        // Data Model (MVC Model)
        //  const transactions = [
        //    {
        //      orderId: "#SLR132131-9N",
        //      productName: "Apple iPad (Gen 10)",
        //      productImg: "https://storage.googleapis.com/a1aa/image/00a64e74-abdd-4ef2-aae9-732aa363211e.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Anika Dokidis",
        //      payment: "COD",
        //      paymentStatus: "Un Paid",
        //      totalPrice: 449,
        //      quantity: "1 Pcs",
        //      orderStatus: "Processing"
        //    },
        //    {
        //      orderId: "#SLR132130-8N",
        //      productName: "Apple iPhone 13",
        //      productImg: "https://storage.googleapis.com/a1aa/image/fe650e20-711b-4b60-4fd7-e64fa8694d83.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Randy Ekstrom",
        //      payment: "Bank Transfer",
        //      paymentStatus: "Pending",
        //      totalPrice: 1198,
        //      quantity: "2 Pcs",
        //      orderStatus: "Shipped"
        //    },
        //    {
        //      orderId: "#SLR913229-7N",
        //      productName: "Apple MacBook Air M2",
        //      productImg: "https://storage.googleapis.com/a1aa/image/65c56fbb-21f4-49e7-d28a-0c6514f136c0.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Mira Curtis",
        //      payment: "Credit Card",
        //      paymentStatus: "Paid",
        //      totalPrice: 999,
        //      quantity: "1 Pcs",
        //      orderStatus: "Shipped"
        //    },
        //    {
        //      orderId: "#SLR132128-6N",
        //      productName: "Apple iMac 2023",
        //      productImg: "https://storage.googleapis.com/a1aa/image/23e10f77-2e62-46f9-8b2c-fe3ef76b5e65.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Hanna Baptista",
        //      payment: "Credit Card",
        //      paymentStatus: "Pending",
        //      totalPrice: 5196,
        //      quantity: "4 Pcs",
        //      orderStatus: "Processing"
        //    },
        //    {
        //      orderId: "#SLR132127-5N",
        //      productName: "Apple Airpods 4",
        //      productImg: "https://storage.googleapis.com/a1aa/image/d204feb9-815e-41e8-93f0-a1c9c8a72f17.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Alfonso Botosh",
        //      payment: "Bank Transfer",
        //      paymentStatus: "Paid",
        //      totalPrice: 249,
        //      quantity: "1 Pcs",
        //      orderStatus: "Delivered"
        //    },
        //    {
        //      orderId: "#SLR132126-4N",
        //      productName: "Apple iPhone 15",
        //      productImg: "https://storage.googleapis.com/a1aa/image/d042285a-780b-4be1-48ea-96008c7945e3.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Marilyn Rosser",
        //      payment: "Credit Card",
        //      paymentStatus: "Pending",
        //      totalPrice: 799,
        //      quantity: "1 Pcs",
        //      orderStatus: "Delivered"
        //    },
        //    {
        //      orderId: "#SLR132125-3N",
        //      productName: "Dell XPS 15",
        //      productImg: "https://storage.googleapis.com/a1aa/image/edffe297-2678-4ba2-689d-6de51c71b050.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Kadin Herwitz",
        //      payment: "COD",
        //      paymentStatus: "Un Paid",
        //      totalPrice: 1799,
        //      quantity: "1 Pcs",
        //      orderStatus: "Processing"
        //    },
        //    {
        //      orderId: "#SLR132124-2N",
        //      productName: "Razer Kraken Headset",
        //      productImg: "https://storage.googleapis.com/a1aa/image/f73f1fe2-c320-4c48-fc6c-86e2b94540be.jpg",
        //      orderDate: "2025-02-13",
        //      customerName: "Zaire Wester",
        //      payment: "Bank Transfer",
        //      paymentStatus: "Paid",
        //      totalPrice: 297,
        //      quantity: "3 Pcs",
        //      orderStatus: "Shipped"
        //    }
        //  ];

        // View: Render table rows
        function renderTable(data) {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';
            if (data.length === 0) {
                const tr = document.createElement('tr');
                tr.className = 'bg-[#f9f9f9] rounded-xl';
                tr.innerHTML = `<td colspan="11" class="text-center py-6 text-[#7a7a7a]">No matching records found.</td>`;
                tbody.appendChild(tr);
                return;
            }
            data.forEach(item => {
                const tr = document.createElement('tr');
                tr.className = 'bg-[#f9f9f9] rounded-xl';
                tr.innerHTML = `
           <td class="pl-6 pr-3 py-3 align-middle">
             <input type="checkbox" aria-label="Select order ${item.orderId}" class="cursor-pointer" />
           </td>
           <td class="pr-3 py-3 align-middle font-semibold text-[#1e1e1e]">${item.orderId}</td>
           <td class="pr-3 py-3 align-middle flex items-center space-x-2">
             <img src="${item.productImg}" alt="${item.productName} product thumbnail" class="flex-shrink-0" width="16" height="16" loading="lazy" decoding="async" />
             <span>${item.productName}</span>
           </td>
           <td class="pr-3 py-3 align-middle">${new Date(item.orderDate).toLocaleDateString('en-GB', {day:'2-digit', month:'long', year:'numeric'})}</td>
           <td class="pr-3 py-3 align-middle">${item.customerName}</td>
           <td class="pr-3 py-3 align-middle">${item.payment}</td>
           <td class="pr-3 py-3 align-middle">
             <span class="inline-block text-[10px] font-semibold rounded-full px-2 py-[2px] ${
               item.paymentStatus === 'Un Paid' ? 'bg-[#f9d9d9] text-[#b93a3a]' :
               item.paymentStatus === 'Pending' ? 'bg-[#fef5d1] text-[#b38f3a]' :
               item.paymentStatus === 'Paid' ? 'bg-[#d9f0d9] text-[#3a9a3a]' : ''
             }">${item.paymentStatus}</span>
           </td>
           <td class="pr-3 py-3 align-middle font-semibold text-[#1e1e1e]">$${item.totalPrice.toLocaleString()}</td>
           <td class="pr-3 py-3 align-middle">${item.quantity}</td>
           <td class="pr-3 py-3 align-middle">
             <span class="inline-block text-[10px] font-semibold rounded-full px-3 py-[2px] ${
               item.orderStatus === 'Processing' ? 'bg-[#3ab0f9] text-white' :
               item.orderStatus === 'Shipped' ? 'bg-[#a07ff9] text-white' :
               item.orderStatus === 'Delivered' ? 'bg-[#1a2fc9] text-white' : ''
             }">${item.orderStatus}</span>
           </td>
           <td class="pr-6 py-3 align-middle text-center text-[#7a7a7a] cursor-pointer">
             <i class="fas fa-map-marker-alt"></i>
             <i class="fas fa-ellipsis-h ml-3"></i>
           </td>
         `;
                tbody.appendChild(tr);
            });
        }

        // Controller: Filter logic
        function filterData(filters) {
            return transactions.filter(item => {
                // Order Date filter (exact match)
                if (filters.orderDate && item.orderDate !== filters.orderDate) return false;
                // Order ID filter (case insensitive substring)
                if (filters.orderId && !item.orderId.toLowerCase().includes(filters.orderId.toLowerCase()))
                    return false;
                // Product Name filter (case insensitive substring)
                if (filters.productName && !item.productName.toLowerCase().includes(filters.productName
                        .toLowerCase())) return false;
                // Customer Name filter (case insensitive substring)
                if (filters.customerName && !item.customerName.toLowerCase().includes(filters.customerName
                        .toLowerCase())) return false;
                // Payment filter (exact match)
                if (filters.payment && item.payment !== filters.payment) return false;
                // Payment Status filter (exact match)
                if (filters.paymentStatus && item.paymentStatus !== filters.paymentStatus) return false;
                // Price range filter
                if (filters.minPrice && item.totalPrice < filters.minPrice) return false;
                if (filters.maxPrice && item.totalPrice > filters.maxPrice) return false;
                // Order Status filter (exact match)
                if (filters.orderStatus && item.orderStatus !== filters.orderStatus) return false;
                return true;
            });
        }

        // On DOM ready
        document.addEventListener('DOMContentLoaded', () => {
            renderTable(transactions);

            const filterForm = document.getElementById('filterForm');
            filterForm.addEventListener('submit', e => {
                e.preventDefault();
                const formData = new FormData(filterForm);
                const filters = {
                    orderDate: formData.get('orderDate'),
                    orderId: formData.get('orderId').trim(),
                    productName: formData.get('productName').trim(),
                    customerName: formData.get('customerName').trim(),
                    payment: formData.get('payment'),
                    paymentStatus: formData.get('paymentStatus'),
                    minPrice: formData.get('minPrice') ? Number(formData.get('minPrice')) : null,
                    maxPrice: formData.get('maxPrice') ? Number(formData.get('maxPrice')) : null,
                    orderStatus: formData.get('orderStatus')
                };
                const filtered = filterData(filters);
                renderTable(filtered);
            });
        });
    </script>


</body>


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:22:37 GMT -->

</html>
