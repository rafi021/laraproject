<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('admin_style')

    <title>@yield('title')</title>
  </head>
  <body>

    @include('include.navbar')

    <div class="container">
        @if (session('status'))
            <div class="bg-success text-white">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @stack('admin_script')
  </body>
</html>
