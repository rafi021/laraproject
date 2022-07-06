<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

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
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>
    @stack('admin_script')
  </body>
</html>
