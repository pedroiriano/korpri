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
                    <a class="bg-indigo-600/10 text-indigo-600 font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Layanan
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Layanan {{ $shortWorkUnits }}
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-building"></i>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="nft-detail.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                Lorem, ipsum.
                            </a>
                            <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti.
                            </p>
                        </div>
                    </div>

                    <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-building"></i>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="nft-detail.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                Lorem ipsum!
                            </a>
                            <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam!
                            </p>
                        </div>
                    </div>

                    <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-building"></i>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="nft-detail.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                Lorem, ipsum?
                            </a>
                            <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                    <div class="md:col-span-12 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-l-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="uil uil-angle-left text-[20px]"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">1</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">3</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">4</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">5</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-r-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="uil uil-angle-right text-[20px]"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Layanan
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="{{ route('service') }}" class="font-semibold hover:text-indigo-600" aria-selected="true">
                                Layanan
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('regulation') }}" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Regulasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->
@endsection
