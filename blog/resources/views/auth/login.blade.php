<x-standard title="Login">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container mt-5 w-75 border rounded shadow p-4 border mb-5">
        <div class="row mb-3">
            <div class="col">
                <h3 class="text-center">Login</h3>
            </div>
        </div>
        
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col col-md-3 col-12">
                    <x-forms.input-label class="" for="email" :value="__('Email')" />
                </div>
                <div class="col col-md-9 col-12">
                    <x-forms.text-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" />
                    <x-forms.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col col-md-3 col-12">
                    <x-forms.input-label for="password" :value="__('Senha')" />
                </div>
                <div class="col col-md-3 col-12">
                    <x-forms.text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                    <x-forms.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col col-12">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar') }}</span>
                    </label>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col col-12 col-md-5">
                    <button class="btn btn-pink rounded">Login</button>
                </div>
                <div class="col col-12 col-md-7 mt-3">
                    @if (Route::has('password.request'))
                    <a class="login-link"
                        href="{{ route('password.request') }}">
                        Esqueceu sua senha?
                    </a>
                    @endif
                </div>
                
            </div>
        </form>
    </div>

    {{-- <div class="container w-75 border rounded-0 shadow p-4 mt-3">
        <div class="row">
            <div class="col">
                <h5 class="text-center">Ainda não tem uma conta?</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('register') }}" class="btn botao-lilas w-100 rounded-0 mt-1">Cadastre-se</a>
            </div>
        </div>
    </div> --}}


</x-standard>
