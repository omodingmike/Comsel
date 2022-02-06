@extends('layouts.app')

@section('content')

    <div id="page-container"
         class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <!-- Sidebar -->
        <!--
            Sidebar Mini Mode - Display Helper classes

            Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
            Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

            Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
            Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
            Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
        -->
        <nav id="sidebar" aria-label="Main Navigation" class="">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="/">
                        <span class="smini-visible">
                            <i class="fa fa-circle-notch text-primary"></i>
                        </span>
                    <span class="smini-hide font-size-h5 tracking-wider">
                            <span class="font-w400">COMSEL</span>
                        </span>
                </a>
                <!-- END Logo -->

                <!-- Extra -->
                <div>
                    <!-- Options -->
                    <div class="dropdown d-inline-block ml-2">

                        <a class="btn btn-sm btn-dual" id="darkmode-switch" data-toggle=""
                           aria-haspopup="true" aria-expanded="false" href="">
                            <i class="fas fa-moon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0"
                             aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="{{ asset('assets/css/themes/city.min.css') }}" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                                {{--                                <script src="{{ asset('assets/css/themes/city.min.css') }}"></script>--}}
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between font-w500"
                               data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light"
                               href="#">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark"
                               href="#">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light"
                               href="#">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark"
                               href="#">
                                <span>Header Dark</span>
                            </a>
                            <!-- Header Styles -->
                        </div>
                    </div>
                    <!-- END Options -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close"
                       href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-heading">Services</li>
                        <li class="nav-main-item">
                            <a class="menu-links combination nav-main-link nav-main-link-submenu" data-toggle="layout"
                               aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">A level Combination</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="menu-links weight nav-main-link nav-main-link-submenu"
                               data-toggle="layout"
                               aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-user-plus"></i>
                                <span class="nav-main-link-name">Result Weight</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout"
                            data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout"
                            data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->
                </div>
                <p class="mt-4 title">COMSEL</p>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual d-flex align-items-center"
                                id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                 style="width: 21px;">
                            @php($user = Illuminate\Support\Facades\Auth::user())
                            <span class="d-none d-sm-inline-block ml-2">{{ucwords($user->name)}}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0"
                             aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary-dark rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                     src="assets/media/avatars/avatar10.jpg" alt="">
                                <p class="mt-2 mb-0 text-white font-w500">{{ucwords($user->name)}}</p>
                                <p class="mb-0 text-white-50 font-size-sm">{{$user->email}}</p>
                            </div>
                            <div class="p-2">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-alt-primary">
                                        <i class="fa fa-fw fa-sign-out-alt mr-1"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->


                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->


        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">

                <?php
                //                Initialise database withe default data
                App\Helpers\Init::uceResults();
                App\Helpers\Init::pleResults();
                App\Helpers\Init::uaceResults();
                App\Helpers\Init::uaceSubjects();
                App\Helpers\Init::subjects();

                ?>

                {{--                Add view layouts--}}
                @include('layouts.form')
                @include('layouts.weight')
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">

                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">Comsel</a> &copy;
                        <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>


@endsection
