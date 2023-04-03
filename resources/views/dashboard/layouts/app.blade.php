<!DOCTYPE html>
{{-- <html lang="{{ LaravelLocalization::getCurrentLocaleDirection() }}"> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css") }}>
  @if (app()->getLocale() == 'ar')
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">

  <style>
      body, h1, h2, h3, h4, h5, h6 {
          font-family: 'Cairo', sans-serif !important;
      }
  </style>
@else
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE.min.css') }}">
@endif
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('dashboard.layouts.header')
        @include('dashboard.layouts.sidebar')
        @yield('content')
        @include('dashboard.layouts.footer')
        </div>

</body>
</html>
