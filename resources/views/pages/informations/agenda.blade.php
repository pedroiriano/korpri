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
                    <a href="" class="bg-blue-korpri/10 text-blue-korpri font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Informasi
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Agenda
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 mt-8">
                    <ul class="md:w-fit w-full mx-auto flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                        <li role="presentation" class="md:inline-block block md:w-fit w-full">
                            <button class="px-6 py-2 font-semibold rounded-md w-full hover:text-blue-korpri transition-all duration-500 ease-in-out" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">
                                Umum
                            </button>
                        </li>
                        <li role="presentation" class="md:inline-block block md:w-fit w-full">
                            <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="private-tab" data-tabs-target="#private" type="button" role="tab" aria-controls="private" aria-selected="false">
                                Khusus
                            </button>
                        </li>
                    </ul>

                    <div id="StarterContent" class="mt-1">
                        <div class="" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div class="grid grid-cols-1">
                                <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                                    <div class="container">
                                        <div class="grid grid-cols-1 mt-8 gap-[30px]">
                                            <!-- Start Agenda -->
                                            @if(!empty($generalAgenda))
                                                @foreach($generalAgenda as $item)
                                                    @php
                                                        $startDate = $Carbon::parse($item['TanggalAwal']);
                                                        $startDate = $startDate->format('d-m-Y');
                                                        $finishDate = $Carbon::parse($item['TanggalAkhir']);
                                                        $finishDate = $finishDate->format('d-m-Y');
                                                    @endphp
                                                    <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                                                        <div class="relative overflow-hidden">
                                                            @if (!empty($item['Media']))
                                                                <img loading="lazy" src="https://cms.depok.go.id/upload/event/{{ $item['Media'] }}" class="group-hover:scale-110 duration-500 ease-in-out" alt="{{ $item['Title'] }}">
                                                                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                            @else
                                                                <img loading="lazy" src="{{ asset('assets/images/page/agenda.jpg') }}" class="group-hover:scale-110 duration-500 ease-in-out" alt="Agenda">
                                                                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                            @endif
                                                        </div>
                                                        <div class="content p-6 relative">
                                                            <a class="font-medium block text-blue-korpri">
                                                                Agenda
                                                            </a>
                                                            <a class="text-lg font-medium block hover:text-blue-korpri duration-500 ease-in-out mt-2">
                                                                {{ $item['Title'] }}
                                                            </a>
                                                            <p class="text-slate-400 mt-3 mb-4">
                                                                {!! $item['Deskripsi'] !!}
                                                            </p>
                                                            <div class="text-sm mt-8">
                                                                <i class="uil uil-users-alt mr-4"></i>
                                                                Penyelenggara: {{ $item['Penyelenggara'] }} <br>
                                                                <i class="uil uil-phone mr-4"></i>
                                                                {{ $item['PIC'] }} <br>
                                                                <i class="uil uil-building mr-4"></i>
                                                                {{ $item['Alamat'] }} <br><br>
                                                            </div>
                                                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                                                <li class="flex items-center mr-4">
                                                                    <i class="uil uil-clock text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                                                    <span>{{ $startDate }} s.d. {{ $finishDate }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <!-- End Agenda -->
                                        </div>
                                        {{ $generalAgenda->onEachSide(2)->links('vendor.pagination.custom-tailwind') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden" id="private" role="tabpanel" aria-labelledby="private-tab">
                            <div class="grid grid-cols-1">
                                <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                                    <div class="container">
                                        <div class="grid grid-cols-1 mt-8 gap-[30px]">
                                            <!-- Start Agenda -->
                                            @if(!empty($specialAgenda))
                                                @foreach($specialAgenda as $item)
                                                    @php
                                                        $startDate = $Carbon::parse($item['TanggalAwal']);
                                                        $startDate = $startDate->format('d-m-Y');
                                                        $finishDate = $Carbon::parse($item['TanggalAkhir']);
                                                        $finishDate = $finishDate->format('d-m-Y');
                                                    @endphp
                                                    <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                                                        <div class="relative overflow-hidden">
                                                            @if (!empty($item['Media']))
                                                                <img loading="lazy" src="https://cms.depok.go.id/upload/event/{{ $item['Media'] }}" class="group-hover:scale-110 duration-500 ease-in-out" alt="{{ $item['Title'] }}">
                                                                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                            @else
                                                                <img loading="lazy" src="{{ asset('assets/images/page/agenda.jpg') }}" class="group-hover:scale-110 duration-500 ease-in-out" alt="Agenda">
                                                                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                            @endif
                                                        </div>
                                                        <div class="content p-6 relative">
                                                            <a class="font-medium block text-blue-korpri">
                                                                Agenda
                                                            </a>
                                                            <a class="text-lg font-medium block hover:text-blue-korpri duration-500 ease-in-out mt-2">
                                                                {{ $item['Title'] }}
                                                            </a>
                                                            <p class="text-slate-400 mt-3 mb-4">
                                                                {!! $item['Deskripsi'] !!}
                                                            </p>
                                                            <div class="text-sm mt-8">
                                                                <i class="uil uil-users-alt mr-4"></i>
                                                                Penyelenggara: {{ $item['Penyelenggara'] }} <br>
                                                                <i class="uil uil-phone mr-4"></i>
                                                                {{ $item['PIC'] }} <br>
                                                                <i class="uil uil-building mr-4"></i>
                                                                {{ $item['Alamat'] }} <br><br>
                                                            </div>
                                                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                                                <li class="flex items-center mr-4">
                                                                    <i class="uil uil-clock text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                                                    <span>{{ $startDate }} s.d. {{ $finishDate }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <!-- End Agenda -->
                                        </div>
                                        {{ $specialAgenda->onEachSide(2)->links('vendor.pagination.custom-tailwind') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Informasi
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="{{ route('news') }}" class="font-semibold hover:text-blue-korpri" aria-selected="false">
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
                            <a href="{{ route('agenda') }}" class="font-semibold hover:text-blue-korpri" aria-selected="true">
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
