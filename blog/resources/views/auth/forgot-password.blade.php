<x-standard title="Recuperar senha">

    <div class="container mt-5 w-75 border rounded shadow p-4 border mb-5">

        <p class="reset-text">Informe o seu email cadastrado abaixo, que enviaremos um email com um link para você criar uma nova senha.
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <button class="btn btn-card mt-3">Enviar email</button>
        </form>
    </div>
</x-standard>
