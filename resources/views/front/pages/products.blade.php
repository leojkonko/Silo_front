@extends('front.layout.app')

@section('content')

    <main id="produto" class="bg-cinza pt-2" style=";overflow-x:hidden;">

        <section class="bg-cinza py-2">
            <div class="container">
                <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between">
                    <ol class="breadcrumb d-flex align-items-center">
                        <li class="breadcrumb-item text-dark p-14 p-400 active" aria-current="">Produtos</li>
                        <li class="breadcrumb-item">
                            <a class="p-14 p-400 text-dark text-decoration-none mb-1" href="">Home</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3">
                        <div class="bg-dark-claro p-lg-2 p-1">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control pesquisa" placeholder="Busque por produtos" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="button-unstyled2" id="basic-addon2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4357 12.4357L19 19M14.4008 7.70039C14.4008 11.4009 11.4009 14.4008 7.70039 14.4008C3.99987 14.4008 1 11.4009 1 7.70039C1 3.99987 3.99987 1 7.70039 1C11.4009 1 14.4008 3.99987 14.4008 7.70039Z" stroke="white" stroke-miterlimit="10"/>
                                    </svg>                
                                </button>
                            </div>
                              
                            <form action="">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button p-16 p-700 text-dark-claro" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Linhas
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled mb-0 p-0 d-flex flex-column gap-0-50 px-0-50 py-1">
                                                @foreach (range(0,2) as $hehe)
                                                <li class="">
                                                    <div class="d-flex align-items-center gap-0-50 justify-content-between">
                                                        {{-- Verificar se foi criado recentemente, caso for, adicionar a tag small abaixo --}}
                                                        <div class="d-flex align-items-center gap-0-50">
                                                                <p class="p-14 p-400 text-white">Item</p>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="opcao{{$hehe}}" name="opcoes" class="input-radio">
                                                            <label for="opcao{{$hehe}}" class="radio-label mb-2"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button p-16 p-700 text-dark-claro" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Marcas
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse show mt-2" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled mb-0 p-0 d-flex flex-column gap-0-50 px-0-50 py-1">
                                                @foreach (range(0,2) as $hehe)
                                                <li class="">
                                                    <div class="d-flex align-items-center gap-0-50 justify-content-between">
                                                        {{-- Verificar se foi criado recentemente, caso for, adicionar a tag small abaixo --}}
                                                        <div class="d-flex align-items-center gap-0-50">
                                                                <p class="p-14 p-400 text-white">Item</p>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="opcao2{{$hehe}}" name="opcoes" class="input-radio">
                                                            <label for="opcao2{{$hehe}}" class="radio-label mb-2"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-12">
                       <div class="ps-lg-4">
                            <div class="d-flex">
                                <h2 class="title h2-40 p-400 text-dark w-100 text-center text-lg-start py-2">                       
                                    Produtos
                                    <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                                    </svg>                        
                                </h2>
                                <div class="d-flex w-100 align-items-center justify-content-end gap-1">
                                    filtrado por:
                                    <button class="h-fit-content btn btn-light rounded-0">Linha leve
                                        <svg class="ms-0-50" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L11 11M11 1L1 11" stroke="#505050"/>
                                        </svg>                                            
                                    </button>
                                    <button class="h-fit-content btn btn-light rounded-0">Linha leve
                                        <svg class="ms-0-50" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L11 11M11 1L1 11" stroke="#505050"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                @foreach (range(0,6) as $i)
                                    <div class="col-lg-4 d-flex flex-column col-6">
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
                                @endforeach
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        {{--<x-catalog-card tipo="produtos" />

        <section class="busca">
            <div class="container">
                <form method="GET" action="{{ route_lang('products') }}">
                    <div class="row">
                        <div class="div-button2">
                            <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre sua
                                Busca
                            </button>
                        </div>
                        <div class="col-12 d-flex alinhamento">
                            <div class="div-input">
                                <input type="text" name="busca" id="" placeholder="Busque por código">
                                <button type="submit">
                                    <img src="{{ url('/site/dist/images/icones/lupa-produtos.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="div-button">
                                <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre
                                    sua
                                    Busca
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>--}}

        {{--<section class="cards">
            <div class="container">
                @if ($products->count())
                    <div class="page active" id="page-1">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-2 cards-conteudo">
                                    <x-product-card :product="$product" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="container pb-4 mb-4" style="margin-left:5%">
                        <p>
                            Nenhum produto encontrado.
                        </p>
                    </div>
                @endif

                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$products" />
                    </div>
                </div>
            </div>
        </section>--}}
        <!-- Modal -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros:</h5>
                <div class="d-flex">
                    <button type="button" class="btn-close text-reset button-cor" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
                </div>
            </div>
            <div class="offcanvas-body">
                @foreach ($categories->get() as $category)
                    <div class="col-12 d-flex justify-content-center py-1">
                        <a href="{{ route_lang('products.category', [$category->slug]) }}" class="btn btn-custom btn-categorias">{{ $category->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--modal -->
        <nav aria-label="Page navigation example">
    </main>
@endsection
