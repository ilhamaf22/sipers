<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>@yield('page_title')</h1>
                @yield('breadcrumbs')
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('layouts.admin.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>