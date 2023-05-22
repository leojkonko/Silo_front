@extends('front.layout.app')

@section('content')
    <main id="">

        <x-banners />

        <section class="py-2 py-lg-4">
            <div class="container">
                <h2 class="title mb-2 h2-40 p-400 text-dark w-100 text-center">
                    <svg class="me-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                    </svg>                        
                    {{__('Nossas Linhas')}}
                    <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                    </svg>                        
                </h2>
                <div class="categories-swiper position-relative">
                    <div class="swiper-wrapper">
                        @foreach (range(0,2) as $item)
                            <a href="" class="category-card swiper-slide ratio ratio-1x1 d-block position-relative">
                                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/linhas.png") }}" alt="">
                                <div class="d-flex flex-column align-items-center justify-content-center p-1 p-sm-2 text-center gap-0-50 gap-sm-1 bg-linhas">
                                    <span class="text-uppercase fw-light position-absolute mt-2 top-0 start-50 translate-middle-x text-white p-22 p-400">{{ __('0 1') }}</span>
                                    <h3 class="h2-32 p-700 text-white">Título</h3>
                                    <p class="p-16 p-400 text-white d-none">
                                        textooooo
                                    </p>
                                </div>
                                <svg class="position-absolute top-99 start-50 translate-middle ratio-unstyled" width="160" height="10" viewBox="0 0 160 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="160" height="10" fill="#277CEA"/>
                                </svg>                                    
                            </a>
                        @endforeach
                    </div>
                    <div class="swiper-pagination d-lg-none mt-4" style="bottom: -30px;"></div>
                </div>
            </div>
        </section>
        <section class="historia py-lg-4 py-3">
            <div class=" bg-azul-escuro">
                <div class="container container-start">
                    <div class="row g-0">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center position-relative text-lg-start text-center py-2 py-lg-0">
                            <svg class="position-absolute end-0 top-0" width="588" height="100%" viewBox="0 0 588 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse opacity="0.1" cx="448" cy="235" rx="448" ry="258" fill="black"/>
                            </svg>
                            <div class="pe-lg-4">
                                <h2 class="h2-32 p-700 text-white">
                                    SILO à mais de 40 anos no mercado automobilístico
                                </h2>       
                                <p class="p-16 p-400 text-white pt-1">
                                    <span class="p-700">SILO</span> é uma <span class="p-700">Indústria Brasileira</span> que oferece uma ampla linha de lentes, lanternas e acessórios para Automóveis de Passeio, Ônibus Urbano e Rodoviário.
                                </p>             
                                <button class="btn mt-1 btn-primary rounded-0 p-16 p-400 text-white">
                                    Nossa história
                                </button>  
                            </div>          
                        </div>
                        <div class="col-lg-6">
                            <div class="historia-swiper swiper">
                                <div class="swiper-wrapper">
                                    @foreach (range(0,2) as $item)
                                        <div class="swiper-slide ratio ratio-16x9">
                                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/historia.png") }}" alt="">                               
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev w-51 h-51 border border-white rounded-circle bg-rgb">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.999998L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="white"/>
                                    </svg>                                    
                                </div>
                                <div class="swiper-button-next w-51 h-51 border border-white rounded-circle bg-rgb">
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
        <section class="historia py-lg-4 py-3 bg-cinza position-relative">
            <div class="container ">
                <div class="row g-0">
                    <h2 class="title mb-2 h2-40 p-400 text-dark w-100 text-center">
                        <svg class="me-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                        </svg>                        
                        {{__('Produtos Destaques')}}
                        <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                        </svg>                        
                    </h2>
                    <div class="produtos-swiper swiper mb-4 mb-lg-2">
                        <div class="swiper-wrapper">
                            @foreach (range(0,3) as $item)
                                <a class="swiper-slide ratio ratio-1x1 bg-white p-2 position-relative overflow-hidden a-produtos">
                                    <img class="object-fit-cover w-100 h-100 produtos-hover" src="{{ asset("front/images/backgrounds/produto.png") }}" alt="">                               
                                    <div class="d-flex bottom-0 start-0 pb-2 ratio-unstyled-all">
                                        <p class="flex-column p-16 p-400 m-0 text-dark">
                                            <span class="p-700">001</span><br>
                                            Linha Caminhões
                                        </p>
                                    </div> 
                                    <div class="d-flex bottom-0 end-0 p-2 ratio-unstyled-all">
                                        <button class="ms-auto btn btn-outline-primary rounded-0 text-dark">Led 3</button>
                                    </div> 
                                </a>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev w-51 h-51 top-50 border border-white rounded-circle bg-rgb d-none d-lg-flex">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.999998L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="white"/>
                            </svg>                                    
                        </div>
                        <div class="swiper-button-next w-51 h-51 top-50 border border-white rounded-circle bg-rgb d-none d-lg-flex">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="white"/>
                            </svg>                                                               
                        </div>
                        <div class="swiper-pagination swiper-pagination-position d-lg-none mt-3"></div>
                    </div>
                    <div class="w-100 text-center">
                        <button class="mt-2 mt-lg-1 btn btn-primary p-400 p-16 text-white rounded-0">Veja mais produtos</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
