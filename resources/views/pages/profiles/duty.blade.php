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
                    <a href="" class="bg-blue-korpri/10 text-blue-korpri font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Profil
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Struktur Organisasi
                    </h5>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div>
                    <style>
                        .ui-widget-header {
                            background-color: #333;
                            color: #fff;
                        }

                        .ui-widget-content {
                            background-color: #444;
                            color: #fff;
                        }
                    </style>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="min-width: 5rem; max-width: 10rem;">Nama Jabatan</th>
                                <th>Tugas Pokok</th>
                                <th style="min-width: 5rem; max-width: 10rem;">Uraian Tugas</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th style="min-width: 5rem; max-width: 10rem;">Nama Jabatan</th>
                                <th>Tugas Pokok</th>
                                <th style="min-width: 5rem; max-width: 10rem;">Uraian Tugas</th>
                            </tr>
                        </tfoot>
                        @if(!empty($duty))
                        <tbody>
                            @foreach($duty as $item)
                            <tr>
                                <td>
                                    @if (strlen($item['Jabatan']) >= 75)
                                    {{ strip_tags(substr($item['Jabatan'],0, 75). '...') }}
                                    @else
                                        {{ $item['Jabatan'] }}
                                    @endif
                                </td>
                                <td>
                                    @if (strlen($item['TugasPokok']) >= 75)
                                    {{ strip_tags(substr($item['TugasPokok'],0, 75). '...') }}
                                    @else
                                        {{ $item['TugasPokok'] }}
                                    @endif
                                </td>
                                <td>
                                    @if (strlen($item['UraianTugas']) >= 75)
                                    {{ strip_tags(substr($item['UraianTugas'],0, 75). '...') }}
                                    @else
                                        {{ $item['UraianTugas'] }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Profil
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="/profil/tentang-kami" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Tentang
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/profil/struktur-organisasi" class="font-semibold hover:text-blue-korpri" aria-selected="false">
                                Struktur Organisasi
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/profil/tupoksi" class="font-semibold hover:text-blue-korpri" aria-selected="true">
                                Tupoksi
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
