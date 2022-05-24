<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/raport.js') }}"></script>
    </x-slot>
    <div class="container">
        <h1 style="float:none;">{{ __('Lista zgłoszeń') }}</h1>       
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
        @endif
    </div>
    
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Imię i Nazwisko</div>
            <div class="col col-2">E-mail</div>
            <div class="col col-3">Nazwa wycieczki</div>
            <div class="col col-4"></div>
        </li>

      
        @foreach ($wycieczkiZatw as $wycieczkiZatwierdzone)
            <li class="table-row">
                <div class="col col-1">
                    {{ $wycieczkiZatwierdzone->jakaKsiazeczka->jakiUser->imie }} {{ $wycieczkiZatwierdzone->jakaKsiazeczka->jakiUser->nazwisko}}
                </div>
                <div class="col col-2">
                    {{ $wycieczkiZatwierdzone->jakaKsiazeczka->jakiUser->email }}
                </div>                
                <div class="col col-3">
                    {{ $wycieczkiZatwierdzone->jakaWycieczka->nazwa}}
                </div>
                <div class="col col-4">
                    <a href="{{ route('listaturystow.szczegoly', ['id' => $wycieczkiZatwierdzone->id]) }}">                         
                            <x-button class="hover:bg-green-700">
                                Szczegóły
                            </x-button>
                      </a>
                </div>                
            </li>
        @endforeach
    </ul>
    </div>
</x-app-layout>
