
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9 overflow-hidden">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach (range(0,1) as $banner)
                    <div class="swiper-slide banner-slide position-relative">
                        <div class="position-absolute w-100 top-40 text-lg-end text-center z-index-3">
                            <div class="container">
                                <h2 class="text-white h2-64 p-400">Linha completa <br> para ônibus</h2>
                                <button class="btn btn-primary p-16 p-400 rounded-0 text-white mt-2">Veja os produtos</button>
                            </div>
                        </div>
                        <picture>
                            <div class="bg-rgba position-absolute top-0 start-0 text-center w-100 h-100">
                            </div>
                            {{-- Desktop --}}
                            <source srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)">
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>

                       {{-- @if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif --}}

                    </div>
                @endforeach
            </div>
            <div class="position-absolute bottom-0 end-0 bg-white d-none d-lg-block">
                <div class="w-100 bg-white position-relative z-index-1 controle-banner">
                    <div class=" w-50 h-100 position-absolute">
                        <div class="swiper-button-prev">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0.5L1 7.5M1 7.5L8 14.5M1 7.5L15 7.5" stroke="#505050" stroke-linejoin="round"/>
                            </svg>                            
                        </div>
                        <div class="swiper-button-next">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14.5L14 7.5M14 7.5L7 0.5M14 7.5L-3.86392e-07 7.5" stroke="#505050" stroke-linejoin="round"/>
                            </svg>                            
                        </div>
                        <div class="swiper-pagination pagination-unstyled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
