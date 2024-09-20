<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('assets/images/logo_a.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hdj">
        <meta name="keywords" content="hdj">
        <meta name="author" content="Hamad Fauzi Jessar">
        <title>@yield('title', 'HFJ')</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <style>
        body { 
            background-color: #E9EEF4;
            font-family: aptly, sans-serif;
        }
    </style>
<body class="flex flex-col gap-4 mx-48 min-w-[100vh] mb-4">
 
    @include('user.layouts.partials.header')

    @yield('content')

    @include('user.layouts.partials.footer')

  @yield('script')

  <script>
  </script>
</body>

</html>
