@if (!empty($generalInformations))
    @foreach ($generalInformations as $generalInformation)
        @php
            $domain = $generalInformation['Domain'];
            preg_match('/([a-zA-Z0-9-]+)-dev/', $domain, $matches);
            $result = $matches[1];
        @endphp
        {{-- BEGIN::Google Search Meta --}}
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="{{ $generalInformation['Name'] }}" name="description" />
        <meta name="keywords" content="website, {{ $generalInformation['Name'] }}, {{ $result }}, website {{ $generalInformation['Name'] }}, website {{ $result }}, depok, kota depok, pemerintah kota depok">
        <meta name="author" content="PI" />
        <meta name="website" content="https://pepeve.id" />
        <meta name="email" content="pdzeus83aw@gmail.com" />
        <meta name="version" content="1.0.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Security-Policy" content="style-src 'self' 'unsafe-inline' https://fonts.googleapis.com/; font-src 'self' 'unsafe-inline' https://fonts.gstatic.com/ https://fonts.googleapis.com/">
        {{-- END::Google Search Meta --}}

        {{-- BEGIN::CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- END::CSRF Token --}}

        {{-- BEGIN::Title --}}
        <title>{{ empty($result) ? config('app.name', 'Portal Perangkat Daerah') : $result }}</title>
        {{-- END::Title --}}

        {{-- BEGIN::Main CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
        {{-- END::Main CSS --}}

        {{-- BEGIN::Plugins CSS --}}
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/swiper/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
        {{-- END::Plugins CSS --}}

        {{-- BEGIN::Data Tables CSS --}}
        <link href="{{ asset('assets/datatables/datatables.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/datatables/jqueryui/themes/base/jquery-ui.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/datatables/datatables/css/dataTables.jqueryui.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/datatables/responsive/css/responsive.jqueryui.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/datatables/buttons/css/buttons.jqueryui.min.css') }}" rel="stylesheet" />
        {{-- END::Data Tables CSS --}}

        {{-- BEGIN::Canonical --}}
        <link rel="canonical" href="{{ $generalInformation['Domain'] }}" />
        {{-- END::Canonical --}}

        {{-- BEGIN::Facebook Meta --}}
        <meta property="og:title" content="{{ $result }} | Website {{ $result }} - Kota Depok">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $generalInformation['Domain'] }}">
        <meta property="og:site_name" content="{{ $result }}">
        <meta property="og:description" content="Website {{ $generalInformation['Name'] }}">
        <meta property="og:image" content="">
        {{-- END::Facebook Meta --}}

        {{-- BEGIN::Twitter Meta --}}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $result }} | Website {{ $result }} - Kota Depok">
        <meta name="twitter:description" content="Website {{ $generalInformation['Name'] }}">
        <meta name="twitter:image" content="">
        {{-- END::Twitter Meta --}}

        {{-- BEGIN::Favicons --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_16x16.png') }}" />
        {{-- END::Favicons --}}
    @endforeach
@else
    {{-- BEGIN::Google Search Meta --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Perangkat Daerah Kota Depok" name="description" />
    <meta name="keywords" content="website, perangkat daerah kota depok, diskominfo, website perangkat daerah kota depok, website diskominfo, depok, kota depok, pemerintah kota depok">
    <meta name="author" content="PI" />
    <meta name="website" content="https://pepeve.id" />
    <meta name="email" content="pdzeus83aw@gmail.com" />
    <meta name="version" content="1.0.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="style-src 'self' 'unsafe-inline' https://fonts.googleapis.com/; font-src 'self' 'unsafe-inline' https://fonts.gstatic.com/ https://fonts.googleapis.com/;">
    {{-- END::Google Search Meta --}}

    {{-- BEGIN::CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- END::CSRF Token --}}

    {{-- BEGIN::Title --}}
    <title>{{ empty($shortWorkUnits) ? config('app.name', 'Portal Perangkat Daerah') : $shortWorkUnits }}</title>
    {{-- END::Title --}}

    {{-- BEGIN::Main CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
    {{-- END::Main CSS --}}

    {{-- BEGIN::Plugins CSS --}}
    <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    {{-- END::Plugins CSS --}}

    {{-- BEGIN::Data Tables CSS --}}
    <link href="{{ asset('assets/datatables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/datatables/jqueryui/themes/base/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/datatables/datatables/css/dataTables.jqueryui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/datatables/responsive/css/responsive.jqueryui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/datatables/buttons/css/buttons.jqueryui.min.css') }}" rel="stylesheet" />
    {{-- END::Data Tables CSS --}}

    {{-- BEGIN::Canonical --}}
    <link rel="canonical" href="https://depok.go.id" />
    {{-- END::Canonical --}}

    {{-- BEGIN::Facebook Meta --}}
    <meta property="og:title" content="Perangkat Daerah | Portal Perangkat Daerah - Kota Depok">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://depok.go.id">
    <meta property="og:site_name" content="Perangkat Daerah">
    <meta property="og:description" content="Perangkat Daerah Portal Perangkat Daerah Kota Depok">
    <meta property="og:image" content="">
    {{-- END::Facebook Meta --}}

    {{-- BEGIN::Twitter Meta --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Perangkat Daerah | Portal Perangkat Daerah - Kota Depok">
    <meta name="twitter:description" content="Perangkat Daerah Portal Perangkat Daerah Kota Depok">
    <meta name="twitter:image" content="">
    {{-- END::Twitter Meta --}}

    {{-- BEGIN::Favicons --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_16x16.png') }}" />
    {{-- END::Favicons --}}
@endif
