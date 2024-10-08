@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="2xl:translate-y-0 translate-y-1/4 2xl:mt-10 mt-0">
        <div class="px-3 py-8 2xl:w-1/2 w-1/3 m-auto bg-on-surface-color rounded-lg">
            <div class="text-center flex flex-col gap-2">
                <h1 class="text-text-color">Welkom!</h1>
                <p>Vul onderstaande velden in om een account te maken</p>
            </div>
            <form class="w-1/2 m-auto mt-8 flex flex-col gap-4" action="{{ route('register-user') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" id="email" name="email"
                       class="text-text-color rounded-md p-2 bg-primary-color w-full" placeholder="you@example.com">
                <input type="password" id="password" name="password"
                       class="text-text-color rounded-md p-2 bg-primary-color w-full" placeholder="Minimaal 8 tekens">
                <input type="password" id="password-repeat" name="password-repeat"
                       class="text-text-color rounded-md p-2 bg-primary-color w-full"
                       placeholder="Herhaal je wachtwoord">
                <x-button>Registreren</x-button>
            </form>
            <p class="text-[12px] mt-8 text-center">Heb je al een account? <a href="/login"
                                                                              class="text-secondary-color">Login</a></p>
        </div>
    </div>
@endsection
