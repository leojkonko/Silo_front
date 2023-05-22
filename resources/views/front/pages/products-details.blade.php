@extends('front.layout.app')

@section('content')
    <main id="produto" class="bg-cinza pb-lg-4 pb-2">
        <section class="bg-cinza py-lg-3 py-2">
            <div class="container">
                <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between">
                    <ol class="breadcrumb d-flex align-items-center">
                        <li class="breadcrumb-item text-dark p-14 p-400 active" aria-current="">Home</li>
                        <li class="breadcrumb-item">
                            <a class="p-14 p-400 text-dark text-decoration-none mb-1" href="">Produtos</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="p-14 p-400 text-dark text-decoration-none mb-1" href="">001</a>
                        </li>
                        
                        
                    </ol>
                </nav>
            </div>
        </section>
        <section class="produto-detalhe position-relative">
            <div class="container">
                <div class="row ">
                    <div class="m-auto d-flex">
                        <div class="swiper produtos-detalhe-swiper col-12">
                            <div class="swiper-wrapper pb-4 pb-lg-0">
                                @foreach (range(0,5) as $relatedProduct)
                                    <div class="swiper-slide">
                                        <div class="swiper-slide h-100">
                                            <div class="ratio ratio-16x9">
                                                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/detalhe.png") }}" alt="">  
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next border border-primary w-51 h-51 end-5 top-40 rounded-circle d-none d-lg-flex">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="#277CEA"/>
                                </svg>                                    
                            </div>
                            <div class="swiper-button-prev border border-primary w-51 h-51 start-5 top-40 rounded-circle d-none d-lg-flex">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="#277CEA"/>
                                </svg>                                    
                            </div>
                            <div class="swiper-pagination d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="py-2 pe-lg-4">
                            <div class="d-flex justify-content-start titulo">
                                <h2 class="h2-40 p-400">Produto 001</h2>
                                <button class="btn-padding ms-1 btn btn-outline-primary rounded-0 text-dark p-14">Led 3</button>
                            </div>
                            <div class="p p-text pt-1">
                                <p><span>Descrição:</span>
                                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a 
                                    ser o texto padrão usado por estas indústrias desde o ano de 1500.    
                                </p>
                            </div>
                            <div class="pt-1">
                                <button class="btn btn-primary rounded-0 text-white p-14">TENHO INTERESSE</button>
                                <button class="btn btn-outline-primary rounded-0 text-dark p-14">VER NO CATÁLOGO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="border border-dark p-2 mt-lg-2">
                            <h2 class="p-16 p-700 m-0">Especificações técnicas</h2>
                            <p class="p-16 p-400 m-0">Gol encaixe Cibié 1995 até 2000</p>
                            <div class="pt-1">
                                <p class="m-0 p-16 p-700">Lado:
                                    <span class="p-400">LE</span>
                                </p>
                                <p class="m-0 p-16 p-700">Cor:
                                    <span class="p-400">FU</span>
                                </p>
                                <p class="m-0 p-16 p-700">Peso (g):
                                    <span class="p-400">228</span>
                                </p>
                                <p class="m-0 p-16 p-700">Un. :
                                    <span class="p-400">Pç</span>
                                </p>
                            </div>
                        </div>
                        <div class="border-custom border-dark p-2">
                            <p class="p-14 p-400">
                                * AM= âmbar / AZ= azul / BR= branco / CR= cristal / CZ= cinza / FU= fumê / PR= preto / VE= verde / VM= vermelho. 
                                <span class="p-700">Consulte nossos vendedores para saber o preço líquido do produto.</span>
                            </p>
                        </div>

                        {{--<livewire:form-interest-product :product_id="$product->id" />--}}
                    </div>
                </div>
            </div>
        </section>
            <section class="relacionados mt-2 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start titulo">
                            <h2 class="title mt-2 h2-40 p-400 text-dark w-100 text-center">
                                <svg class="me-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                                </svg>                        
                                {{__('Produtos Relacionados')}}
                                <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                                </svg>                        
                            </h2>
                        </div>
                        <div class="swiper relacionados-swiper mt-2 col-11">
                            <div class="swiper-wrapper pb-2 pb-lg-0">
                                @foreach (range(0,5) as $relatedProduct)
                                    <div class="swiper-slide">
                                        <div class="slide-img">
                                            <div class=" cards-conteudo">
                                                <div class="d-flex flex-column">
                                                    <a class="ratio ratio-1x1 bg-white p-1 position-relative overflow-hidden a-produtos">
                                                        <img class="object-fit-cover w-100 h-100 produtos-hover" src="{{ asset("front/images/backgrounds/produto.png") }}" alt="">                               
                                                        <div class="d-flex bottom-0 start-0 pb-1 ratio-unstyled-all">
                                                            <button class="btn-padding ms-auto btn btn-outline-primary rounded-0 text-dark p-14">Led 3</button>
                                                        </div> 
                                                    </a>
                                                    <div class="d-flex bottom-0 start-0 pt-1 pb-2 ratio-unstyled-all px-1">
                                                        <p class="flex-column p-16 p-400 m-0 text-dark">
                                                            <span class="p-700">001</span><br>
                                                            Linha Caminhões
                                                        </p>
                                                        <div class="d-flex bottom-0 end-0 ratio-unstyled-all justify-content-end align-items-center ms-auto">
                                                            <button class="btn-padding ms-auto btn btn-outline-primary rounded-0 text-dark h-fit-content">
                                                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="#277CEA"/>
                                                                </svg>
                                                            </button>
                                                        </div> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next border border-primary w-51 h-51 end-5  rounded-circle d-none d-lg-flex">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 21L20 11M20 11L10 0.999999M20 11L7.41552e-07 11" stroke="#277CEA"/>
                                </svg>                                    
                            </div>
                            <div class="swiper-button-prev border border-primary w-51 h-51 start-5  rounded-circle d-none d-lg-flex">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L0.999998 11M0.999998 11L11 21M0.999998 11L21 11" stroke="#277CEA"/>
                                </svg>                                    
                            </div>
                            <div class="swiper-pagination d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@endsection
