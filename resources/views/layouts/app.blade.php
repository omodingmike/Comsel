<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/oneui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('css/responsive.bootstrap.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themes/flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main-page-dark-css.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')

<script src="{{ asset('js/oneui.core.min.js') }}"></script>
<script src="{{ asset('js/oneui.app.min.js') }}"></script>
<script src="{{ asset('js/be_pages_dashboard.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('css/bootstrap-table.min.css') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/additional-methods.js') }}"></script>

{{--<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>--}}

{{--<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>--}}

{{--<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>--}}

<script src="{{ asset('js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/op_auth_signin.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/pages/be_forms_wizard.min.js') }}"></script>--}}
<script src="{{ asset('js/be_forms_wizard.js') }}"></script>
<script src="{{ asset('js/bootstrap-table.min.js') }}"></script>


{{--<script src="{{ asset('js/forms_wizard.js') }}"></script>--}}
{{--<script>jQuery(function () {--}}
{{--        One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);--}}
{{--    });</script>--}}
<script>jQuery(function () {
        One.helpers(['flatpickr', 'datepicker', 'maxlength', 'select2']);
    });</script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
