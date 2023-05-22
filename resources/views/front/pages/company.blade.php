@extends('front.layout.app')

@section('content')
    <main id="empresa" class="row gx-0 overflow-hidden bg-cinza">
        <section class="historia">
            <div class=" bg-azul-escuro">
                <div class="container container-start">
                    <div class="row g-0">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center position-relative text-lg-start text-center py-2 py-lg-0">
                            <svg class="position-absolute end-0 top-0 d-none d-lg-flex" width="588" height="100%" viewBox="0 0 588 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse opacity="0.1" cx="448" cy="235" rx="448" ry="258" fill="black"/>
                            </svg>
                            <div class="pe-lg-4">
                                <h2 class="h2-32 p-700 text-white">
                                    Nossa história
                                </h2>    
                                <p class="p-16 p-400 text-white pt-1">
                                    <span class="p-700">SILO</span> é uma <span class="p-700">Indústria Brasileira</span> que oferece uma ampla linha de lentes, 
                                    lanternas e acessórios para Automóveis de Passeio, Ônibus Urbano e Rodoviário.
                                </p> 
                                <p class="p-16 p-400 text-white pt-1">
                                    A Indústria com mais de <span class="p-700">3.000 m²</span> está localizada na cidade de <span class="p-700"> São Paulo</span> com sede própria.
                                </p> 
                            </div>          
                        </div>
                        <div class="col-lg-6">
                            <div class="historia-swiper swiper">
                                <div class="swiper-wrapper mb-4 mb-lg-0">
                                    @foreach (range(0,2) as $item)
                                        <div class="swiper-slide ratio ratio-21x9">
                                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/historia.png") }}" alt="">                               
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev w-51 h-51 border border-white top-40 d-lg-flex rounded-circle bg-rgb">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.999998L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="white"/>
                                    </svg>                                    
                                </div>
                                <div class="swiper-button-next w-51 h-51 border border-white top-40 d-lg-flex rounded-circle bg-rgb">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="white"/>
                                    </svg>                                                               
                                </div>
                                {{--<div class="swiper-pagination"></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-4 py-2">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 d-flex m-auto justify-content-center">
                        <div class="numeros-swiper swiper pb-2">
                            <div class="swiper-wrapper">
                                @foreach (range(0,3) as $item)
                                        <div class="swiper-slide d-flex justify-content-center flex-column">
                                            <h2 class="h2-64 p-700 text-primary text-center w-100" id="contador">
                                                100%
                                            </h2>
                                            <p class="p-16 p-400 text-center">
                                                indústria nacional
                                            </p>
                                        </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination d-lg-none" style=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="conainer">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="ratio ratio-21x9">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/empresa2.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white p-lg-4 p-2 d-flex align-items-center">
                        <div>
                            <p class="p-16 p-400">
                                As <span class="p-700">modernas instalações</span> e produção com <span class="p-700">tecnologia</span>, são resultados do trabalho de uma equipe altamente 
                                <span class="p-700">qualificada</span>, profissionais em vendas e produção com 
                                experiência no mercado automobilístico.
                            </p>
                            <p class="p-16 p-400">
                                Ocupando a ponta superior do segmento e em expansão, nossos produtos oferecem uma ótima qualidade para o mercado Nacional e Internacional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" mt-0-50">
            <div class="px-1 px-lg-0">
                <div class="row">
                    <div class="empresa-swiper swiper">
                        <div class="swiper-wrapper mb-4">
                            @foreach (range(0,8) as $banner)
                                <div class="swiper-slide">
                                    <a href="{{ asset('front/images/backgrounds/empresa2.png') }}" data-fancybox="gallery">
                                        <div class="ratio ratio-16x9">
                                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/empresa.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev top-40 start-5 w-51 h-51 border border-white rounded-circle bg-rgb d-none d-lg-flex">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.999998L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="white"/>
                            </svg>                                    
                        </div>
                        <div class="swiper-button-next end-5 top-40 w-51 h-51 border border-white rounded-circle bg-rgb d-none d-lg-flex">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="white"/>
                            </svg>                                                               
                        </div>
                        <div class="swiper-pagination mb-1 d-lg-none"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
