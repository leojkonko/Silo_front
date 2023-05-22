@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
<main id="contato" class="">
    <section class="formulario bg-cinza py-2" style="background-image: url('{{ asset("front/images/backgrounds/contato.png") }}');">

            <div class="container">
                <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between">
                    <ol class="breadcrumb d-flex align-items-center">
                        <li class="breadcrumb-item p-14 p-400 active" aria-current="">Home</li>
                    
                        <li class="breadcrumb-item">
                            <a class="p-14 p-400 text-secondary text-decoration-none mb-1" href="">Contato</a>
                        </li>
                    </ol>
                </nav>
                <h2 class="title h2-40 p-400 text-dark w-100 text-center text-lg-start py-2">                       
                    Entre em contato
                    <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                    </svg>                        
                </h2>

            <div class="col-lg-9">
                <form  class="row gy-1 bg-dark-claro m-0 p-2">
                    @csrf
                    <div class="col-lg-6">
                        <div class="row gx-0 gy-1 gy-lg-0-50">
                            <div class="col-12">
                                <input type="text" placeholder="{{__("Nome")}}*" class="form-control" wire:model.defer="name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" placeholder="{{__("Email")}}*" class="form-control" wire:model.defer="email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" placeholder="{{__("Telefone")}}*" class="form-control mask-telefone" wire:model.defer="phone" required>
                            </div>
                                <div class="col-12">
                                    <select wire:model.defer="city_id" class="form-select" aria-label="Selecione uma cidade" style="background-image: url('{{ asset("front/images/backgrounds/select.svg") }}');">
                                        <option hidden selected>{{__("Cidade")}}*</option>
                                        @foreach (range(0,2) as $city)
                                            <option value="">opção 1</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <textarea id="" Placeholder="{{ __('Mensagem') }}" class="form-control h-100" rows="5" wire:model.defer="message"></textarea>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row align-items-center justify-content-lg-between gap-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" required id="termosCheck">
                            <label class="form-check-label" for="termosCheck">
                                <x-accept-text />
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary text-white rounded-0 p-16 p-400">
                            <span wire:loading.remove>
                                {{ __('Enviar contato') }}
                            </span>
                            <span wire:loading.inline>
                                {{ __("Aguarde") }}...
                            </span>
                        </button>
                    </div>
                    <x-flash-messages />
                </form>
            </div>
            <h2 class="title h2-40 p-400 text-dark w-100 text-center text-lg-start py-2">                       
                Onde estamos
                <svg class="ms-2" width="200" height="3" viewBox="0 0 200 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="200" y="0.5" width="2.00001" height="200" transform="rotate(90 200 0.5)" fill="#277CEA"/>
                </svg>                        
            </h2>
        </div>
    </section>
    <iframe class="mb--1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.705260970629!2d-46.51169002370432!3d-23.579026862243285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6778f8027181%3A0x3343606cd579d95a!2sSilo%20Ind%C3%BAstria%20Com%C3%A9rcio%20Acess%C3%B3rios!5e0!3m2!1spt-BR!2sbr!4v1684609369028!5m2!1spt-BR!2sbr" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <x-contact-iframe-map />
</main>
@endsection
