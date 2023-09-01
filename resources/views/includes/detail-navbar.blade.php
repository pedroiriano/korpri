<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        @if (!empty($generalInformations))
            @foreach ($generalInformations as $generalInformation)
                @php
                    $domain = $generalInformation['Domain'];
                    preg_match('/^([a-zA-Z0-9-]+?)(?:-dev)?\./', $domain, $matches);
                    $result = strtoupper(str_replace('-dev', '', $matches[1]));
                @endphp
                <a class="logo pl-0" href="/">
                    <span class="inline-block dark:hidden">
                        <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" class="l-dark" height="24" alt="Logo" style="height: 24px"><span class="l-dark text-dark ml-2">{{ $result }}</span>
                        <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" class="l-light" height="24" alt="Logo" style="height: 24px"><span class="l-light text-dark ml-2">{{ $result }}</span>
                    </span>
                    <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" height="24" class="hidden dark:inline-block" alt="Logo" style="height: 24px"><span class="hidden dark:inline-block text-white ml-2">{{ $result }}</span>
                </a>
            @endforeach
        @else
            <a class="logo pl-0" href="/">
                <span class="inline-block dark:hidden">
                    <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" class="l-dark" height="24" alt="Logo" style="height: 24px"><span class="l-dark text-dark ml-2">{{ strstr($shortWorkUnits, ' ', true) }}</span>
                    <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" class="l-light" height="24" alt="Logo" style="height: 24px"><span class="l-light text-white ml-2">{{ strstr($shortWorkUnits, ' ', true) }}</span>
                </span>
                <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" height="24" class="hidden dark:inline-block" alt="Logo" style="height: 24px"><span class="hidden dark:inline-block text-white ml-2">{{ strstr($shortWorkUnits, ' ', true) }}</span>
            </a>
        @endif

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!-- Social Media Start -->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="https://www.facebook.com/PemerintahKotaDepok" target="_blank">
                    <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-blue-korpri/5 hover:bg-blue-korpri border-blue-korpri/10 hover:border-blue-korpri text-blue-korpri hover:text-white"><i data-feather="facebook" class="h-4 w-4"></i></span></span>
                    <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="facebook" class="h-4 w-4"></i></span></span>
                </a>
            </li>

            <li class="inline mb-0">
                <a href="https://www.instagram.com/pemkotdepok" target="_blank">
                    <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-blue-korpri/5 hover:bg-blue-korpri border-blue-korpri/10 hover:border-blue-korpri text-blue-korpri hover:text-white"><i data-feather="instagram" class="h-4 w-4"></i></span></span>
                    <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="instagram" class="h-4 w-4"></i></span></span>
                </a>
            </li>

            <li class="inline mb-0">
                <a href="https://twitter.com/pemkotdepok" target="_blank">
                    <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-blue-korpri/5 hover:bg-blue-korpri border-blue-korpri/10 hover:border-blue-korpri text-blue-korpri hover:text-white"><i data-feather="twitter" class="h-4 w-4"></i></span></span>
                    <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="twitter" class="h-4 w-4"></i></span></span>
                </a>
            </li>
    
            <li class="inline pl-1 mb-0">
                <a href="https://www.youtube.com/@kominfodepok" target="_blank">
                    <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-blue-korpri/5 hover:bg-blue-korpri border-blue-korpri/10 hover:border-blue-korpri text-blue-korpri hover:text-white"><i data-feather="youtube" class="h-4 w-4"></i></span></span>
                    <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="youtube" class="h-4 w-4"></i></span></span>
                </a>
            </li>
        </ul>
        <!-- Social Media End -->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('about') }}" class="sub-menu-item">Tentang Kami</a></li>
                        <li><a href="{{ route('organization') }}" class="sub-menu-item">Struktur Organisasi</a></li>
                        <li><a href="{{ route('duty') }}" class="sub-menu-item">Tugas dan Fungsi</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Informasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('news') }}" class="sub-menu-item">Berita</a></li>
                        <li><a href="{{ route('announcement') }}" class="sub-menu-item">Pengumuman</a></li>
                        <li><a href="{{ route('agenda') }}" class="sub-menu-item">Agenda</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Founding Fathers</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Berita Duka</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Pegawai Purnabakti</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Instansi Terkait</a></li>
                        <li><a href="{{ route('innovation') }}" class="sub-menu-item">Inovasi ASN</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Polling</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Galeri</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('photo') }}" class="sub-menu-item">Foto</a></li>
                        <li><a href="{{ route('video') }}" class="sub-menu-item">Video</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Download</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('product') }}" class="sub-menu-item">E-Book</a></li>
                        <li><a href="{{ route('regulation') }}" class="sub-menu-item">Peraturan</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Kontak Kami</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('important-contact') }}" class="sub-menu-item">Kontak Penting</a></li>
                        <li><a href="{{ route('contact-us') }}" class="sub-menu-item">Hubungi Kami</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
