<!-- Footer Start -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="/" class="text-[22px] focus:outline-none">
                                <img loading="lazy" src="{{ asset('assets/images/brand/lambang-depok.png') }}" height="24" class="inline-block" alt="Logo" style="height: 24px"><span class="inline-block text-white ml-2">{{ $shortWorkUnits }}</span>
                            </a>
                            <p class="mt-6 text-gray-300">
                                Website Resmi {{ $shortWorkUnits }}. Silakan kunjungi Media Sosial Kami untuk informasi lainnya.
                            </p>
                            @if (!empty($generalInformations))
                                @foreach ($generalInformations as $generalInformation)
                                    <ul class="list-none mt-6">
                                        <li class="inline">
                                            <a href="{{ $generalInformation['Facebook'] }}" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-blue-korpri dark:hover:border-blue-korpri hover:bg-blue-korpri dark:hover:bg-blue-korpri">
                                                <i class="uil uil-facebook-f align-middle" title="facebook"></i>
                                            </a>
                                        </li>
                                        <li class="inline">
                                            <a href="{{ $generalInformation['Instagram'] }}" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-blue-korpri dark:hover:border-blue-korpri hover:bg-blue-korpri dark:hover:bg-blue-korpri">
                                                <i class="uil uil-instagram align-middle" title="instagram"></i>
                                            </a>
                                        </li>
                                        <li class="inline">
                                            <a href="{{ $generalInformation['Twitter'] }}" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-blue-korpri dark:hover:border-blue-korpri hover:bg-blue-korpri dark:hover:bg-blue-korpri">
                                                <i class="uil uil-twitter align-middle" title="twitter"></i>
                                            </a>
                                        </li>
                                        <li class="inline">
                                            <a href="{{ $generalInformation['Youtube'] }}" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-blue-korpri dark:hover:border-blue-korpri hover:bg-blue-korpri dark:hover:bg-blue-korpri">
                                                <i class="uil uil-youtube align-middle" title="youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            @endif
                        </div>

                        <div class="lg:col-span-2 md:col-span-6">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Profil</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Tentang Kami
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('vision') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Visi dan Misi
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('organization') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Struktur Organisasi
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('duty') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Tupoksi
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:col-span-2 md:col-span-6">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Informasi</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ route('news') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Berita
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('announcement') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Pengumuman
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('product') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Dokumen Produk
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('featured') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Program Unggulan
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('innovation') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Inovasi
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('agenda') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Agenda
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:col-span-2 md:col-span-6">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Layanan</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ route('service') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Layanan
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('regulation') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Regulasi
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:col-span-2 md:col-span-6">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Galeri</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ route('photo') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Foto
                                    </a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="{{ route('video') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">
                                        <i class="uil uil-angle-right-b me-1"></i> Video
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-left text-center">
                    <p class="mb-0">
                        © <script>document.write(new Date().getFullYear())</script> {{ $shortWorkUnits }}. Didesain dengan <i class="mdi mdi-heart text-red-600"></i> oleh <a href="https://diskominfo.depok.go.id/" target="_blank" class="text-reset">Diskominfo</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
