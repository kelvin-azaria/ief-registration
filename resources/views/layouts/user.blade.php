<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#topic">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#termsAndCondition">Syarat & Ketentuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      <main class="p-0">@yield('content')</main>
    </div>
    <footer>
      <div class="container-fluid text-white bg-dark py-3">
        <div class="row">
          <div class="col">
            <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> IEF Youth Camp</small>
          </div>
          <div class="col">
            
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="https://storyset.com">illustrations by Storyset</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
