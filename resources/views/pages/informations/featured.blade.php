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
                    <a href="" class="bg-indigo-600/10 text-indigo-600 font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Informasi
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Program Unggulan
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 mt-8">
                    <div class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                        @if(!empty($featured))
                            @foreach($featured as $item)
                                <div class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                                    @php
                                        $publishDate = $Carbon::parse($item['tgl_publish']);
                                        $publishDate = $publishDate->format('d-m-Y');
                                    @endphp
                                    <div class="grid md:grid-cols-2">
                                        <div class="md:text-right md:mr-8 relative">
                                            <h5 class="title mb-1 font-semibold">
                                                {{ $publishDate }}
                                            </h5>
                                        </div>
                                        <div class="float-left text-left md:ml-8 mt-6 md:mt-0">
                                            <h5 class="title mb-1 font-semibold">
                                                {{ $item['title'] }}
                                            </h5>
                                            <p class="mt-3 mb-4 text-slate-400">
                                                {{ strip_tags($item['content']) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    {{ $featured->onEachSide(2)->links('vendor.pagination.custom-tailwind') }}
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Informasi</h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="/informasi/produk" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Dokumen Produk
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/program-unggulan" class="font-semibold hover:text-indigo-600" aria-selected="true">
                                Program Unggulan
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/inovasi" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Inovasi
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/agenda" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Agenda
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
