<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('icon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
    <link href="{{asset('css/plugins/fonts-nunito-1.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/fonts-nunito.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap-min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/dataTable-min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/dataTable-rowReorder-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/jConfirm-min.css')}}">
    <link href="{{ asset('css/plugins/select2-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTable-fixedHeader-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/qazd.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dateTimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link herf="{{ asset('css/layoutAdmin.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script src="{{asset('js/plugins/jQuery-min.js')}}"></script>
    <script src="{{asset('js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('js/plugins/jQuery-UI.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTable-min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTable-rowReorder-min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTable-colReorder-min.js')}}"></script>
    <script src="{{asset('js/plugins/jConfirm-min.js')}}"></script>
    <script src="{{asset('js/plugins/select2-min.js')}}"></script>
    <script src="{{asset('js/plugins/select2-sortable.js')}}"></script>
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}" defer></script>
    <script src="{{ asset('js/plugins/dataTable-responsive-min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/fixedHeader-min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/fixedColumns-min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/pluralize.js') }}" defer></script>
    <script src="{{ asset('js/plugins/alertPrompt.js') }}" defer></script>
    <script src="{{ asset('js/plugins/dataTables.rowGroup.js') }}" defer></script>
    <script src="{{ asset('js/plugins/dateTimepicker.js') }}" defer></script>
    <script src="{{ asset('js/plugins/printThis.js') }}" defer></script>


   
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    
</body>    
</html>
