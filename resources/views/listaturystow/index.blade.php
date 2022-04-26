<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/raport.js') }}"></script>
    </x-slot>
    <div class="container">
        <h1 style="float:none;">{{ __('Lista Turystów') }}</h1>       
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
        @endif
    </div>
    
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Imię i Nazwisko</div>
            <div class="col col-2">E-mail</div>
            <div class="col col-3">Punkty</div>
            <div class="col col-4"></div>
        </li>

      
        @foreach ($uzytkownicy as $uzytkownik)
            <li class="table-row">
                <div class="col col-1">
                    {{ $uzytkownik->imie }}, {{ $uzytkownik->nazwisko}}
                </div>
                <div class="col col-2">
                    {{ $uzytkownik->email }}
                </div>
                <div class="col col-3">
                    {{ $uzytkownik->punkty}}
                </div>
                <div class="col col-4">
                  <a href="">
                    {{-- {{ route('listaturystow.index', ['id' => $wycieczka->id]) }} --}}
                        <x-button class="hover:bg-green-700">
                            Przyznaj odznake
                        </x-button>
                  </a>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
</x-app-layout>
