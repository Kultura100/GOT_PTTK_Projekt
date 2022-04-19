<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/odznaki.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    <style>
        .rounded{
            border-top: 8px solid #304b5f;
            border-radius: 5px;
        }
        </style>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/odznaki.js') }}"></script>
    </x-slot>
    
    <main>
        <section class="py-5 mb-5">

            <div class="container text-center py5">
                <p class="display-4">Odznaki</p>
                <p class="display-6">W góry</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($odznaki as $odznaka)
                    @if($odznaka->id == 4)<hr class="rounded"> <p class="display-6 text-center">Popularna</p>@endif
                    @if($odznaka->id == 5)<hr class="rounded"> <p class="display-6 text-center">Małe</p>@endif
                    @if($odznaka->id == 8)<hr class="rounded"> <p class="display-6 text-center">Duże</p>@endif
                    @if($odznaka->id == 11)<hr class="rounded"> <p class="display-6 text-center">Wytrwałosci</p>@endif
                    @if($odznaka->id == 12)<hr class="rounded"> <p class="display-6 text-center">Przodownika</p>@endif
                    <div class="col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <img src="{{ $odznaka->zrodlo }}" class="OdznakiImg" alt="{{ $odznaka->nazwa }}">
                            <div class="cart-body">
                                <p class="p-3"><b>{{ $odznaka->nazwa }}</b> <br> {{ intval($odznaka->wymaganepunkty) ? "Wymagane punkty: ".$odznaka->wymaganepunkty:"Wymagania: ".$odznaka->wymaganepunkty}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-app-layout>