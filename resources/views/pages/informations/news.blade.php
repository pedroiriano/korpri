@extends('layouts.page')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start Hero -->
<section class="relative table w-full py-40 lg:py-64 bg-no-repeat bg-center" data-jarallax='{"speed": 0.1}' style="background-image: url({{ asset('assets/images/pages-header.png') }}); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
</section>
<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container">
        <div class="md:flex">
            <div class="relative lg:w-2/3 w-full -mt-32">
                <div class="px-6 py-12 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 text-center">
                    <a class="bg-blue-korpri/10 text-blue-korpri font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Informasi
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Berita {{ $shortWorkUnits }}
                    </h5>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]">
                    @if (!empty($allNews))
                        @foreach ($allNews as $allNew)
                            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                                @php
                                    $publishDate = $Carbon::parse($allNew['tgl_publish']);
                                    $publishDate = $publishDate->format('d-m-Y');
                                @endphp
                                @if (!empty($allNew['lampiran']))
                                    <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $allNew['lampiran'] }}" alt="News">
                                @else
                                    <img loading="lazy" src="{{ asset('assets/images/page/news.jpg') }}" alt="News">
                                @endif
                                <div class="content p-6">
                                    <a href="/berita/detail/{{ $allNew['slug_title'] }}" class="title h5 text-lg font-medium hover:text-blue-korpri duration-500 ease-in-out">
                                        {{ $allNew['title'] }}
                                    </a>
                                    <p class="text-slate-400 mt-3">
                                        {{ strip_tags(substr($allNew['content'],0, 120). '...') }}
                                    </p>
                                    <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                        <li class="flex items-center mr-4">
                                            <i class="uil uil-clock text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                            <span>{{ $publishDate }}</span>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="/berita/detail/{{ $allNew['slug_title'] }}" class="btn btn-link font-normal hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                                            Selengkapnya <i class="uil uil-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--blog end-->
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif
                </div>
                {{ $allNews->onEachSide(2)->links('vendor.pagination.custom-tailwind') }}
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Informasi
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="{{ route('news') }}" class="font-semibold hover:text-blue-korpri" aria-selected="true">
                                Berita
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('announcement') }}" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Pengumuman
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('agenda') }}" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Agenda
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="javascript:void(0)" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Founding Fathers
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="javascript:void(0)" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Berita Duka
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="javascript:void(0)" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Pegawai Purnabakti
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="javascript:void(0)" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Instansi Terkait
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('innovation') }}" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Inovasi ASN
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="javascript:void(0)" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Polling
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->
@endsection
