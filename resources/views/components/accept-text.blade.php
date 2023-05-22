@inject('site', 'App\\Services\\SiteService')

@if ($site->hasPrivacy())
    <p class="p-14 p-400 text-white">Li e aceito a <a class="p-600 text-decoration-underline" href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}</p>
@else
    <p class="p-14 p-400 text-white">Aceito com a utilização de meus dados pela {{ env('APP_NAME') }}</p>
@endif