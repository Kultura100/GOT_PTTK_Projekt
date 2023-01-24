<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/obowiazki.css') }}">
    </x-slot>
    <section class="container">
        <div class="d-flex justify-content-center mt-2">
            <h1>Przyznawanie odznak</h1>
        </div>
        {{-- @foreach ($kolekcja->first() as $item) --}}
        @isset($kolekcja->first()->imie)
        <div class="d-flex flex-column">
            <img src="{{ $kolekcja->first()->odznaka->zrodlo }}" class="border mx-auto shadow" style="width: 250px;">
            <h3 class="text-center mt-3 mb-1">{{ $kolekcja->first()->odznaka->nazwa }}</h3>
            <h5 class="text-center mt-1 mb-3">Liczba punktów potrzebnych do zdobycia: {{ $kolekcja->first()->odznaka->wymaganepunkty }}</h5>
            <div class="d-flex flex-row justify-content-center">
                {{-- <a href="#" class="btn btn-danger mx-2 my-auto" style="height: 37px; color:white">Odrzuć</a> --}}
                <div class="card" style="width: 18rem;">
                    <div class="card-body shadow">
                        <h5 class="card-title">{{$kolekcja->first()->imie}} {{$kolekcja->first()->nazwisko}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Obecna liczba punktów: {{$kolekcja->first()->punkty}}</h6>
                        {{-- <p class="card-text">Jakiś opis?  
                        </p> --}}
                    </div>
                </div>
                @if($kolekcja->first()->pobierzOdznaki->count() > 0)
                <a href="{{ route('obowiazki.akceptujodznake', ['iduzytkownika' => $kolekcja->first()->id, 'idodznaki' => $kolekcja->first()->odznaka->id])  }}" class="btn btn-success mx-2 my-auto" style="height: 37px; ">Przyznaj</a>
                @else
                <a href="{{ route('obowiazki.akceptujodznake', ['iduzytkownika' => $kolekcja->first()->id, 'idodznaki' => 1])  }}" class="btn btn-success mx-2 my-auto" style="height: 37px; ">Przyznaj</a>
                @endif
                
            </div>
        </div>
        @else
        Brak wymaganych odznak do przypisania
        @endisset
        {{-- @endforeach --}}
    </section>
</x-app-layout>
