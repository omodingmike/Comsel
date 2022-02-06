@extends('layouts.app')

@section('content')
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign Up Block -->
                            <div class="block block-rounded block-themed mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Create Account</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option font-size-sm" href="javascript:void(0)" data-toggle="modal"
                                           data-target="#one-signup-terms">View Terms</a>
                                        <a class="btn-block-option" href="{{route('home')}}" data-toggle="tooltip" data-placement="left"
                                           title="Sign In">
                                            <i class="fa fa-sign-in-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-2 px-lg-3 py-lg-4">
                                        {{--                                        <form class="js-validation-signup" method="POST" action="{{ route('register') }}">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            <div class="py-3">--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <input type="text"--}}
                                        {{--                                                           class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror"--}}
                                        {{--                                                           id="name" name="name" placeholder="Username" value="{{ old('name') }}" required--}}
                                        {{--                                                           autocomplete="name" autofocus>--}}

                                        {{--                                                    @error('name')--}}
                                        {{--                                                    <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                        <strong>{{ $message }}</strong>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                                    @enderror--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <input type="email"--}}
                                        {{--                                                           class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"--}}
                                        {{--                                                           id="email" name="email" placeholder="Email" value="{{ old('email') }}"--}}
                                        {{--                                                           required autocomplete="email">--}}


                                        {{--                                                    @error('email')--}}
                                        {{--                                                    <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                         <strong>{{ $message }}</strong>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                                    @enderror--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <input type="password"--}}
                                        {{--                                                           class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"--}}
                                        {{--                                                           id="password" name="password" placeholder="Password" required--}}
                                        {{--                                                           autocomplete="new-password">--}}


                                        {{--                                                    @error('password')--}}
                                        {{--                                                    <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                    <strong>{{ $message }}</strong>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                    @enderror--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <input type="password" class="form-control form-control-lg form-control-alt"--}}
                                        {{--                                                           id="password-confirm" name="password_confirmation"--}}
                                        {{--                                                           placeholder="Confirm Password" required--}}
                                        {{--                                                           autocomplete="new-password">--}}

                                        {{--                                                </div>--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <div class="custom-control custom-checkbox">--}}
                                        {{--                                                        <input type="checkbox" class="custom-control-input" id="signup-terms"--}}
                                        {{--                                                               name="signup-terms">--}}
                                        {{--                                                        <label class="custom-control-label font-w400" for="signup-terms">I agree to Terms--}}
                                        {{--                                                            &amp; Conditions</label>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="form-group row">--}}
                                        {{--                                                <div class="col-md-6 col-xl-5">--}}
                                        {{--                                                    <button type="submit" class="btn btn-block btn-alt-success">--}}
                                        {{--                                                        <i class="fa fa-fw fa-plus mr-1"></i> Sign Up--}}
                                        {{--                                                    </button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </form>--}}

                                        <div class="js-wizard-validation block block">
                                            <!-- Wizard Progress Bar -->
                                            <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                                     style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!-- END Wizard Progress Bar -->

                                            <!-- Step Tabs -->
                                            <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">1.
                                                        Biodata</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">2. Account</a>
                                                </li>
                                            </ul>
                                            <!-- END Step Tabs -->

                                            <!-- Form -->
                                            <form action="{{ route('register') }}" method="POST" class="js-wizard-validation-form">
                                            @csrf
                                            <!-- Steps Content -->
                                                <div class="block-content block-content-full tab-content px-md-5"
                                                     style="min-height: 314px;">
                                                    <!-- Step 1 -->
                                                    <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control form-control-alt"
                                                                   id="fname"
                                                                   name="biodata[fname]"
                                                                   placeholder="First name">
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="text"
                                                                   class="form-control form-control-alt"
                                                                   id="mname"
                                                                   name="biodata[mname]"
                                                                   placeholder="Middle name">
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="text"
                                                                   class="form-control form-control-alt"
                                                                   id="lname"
                                                                   name="biodata[lname]" placeholder="Last name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="d-block">Gender</label>
                                                            <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                                                                <input type="radio" class="custom-control-input"
                                                                       id="gender-male" checked
                                                                       name="biodata[gender]" value="Male">
                                                                <label class="custom-control-label"
                                                                       for="gender-male">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                                                                <input type="radio" class="custom-control-input"
                                                                       id="gender-female"
                                                                       name="biodata[gender]" value="Female">
                                                                <label class="custom-control-label"
                                                                       for="gender-female">Female</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="text" class="js-datepicker form-control form-control-alt"
                                                                   id="dob" readonly
                                                                   name="biodata[dob]" data-week-start="1" data-autoclose="true"
                                                                   data-today-highlight="true" data-date-format="dd/mm/yyyy"
                                                                   placeholder="Date of birth">
                                                        </div>
                                                    </div>
                                                    <!-- END Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="tab-pane" id="wizard-progress2-step2" role="tabpanel">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror"
                                                                   id="name" name="name" placeholder="Username" value="{{ old('name') }}"
                                                                   required
                                                                   autocomplete="name" autofocus>

                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email"
                                                                   class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                                                   id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                                                   required autocomplete="email">


                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password"
                                                                   class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                                                   id="password" name="password" placeholder="Password" required
                                                                   autocomplete="new-password">


                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                                   id="password-confirm" name="password_confirmation"
                                                                   placeholder="Confirm Password" required
                                                                   autocomplete="new-password">

                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="signup-terms"
                                                                       name="signup-terms">
                                                                <label class="custom-control-label font-w400" for="signup-terms">I agree to
                                                                    Terms
                                                                    &amp; Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END Step 2 -->

                                                </div>
                                                <!-- END Steps Content -->

                                                <!-- Steps Navigation -->
                                                <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-alt-primary" data-wizard="prev">
                                                                <i class="fa fa-angle-left mr-1"></i> Previous
                                                            </button>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <button type="button" class="btn btn-alt-primary" data-wizard="next">
                                                                Next <i class="fa fa-angle-right ml-1"></i>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                                            </button>
                                                            {{--                                                            <button type="submit" class="btn btn-block btn-alt-success">--}}
                                                            {{--                                                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up--}}
                                                            {{--                                                            </button>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Steps Navigation -->
                                            </form>
                                            <!-- END Form -->
                                        </div>
                                        <!-- END Progress Wizard 2 -->


                                        <!-- END Sign Up Form -->
                                    </div>
                                </div>
                            </div>

                            <!-- END Sign Up Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Terms and conditions go here</p>

                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->

@endsection
