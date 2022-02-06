@extends('layouts.app')

@section('content')

    <div id="page-container"
         class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <nav id="sidebar" aria-label="Main Navigation">
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
                        <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="si si-drop"></i>
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
                               data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
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
                        {{--                        <li class="nav-main-item">--}}
                        {{--                            <a class="nav-main-link active" href="/">--}}
                        {{--                                <i class="nav-main-link-icon si si-speedometer"></i>--}}
                        {{--                                <span class="nav-main-link-name">Dashboard</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}

                        <li class="nav-main-heading">Services</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                               aria-expanded="false" href="{{route('home')}}">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">Back home</span>
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
                <!-- END Left Section -->
                <p class="mt-4 title">COMSEL</p>

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual d-flex align-items-center"
                                id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                 style="width: 21px;">
                            <?php use Illuminate\Support\Facades\Auth;
                            $user = Auth::user() ?>
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
                                {{--                                <a class="dropdown-item d-flex align-items-center justify-content-between"--}}
                                {{--                                   href="{{url('/logout')}}">--}}
                                {{--                                    <span class="font-size-sm font-w500">Log Out</span>--}}
                                {{--                                </a>--}}
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

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-white">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                        data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                   id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

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
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            SUBJECT COMBINATIONS
                        </h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="link-fx" href="/">BACK HOME</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="content">
                <!-- User Profile -->
                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title">APPLICANT BIO DATA</h3>
                    </div>

                    <?php

                    //                    print_r($data['post']);

                    //                                        foreach ($data['post'] as $k => $v) {
                    //                                            print_r($k);
                    //                                            echo '<br>';
                    //                                        }
                    ?>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="fname">First name</label>
                                    <input type="text" class="form-control form-control-alt" id="fname"
                                           name="fname" value="{{$data['biodata']['fname']}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="mname">Middle name</label>
                                    <input type="text" class="form-control form-control-alt" id="mname"
                                           name="mname" value="{{$data['biodata']['mname']}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="lname">Last name</label>
                                    <input type="text" class="form-control form-control-alt" id="lname"
                                           name="lname" value="{{$data['biodata']['lname']}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control form-control-alt" id="gender"
                                           name="gender" value="{{$data['biodata']['gender']}}" readonly>

                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="text" class="form-control form-control-alt" id="dob"
                                           name="dob" value="{{$data['biodata']['dob'] }}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END User Profile -->


                <!-- User Profile -->
                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title">APPLICANT UNEB EXPERIENCE</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="fname">PLE Agregates</label>
                                    <input type="text" class="form-control form-control-alt" id="fname"
                                           name="fname" value="{{$data['ple_aggregates']}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="dob">UCE Aggregates in best 8</label>
                                    <input type="text" class="form-control form-control-alt" id="dob"
                                           name="dob" placeholder="Text Input" readonly value="{{$data['uce_aggregates']}}">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title">SCIENCE SUBJECT COMBINATIONS</h3>
                    </div>

                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Combination</th>
                                    <th scope="col" class="text-center">Projected points</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Helpers\Utilities::combinationsToJson(\App\Helpers\Combination::sciences($data['sciences'])) as
                                $combination)
                                    <tr>
                                        <td>{{$combination['id']}}</td>
                                        <td class="code">{{$combination['code']}}</td>
                                        <td>{{$combination['combination']}}</td>
                                        <td class="text-center projection">{{$combination['projection']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title">ARTS SUBJECT COMBINATIONS</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Combination</th>
                                    <th scope="col" class="text-center">Projected points</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Helpers\Utilities::combinationsToJson(\App\Helpers\Combination::arts($data['arts'])) as
                                $combination)
                                    <tr>
                                        <td>{{$combination['id']}}</td>
                                        <td class="code">{{$combination['code']}}</td>
                                        <td>{{$combination['combination']}}</td>
                                        <td class="text-center projection">{{$combination['projection']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- END Dynamic Table Full -->

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

        <!-- Opens from the modal toggle button in the header -->
        <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps"
             aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apps</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <!-- CRM -->
                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-speedometer fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                CRM
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END CRM -->
                                </div>
                                <div class="col-6">
                                    <!-- Products -->
                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-rocket fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Products
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Products -->
                                </div>
                                <div class="col-6">
                                    <!-- Sales -->
                                    <a class="block block-rounded block-link-shadow bg-body mb-0"
                                       href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-plane fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Sales
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Sales -->
                                </div>
                                <div class="col-6">
                                    <!-- Payments -->
                                    <a class="block block-rounded block-link-shadow bg-body mb-0"
                                       href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-wallet fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Payments
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Payments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->
    </div>


@endsection
