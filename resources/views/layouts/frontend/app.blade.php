<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="@yield('meta_description')">
  <meta name="author" content="@yield('meta_author')">
  <meta name="keywords" content="@yield('meta_keywords')">
  <meta name="url" content="{{ config('app.url') }}">
  @yield('meta_tags')
  <title>@yield('title', config('app.name'))</title>
  <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
  @stack('before-styles')
  <link rel="stylesheet" href="{{ mix('assets/css/frontend/app.css') }}">
  @stack('after-styles')
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="app">
    <x-frontend.header />
    <main id="site-main">
      @yield('content')
    </main>
    <x-frontend.footer />
  </div>
  
  @stack('before-scripts')
  <script src="{{ mix('assets/js/frontend/app.js') }}" defer></script>
  @stack('after-scripts')
</body>
</html>