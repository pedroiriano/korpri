@extends('layouts.page')

@section('content')
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
                        Kontak
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Hubungi Kami
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    @if (!empty($generalInformations))
                        @foreach ($generalInformations as $generalInformation)
                            <div class="text-center px-6 mt-6">
                                <div class="w-20 h-20 bg-blue-korpri/5 text-blue-korpri rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                                    <i class="uil uil-phone"></i>
                                </div>
                                <div class="content mt-7">
                                    <h5 class="title h5 text-xl font-medium">
                                        Telepon
                                    </h5>
                                    <p class="text-slate-400 mt-3">
                                        Nomor Telepon {{ $shortWorkUnits }}.
                                    </p>
                                    <div class="mt-5">
                                        <a href="tel:{{ $generalInformation['Telp'] }}" class="btn btn-link text-blue-korpri hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                                            {{ $generalInformation['Telp'] }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center px-6 mt-6">
                                <div class="w-20 h-20 bg-blue-korpri/5 text-blue-korpri rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                                    <i class="uil uil-envelope"></i>
                                </div>
                                <div class="content mt-7">
                                    <h5 class="title h5 text-xl font-medium">
                                        Email
                                    </h5>
                                    <p class="text-slate-400 mt-3">
                                        Alamat Surat Elektronik {{ $shortWorkUnits }}
                                    </p>
                                    <div class="mt-5">
                                        <a href="mailto:{{ $generalInformation['Email'] }}" class="btn btn-link text-blue-korpri hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                                            {{ $generalInformation['Email'] }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center px-6 mt-6">
                                <div class="w-20 h-20 bg-blue-korpri/5 text-blue-korpri rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                                    <i class="uil uil-map-marker"></i>
                                </div>
                                <div class="content mt-7">
                                    <h5 class="title h5 text-xl font-medium">
                                        Lokasi
                                    </h5>
                                    <p class="text-slate-400 mt-3">
                                        {{ $generalInformation['Alamat'] }}
                                    </p>
                                    <div class="mt-5">
                                        <a href="{{ $generalInformation['URLmaps'] }}"
                                        data-type="iframe" loading="lazy" class="video-play-icon read-more lightbox btn btn-link text-blue-korpri hover:text-blue-korpri after:bg-blue-korpri duration-500 ease-in-out">
                                        Lihat di Google Map
                                    </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Kontak
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="{{ route('important-contact') }}" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Kontak Penting
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('contact-us') }}" class="font-semibold hover:text-blue-korpri" aria-selected="true">
                                Hubungi Kami
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
