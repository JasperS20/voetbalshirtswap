<header class="bg-on-surface-color w-full py-6">
    <nav class="w-4/5 mx-auto flex flex-row justify-between text-text-color items-center">
        <ul>
            <li><a href="/">Logo</a></li>
        </ul>
        <ul class="flex flex-row gap-8 items-center">
            <li><a href="/de-werkwijze">De Werkwijze</a></li>
            <li><a href="/over-ons">Over Ons</a></li>
            <li><a href="/contact">Contact</a></li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li><a href="/mijn-account">Mijn Account</a></li>
                <form action="{{ route('logout') }}" method="POST" class="m-auto">
                    {{ csrf_field() }}
                    <x-button>Uitloggen</x-button>
                </form>
            @else
                <x-button href="/login">Login</x-button>
            @endif
        </ul>
    </nav>
</header>
