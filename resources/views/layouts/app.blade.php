<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    {{-- <title>Laravel Migration Seeder</title> --}}
    <title>{{ env('APP_NAME', 'Laravel project') }} - @yield('title', 'My page')</title>

    @vite('resources/js/app.js')
    @yield('css')
  </head>

  <body>
    @include('partials.header')

    @yield('main-content')

    @yield('partials.footer')
    
    @yield('js')
  </body>

</html>
