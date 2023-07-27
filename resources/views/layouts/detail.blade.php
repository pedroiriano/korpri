<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
    @include('includes.page-meta')
    @stack('css')
</head>
<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    @include('includes.detail-navbar')
    @yield('content')
    @include('includes.page-footer')
    @include('includes.page-top')
    {{-- @include('includes.page-switcher') --}}
    @include('includes.page-js')
    @stack('js')
</body>
</html>
