<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/odznaki.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/odznaki.js') }}"></script>
    </x-slot>
    
    <main>
        <section class="py-5 mb-5">

            <div class="container text-center py5">
                <p class="display-3">Odznaki:</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($odznaki as $odznaka)
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

    <footer class="bg-dark text-light">
        <p class="py-5 mb-0 text-center">&copy; Projekt Zespołowy</p>
    </footer>

</x-app-layout>