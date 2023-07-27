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

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/profil/tentang-kami" class="sub-menu-item">Tentang Kami</a></li>
                        <li><a href="/profil/visi-misi" class="sub-menu-item">Visi dan Misi</a></li>
                        <li><a href="/profil/struktur-organisasi" class="sub-menu-item">Struktur Organisasi</a></li>
                        <li><a href="/profil/tupoksi" class="sub-menu-item">Tupoksi</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Informasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/publikasi/berita" class="sub-menu-item">Berita</a></li>
                        <li><a href="/publikasi/pengumuman" class="sub-menu-item">Pengumuman</a></li>
                        <li><a href="/informasi/produk" class="sub-menu-item">Dokumen Produk</a></li>
                        <li><a href="/informasi/program-unggulan" class="sub-menu-item">Program Unggulan</a></li>
                        <li><a href="/informasi/inovasi" class="sub-menu-item">Inovasi</a></li>
                        <li><a href="/informasi/agenda" class="sub-menu-item">Agenda</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Layanan</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/layanan/semua" class="sub-menu-item">Layanan</a></li>
                        <li><a href="/layanan/regulasi" class="sub-menu-item">Regulasi</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Galeri</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/publikasi/foto" class="sub-menu-item">Foto</a></li>
                        <li><a href="/publikasi/video" class="sub-menu-item">Video</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Kontak</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/kontak/kontak-penting" class="sub-menu-item">Kontak Penting</a></li>
                        <li><a href="/kontak/hubungi-kami" class="sub-menu-item">Hubungi Kami</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
