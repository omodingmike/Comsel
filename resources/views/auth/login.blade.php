@extends('layouts.app')

@section('content')
    {{--    <div class="container center-vertically">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        <form method="POST" action="{{ route('login') }}">--}}
    {{--                            @csrf--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}
    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                    @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
    {{--                                           name="password" required autocomplete="current-password">--}}

    {{--                                    @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <div class="col-md-6 offset-md-4">--}}
    {{--                                    <div class="form-check">--}}
    {{--                                        <input class="form-check-input" type="checkbox" name="remember"--}}
    {{--                                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                        <label class="form-check-label" for="remember">--}}
    {{--                                            {{ __('Remember Me') }}--}}
    {{--                                        </label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-0">--}}
    {{--                                <div class="col-md-8 offset-md-4">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Login') }}--}}
    {{--                                    </button>--}}

    {{--                                    @if (Route::has('password.request'))--}}
    {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                            {{ __('Forgot Your Password?') }}--}}
    {{--                                        </a>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    custom login--}}
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-rounded block-themed mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Sign In</h3>
                                    <div class="block-options">
                                        {{--                                        @if (Route::has('password.request'))--}}
                                        {{--                                            <a class="btn-block-option font-size-sm" href="{{ route('password.request') }}">--}}
                                        {{--                                                {{ __('Forgot Your Password?') }}--}}
                                        {{--                                            </a>--}}
                                        {{--                                        @endif--}}
                                        {{-- <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">Forgot Password?</a>--}}
                                        <a class="btn-block-option" href="{{route('register')}}" data-toggle="tooltip" data-placement="left"
                                           title="New Account">
                                            Register
                                            <i class="fa fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 py-lg-5">
                                        <h1 class="h2 mb-1">COMSEL</h1>
                                        <p class="text-muted">
                                            Welcome, please login.
                                        </p>

                                        <!-- Sign In Form -->
                                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <input type="email"
                                                           class="form-control form-control-alt form-control-lg  @error('email') is-invalid @enderror"
                                                           id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                                                           autocomplete="email" autofocus>
                                                    {{--                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"--}}
                                                    {{--                                                           name="email"--}}
                                                    {{--                                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password"
                                                           class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror"
                                                           id="password" name="password" placeholder="Password" required
                                                           autocomplete="current-password">
                                                    {{--                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
                                                    {{--                                                           name="password" required autocomplete="current-password">--}}

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="remember"
                                                               name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label font-w400" for="remember">Remember
                                                            Me</label>

                                                        {{--                                                        <input class="form-check-input" type="checkbox" name="remember"--}}
                                                        {{--                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                                        {{--                                                        <label class="form-check-label" for="remember">--}}
                                                        {{--                                                            {{ __('Remember Me') }}--}}
                                                        {{--                                                        </label>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-xl-5">
                                                    <button type="submit" class="btn btn-block btn-alt-primary">
                                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                    </button>
                                                </div>
                                                <div class="col-md-6 col-xl-5">
                                                    <a class="btn btn-block btn-alt-primary" href="{{route('register')}}"
                                                       data-toggle="tooltip"
                                                       data-placement="left"
                                                       title="New Account">
                                                        <i class="fa fa-user-plus  mr-1"></i>
                                                        Register

                                                    </a>

                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Sign In Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
@endsection
