<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
    @include('includes.landing-meta')
    @stack('css')
</head>
<body onload="startTime()" class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    @include('includes.landing-navbar')
    @yield('content')
    @include('includes.landing-footer')
    @include('includes.landing-top')
    @include('includes.landing-switcher')
    @include('includes.landing-js')
    @stack('js')
</body>
</html>
