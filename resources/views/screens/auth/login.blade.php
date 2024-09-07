@extends('layout.app')
@section('title', 'Login')

@section('content')
    <div class="translate-y-1/4">
        <div class="px-3 py-8 2xl:w-1/3 w-1/2 m-auto bg-on-surface-color rounded-lg">
            <div class="text-center flex flex-col gap-2">
                <h1 class="text-text-color">Welkom terug!</h1>
                <p>Vul onderstaande velden in om in te loggen</p>
            </div>
            <form class="w-1/2 m-auto mt-8 flex flex-col gap-4" action="{{ route('login-user') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" id="email" name="email" class="text-text-color rounded-md p-2 bg-primary-color w-full" placeholder="you@example.com">
                <input type="password" id="password" name="password" class="text-text-color rounded-md p-2 bg-primary-color w-full" placeholder="Minimaal 8 tekens">
                <a href="/register" class="text-secondary-color text-[12px] font-medium text-right">Wachtwoord vergeten?</a>
                <x-button>Login</x-button>
            </form>
            <p class="text-[12px] mt-8 text-center">Heb je nog geen account? <a href="/registreren" class="text-secondary-color">Registreren</a></p>
        </div>
    </div>
@endsection
