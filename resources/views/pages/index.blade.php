@extends('layouts.landing')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start Hero -->
<section class="swiper-slider-hero relative block h-screen" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @if (!empty($sliders))
                @foreach ($sliders as $slider)
                    <div class="swiper-slide flex items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image flex items-center bg-center bg-no-repeat" data-background="https://cms.depok.go.id/upload/slider/{{ $slider['File'] }}" style="background-size: contain">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="container">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        {!! $slider['Description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="swiper-slide flex items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image flex items-center bg-center bg-no-repeat" data-background="{{ asset('assets/images/bg-app.png') }}" style="background-size: cover">
                        <div class="absolute inset-0 bg-black/70"></div>
                    </div>
                </div>
            @endif
        </div>

        <div class="swiper-button-next rounded-full text-center"></div>
        <div class="swiper-button-prev rounded-full text-center"></div>
    </div>
</section>
<!-- Hero End -->

<!-- Start Widget -->
<section class="relative py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-blue-korpri/5 border-2 border-blue-korpri/20 text-blue-korpri rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-calendar-alt"></i>
                </div>
                <div class="content ml-6">
                    <p id="date" class="text-lg font-medium hover:text-blue-korpri">
                        {{-- Full Date Function --}}
                    </p>
                    <p id="day" class="text-slate-400 mt-1">
                        {{-- Day Name Function --}}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-blue-korpri/5 border-2 border-blue-korpri/20 text-blue-korpri rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-compass"></i>
                </div>
                <div class="content ml-6">
                    <p id="clock" class="text-lg font-medium hover:text-blue-korpri">
                        {{-- Live Clock Function --}}
                    </p>
                    <p class="text-slate-400 mt-1">
                        {{ $prayerName }} - {{ $pt }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Widget -->

<!-- Start City News -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-12 md:col-span-12 md:text-left text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Berita dan Pengumuman
                </h3>
                <p class="text-slate-400 max-w-xl">
                    Dapatkan informasi seputar KORPRI Kota Depok yang Anda perlukan di sini.
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
                    @if (!empty($news))
                        @foreach ($news as $new)
                            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                                <div class="lg:flex relative">
                                    <div class="relative md:shrink-0">
                                        @if (!empty($new['lampiran']))
                                            <img loading="lazy" class="h-full w-full object-cover lg:w-52 lg:h-56" src="https://cms.depok.go.id/upload/{{ $new['lampiran'] }}" alt="News">
                                        @else
                                            <img loading="lazy" class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset('assets/images/page/news.jpg') }}" alt="News">
                                        @endif
                                    </div>
                                    <div class="p-6 flex flex-col lg:h-56 justify-center">
                                        <a href="/berita/detail/{{ $new['slug_title'] }}" class="title h5 text-lg font-medium hover:text-blue-korpri duration-500 ease-in-out">
                                            {{ $new['title'] }}
                                        </a>
                                        <div class="my-auto">
                                            <p class="text-slate-400 mt-3">
                                                {!! $string_limit($new['content'], 155) !!}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <a href="/berita/detail/{{ $new['slug_title'] }}" class="btn btn-link font-normal hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                                                Selengkapnya <i class="uil uil-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif
                </div>
                <div class="mt-4">
                    <a href="{{ route('news') }}" class="btn btn-link font-normal hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                        Semua Berita <i class="uil uil-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                        Pengumuman
                    </h5>
                    @if (!empty($announcements))
                    @php
                        $count = 0;
                    @endphp
                        @foreach ($announcements as $announcement)
                            <div class="flex items-center mt-8">
                                @php
                                    $announcementDate = $Carbon::parse($announcement['created_at']);
                                    $announcementDate = $announcementDate->format('d-m-Y');
                                @endphp
                                @if (!empty($announcement['lampiran']))
                                    <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $announcement['lampiran'] }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="Announcement">
                                @else
                                    <img loading="lazy" src="{{ asset('assets/images/page/announcement.jpg') }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="Announcement">
                                @endif
                                <div class="ml-3">
                                    <a href="/pengumuman/detail/{{ $announcement['slug_title'] }}" class="font-semibold hover:text-blue-korpri">
                                        {{ $announcement['title'] }}
                                    </a>
                                    <p class="text-sm text-slate-400">
                                        {{ $announcementDate }}
                                    </p>
                                </div>
                            </div>
                            @php
                                $count++;
                            @endphp
                            @if ($count == 3)
                                @break
                            @endif
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Media Sosial
                    </h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline">
                            <a href="https://www.facebook.com/PemerintahKotaDepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-blue-korpri hover:text-white hover:bg-blue-korpri" target="_blank">
                                <i data-feather="facebook" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://www.instagram.com/pemkotdepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-blue-korpri hover:text-white hover:bg-blue-korpri" target="_blank">
                                <i data-feather="instagram" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://twitter.com/pemkotdepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-blue-korpri hover:text-white hover:bg-blue-korpri" target="_blank">
                                <i data-feather="twitter" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://www.youtube.com/@kominfodepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-blue-korpri hover:text-white hover:bg-blue-korpri" target="_blank">
                                <i data-feather="youtube" class="h-4 w-4"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City News -->

<!-- Start Service & Information -->
<section class="relative md:py-24 py-16">
    <div class="grid grid-cols-1 mt-8">
        <ul class="md:w-fit w-full mx-auto flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="informations-tab" data-tabs-target="#informations" type="button" role="tab" aria-controls="informations" aria-selected="false">
                    Informasi
                </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="photo-gallery-tab" data-tabs-target="#photo-gallery" type="button" role="tab" aria-controls="photo-gallery" aria-selected="false">
                    Galeri Foto
                </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="video-gallery-tab" data-tabs-target="#video-gallery" type="button" role="tab" aria-controls="video-gallery" aria-selected="false">
                    Galeri Video
                </button>
            </li>
        </ul>

        <div id="StarterContent" class="mt-1">
            <div class="hidden" id="informations" role="tabpanel" aria-labelledby="informations-tab">
                <div class="grid grid-cols-1">
                    <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                        <div class="container">
                            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                                <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-blue-korpri dark:hover:bg-blue-korpri transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                    <div class="relative overflow-hidden text-transparent -m-3">
                                        <i data-feather="hexagon" class="h-24 w-24 fill-blue-korpri/5 group-hover:fill-white/10"></i>
                                        <div class="absolute top-2/4 -translate-y-2/4 left-8 text-blue-korpri rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                            <i class="uil uil-brain"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('innovation') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                            Inovasi
                                        </a>
                                        <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                            Sarana {{ $shortWorkUnits }} untuk mendorong terciptanya penyelenggaraan Pemerintahan dan pembangunan Masyarakat yang lebih produktif, efisien dan efektif.
                                        </p>
                                    </div>
                                </div>

                                <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-blue-korpri dark:hover:bg-blue-korpri transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                    <div class="relative overflow-hidden text-transparent -m-3">
                                        <i data-feather="hexagon" class="h-24 w-24 fill-blue-korpri/5 group-hover:fill-white/10"></i>
                                        <div class="absolute top-2/4 -translate-y-2/4 left-8 text-blue-korpri rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                            <i class="uil uil-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('agenda') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                            Agenda
                                        </a>
                                        <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                            Jadwal Kegiatan {{ $shortWorkUnits }}.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden" id="photo-gallery" role="tabpanel" aria-labelledby="photo-gallery-tab">
                <div class="grid grid-cols-1">
                    <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                        <div class="container">
                            <div class="grid lg:grid-cols-3 grid-cols-2 items-center mt-8 gap-4">
                                <!-- Start Photo Gallery -->
                                @if(!empty($galleries))
                                    @php
                                        $photoCounter = 1;
                                    @endphp
                                    @foreach($galleries as $item)
                                        @if($item['MediaType'] === 'FL02')
                                            <div class="group relative block overflow-hidden transition-all duration-500">
                                                <a href="https://cms.depok.go.id/upload/gallery/{{ $item['Media'] }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="{{ $item['Title'] }}">
                                                    <img loading="lazy" src="https://cms.depok.go.id/upload/gallery/{{ $item['Media'] }}" class="" alt="{{ $item['Title'] }}">
                                                </a>
                                            </div>
                                        @endif
                                        @if ($photoCounter == 6)
                                            @break;
                                        @endif
                                        @php
                                            $photoCounter = $photoCounter + 1;
                                        @endphp
                                    @endforeach
                                @else
                                    Koneksi API Terputus
                                @endif
                                <!-- End Photo Gallery -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden" id="video-gallery" role="tabpanel" aria-labelledby="video-gallery-tab">
                <div class="grid grid-cols-1">
                    <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                        <div class="container">
                            <div class="grid md:grid-cols-3 grid-cols-2 mt-8 gap-[30px]">
                                @if(!empty($galleries))
                                    @php
                                        $videoCounter = 1;
                                    @endphp
                                    @foreach($galleries as $item)
                                        @if($item['MediaType'] === 'FL01')
                                            <?php
                                                $link = $item['URL'];
                                                $videoId = substr(str_replace('https://www.youtube.com/watch?v=', '', $link), 0, 11);
                                            ?>
                                            <div class="group relative block overflow-hidden transition-all duration-500">
                                                <a href="" data-type="youtube" data-id="{{ $videoId }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="{{ $item['Title'] }}">
                                                    <img loading="lazy" src="https://cms.depok.go.id/upload/gallery/{{ $item['Media'] }}" class="" alt="{{ $item['Title'] }}">
                                                </a>
                                            </div>
                                        @endif
                                        @if ($videoCounter == 6)
                                            @break;
                                        @endif
                                        @php
                                            $videoCounter = $videoCounter + 1;
                                        @endphp
                                    @endforeach
                                @else
                                    Koneksi API Terputus
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service & Information -->

<!-- Start External Link -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                Link Terkait
            </h3>
        </div>

        <div class="grid grid-cols-1 mt-2 md:mt-6 relative">
            <div class="tiny-five-item">
                <!-- Start Slide -->
                @if (!empty($externalLinks))
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($externalLinks as $externalLink)
                        <div class="tiny-slide">
                            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                                <div class="py-10 bg-gradient-to-r to-violet-600/70 from-blue-korpri/70"></div>
                                <div class="p-6 pt-0 -mt-10 text-center">
                                    <a href="{{ $externalLink['URLMenu'] }}">
                                        @if (!empty($externalLink['ImageMenu']))
                                            <img src="https://cms.depok.go.id/upload/externalLogo/{{ $externalLink['ImageMenu'] }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                                        @else
                                            <img src="{{ asset('assets/images/page/link.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    Koneksi API Terputus
                @endif
                <!-- End Slide -->
            </div>
        </div>
    </div>
</section>
<!-- End External Link -->
@endsection

@push('js')
{{-- BEGIN::Live Clock JS --}}
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s + " WIB";
        let dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
        let dayOptions = { weekday: 'long' };
        let fullDate = today.toLocaleDateString('id-ID', dateOptions);
        let day = today.toLocaleDateString('id-ID', dayOptions);
        document.getElementById('date').innerHTML =  fullDate;
        document.getElementById('day').innerHTML =  day;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
</script>
{{-- END::Live Clock JS --}}
@endpush
