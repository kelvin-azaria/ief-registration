<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light top-navbar sticky-top">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/site-logo.png') }}" width="224"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}#contest">Lomba Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}#siteVisits">Site Visit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}#onlineClass">Online Class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}#terms">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary font-weight-bold" href="{{ route('contestant.create') }}" role="button">Registrasi</a>
            </li>
          </ul>
        </div>
      </nav>
      <main>@yield('content')</main>
    </div>
    <footer>
      <div class="container-fluid text-white bg-dark py-3">
        <div class="row">
          <div class="col">
            <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> IEF Youth Camp</small>
          </div>
        </div>
      </div>
    </footer>

    {{-- <script 
      src="https://code.jquery.com/jquery-3.6.0.min.js" 
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
      crossorigin="anonymous"></script> --}}
    @yield('script')
  </body>
</html>
