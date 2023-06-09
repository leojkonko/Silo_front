@if (session()->has('recover-status-success'))
<div class="alert alert-success">
    {{ session('recover-status-success') }}
</div>
@endif

<div class="mb-3">

    <label class="form-label">
        {{__('Usuário')}}
    </label>

    {!!  \Orchid\Screen\Fields\Input::make('username')
        ->type('text')
        ->required()
        ->tabindex(1)
        ->autofocus()
        ->autocomplete('username')
        ->inputmode('text')
        ->placeholder(__('Digite seu usuário'))
    !!}
</div>

<div class="mb-3">
    <label class="form-label w-100">
        {{__('Password')}}
    </label>

    {!!  \Orchid\Screen\Fields\Password::make('password')
        ->required()
        ->autocomplete('current-password')
        ->tabindex(2)
        ->placeholder(__('Enter your password'))
    !!}
</div>

<div class="row align-items-center">
    <div class="col-md-6 col-xs-12">
        <label class="form-check">
            <input type="hidden" name="remember">
            <input type="checkbox" name="remember" value="true"
                   class="form-check-input" {{ !old('remember') || old('remember') === 'true'  ? 'checked' : '' }}>
            <span class="form-check-label"> {{__('Remember Me')}}</span>
        </label>
    </div>
    <div class="col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block" tabindex="3">
            <x-orchid-icon path="login" class="small me-2"/>
            {{__('Login')}}
        </button>
    </div>
</div>

<div class="row align-items-center">
    <div class="col-md-12 col-xs-12 pt-2">
        <a href="{{ route('platform.password.send-recovery') }}">
            Esqueceu sua senha?
        </a>
    </div>
</div>