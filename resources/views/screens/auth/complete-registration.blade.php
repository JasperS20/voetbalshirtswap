@extends('layout.app')
@section('title', 'Maak je registratie compleet')

@section('content')
    <div class="mt-10">
        <div class="px-3 py-8 w-4/5 m-auto bg-on-surface-color rounded-lg">
            <div class="text-center flex flex-col gap-2">
                <h1 class="text-text-color">Je bent bijna klaar!</h1>
                <p>Vul onderstaande velden in om je registratie compleet te maken</p>
            </div>
            <form class="w-4/5 m-auto mt-8 flex flex-col gap-4" method="POST">
                {{ csrf_field() }}
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col gap-4 w-full">
                        <div class="flex flex-row gap-2 w-full">
                            <div class="w-full">
                                <label for="surname">Voornaam *</label>
                                <input type="text" id="surname" name="surname" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                            <div class="w-full">
                                <label for="middlename">Tussenvoegsel</label>
                                <input type="text" id="middlename" name="middlename" class="text-text-color rounded-md p-2 bg-primary-color w-full">
                            </div>
                            <div class="w-full">
                                <label for="lastname">Achternaam *</label>
                                <input type="text" id="lastname" name="lastname" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="text-text-color rounded-md p-2 bg-primary-color w-full" value="jasper.samson@kpnmail.nl" readonly>
                            </div>
                            <div>
                                <label for="password">Wachtwoord</label>
                                <input type="password" id="password" name="password" class="text-text-color rounded-md p-2 bg-primary-color w-full" value="test1234" readonly>
                            </div>
                        </div>
                        <div class="flex flex-row gap-2">
                            <div class="w-full">
                                <label for="streetname">Straatnaam *</label>
                                <input type="text" id="streetname" name="streetname" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                            <div class="w-full">
                                <label for="housenumber">Huisnummer *</label>
                                <input type="number" id="housenumber" name="housenumber" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                            <div class="w-full">
                                <label for="zip_code">Postcode *</label>
                                <input type="text" id="zip_code" name="zip_code" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="city">Plaats *</label>
                                <input type="password" id="city" name="city" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                            <div>
                                <label for="region">Regio *</label>
                                <input type="email" id="region" name="region" class="text-text-color rounded-md p-2 bg-primary-color w-full" required>
                            </div>
                        </div>
                    </div>
                </div>
                <x-button>Klaar</x-button>
            </form>
        </div>
    </div>
@endsection
