@extends('layouts.page')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start -->
<section class="relative table w-full md:pb-24 pb-16 mt-28">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            @if(!empty($announcementDetails))
                @foreach($announcementDetails as $announcementDetail)
                    @php
                        $publishDate = $Carbon::parse($announcementDetail['tgl_publish']);
                        $publishDate = $publishDate->format('d-m-Y');
                    @endphp
                    <div class="lg:col-span-6 md:col-span-5">
                        <div class="sticky top-20">
                            @if (!empty($announcementDetail['lampiran']))
                                <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $announcementDetail['lampiran'] }}" class="rounded-md shadow-md dark:shadow-gray-800" alt="News">
                            @else
                                <img loading="lazy" src="{{ asset('assets/images/page/news.jpg') }}" class="rounded-md shadow-md dark:shadow-gray-800" alt="News">
                            @endif
                        </div>
                    </div>
                    <div class="lg:col-span-6 md:col-span-7">
                        <div class="">
                            <h5 class="lg:text-4xl lg:leading-relaxed text-2xl font-semibold">
                                {{ $announcementDetail['title'] }}
                            </h5>
                            <div class="grid grid-cols-1 mt-8">
                                <ul class="md:w-fit w-full flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                                    <li role="presentation" class="md:inline-block block md:w-fit w-full">
                                        <button class="px-6 py-2 font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out" id="detail-tab" data-tabs-target="#detail" type="button" role="tab" aria-controls="detail" aria-selected="true">
                                            Detail
                                        </button>
                                    </li>
                                    <li role="presentation" class="md:inline-block block md:w-fit w-full">
                                        <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="information-tab" data-tabs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="false">
                                            Informasi
                                        </button>
                                    </li>
                                </ul>
                                <div id="StarterContent" class="mt-6">
                                    <div class="" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                                        <div class="grid grid-cols-1">
                                            {!! $announcementDetail['content'] !!}
                                        </div>
                                    </div>
                                    <div class="hidden" id="information" role="tabpanel" aria-labelledby="information-tab">
                                        <div class="grid grid-cols-1">
                                            <div class="flex items-center">
                                                <div class="relative">
                                                    <img loading="lazy" src="{{ asset('assets/images/client/01.jpg') }}" class="h-16 w-16 rounded-full shadow-md dark:shadow-gray-800" alt="Author">
                                                </div>
                                                <div class="ml-3">
                                                    <h6 class="text-lg font-semibold">
                                                        <a class="hover:text-indigo-600 duration-500 ease-in-out">
                                                            Admin
                                                        </a>
                                                    </h6>
                                                    <span class="text-slate-400">
                                                        {{ $publishDate }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End -->
@endsection
