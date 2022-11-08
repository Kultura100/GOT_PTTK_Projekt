<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/szczegoly_wycieczki.css') }}">
        <style>
            #tekst {
                background: cornsilk;
                border: 1px solid black;
                border-radius: 5px;
                padding: 5px;
            }
        </style>
    </x-slot>
    <x-slot name="scripts">
        <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
        <script>
            let items = document.querySelectorAll('.carousel .carousel-item')

            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
        </script>
    </x-slot>
    <div class="container">
        <h1>Szczegóły wycieczki</h1>
        <div class="d-flex flex-row-reverse m-4">
            <a href="{{ route('osiagniecia.index') }}" type="button" class="btn btn-primary" role="button">
                {{ __('translations.wycieczki.label.back') }}
            </a>

            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn btn-info" id="raport">Raport</button>
            </div>
        </div>
        <div class="text-left mt-5 mb-3 d-flex flex-column">
            <div> <strong>Imie i nazwisko:</strong>
                {{ $wycieczkiSzczeg->uzytkownikWycieczka->imie }} {{ $wycieczkiSzczeg->uzytkownikWycieczka->nazwisko }}
            </div>
            <div>
                <strong>Punkt początkowy:</strong>
                @if ($wycieczkiSzczeg->wieleodcinkow->first()->odwrocony == 1)
                    {{ $wycieczkiSzczeg->wieleodcinkow->first()->wycieczka_odcinek2->punktkoncz->nazwa }}
                @else
                    {{ $wycieczkiSzczeg->wieleodcinkow->first()->wycieczka_odcinek2->punktpocz->nazwa }}
                @endif
            </div>
            <div>
                <strong>Punkt końcowy:</strong>
                @if ($wycieczkiSzczeg->wieleodcinkow->last()->odwrocony == 0)
                    {{ $wycieczkiSzczeg->wieleodcinkow->last()->wycieczka_odcinek2->punktkoncz->nazwa }}
                @else
                    {{ $wycieczkiSzczeg->wieleodcinkow->last()->wycieczka_odcinek2->punktpocz->nazwa }}
                @endif
            </div>
        </div>

        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th scope='col'>Odcinek</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Punkty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wycieczkiSzczeg->wieleodcinkow as $odcineczek)
                    <tr>
                        <td>
                            @if ($odcineczek->odwrocony == 1)
                                {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa }} -
                                {{ $odcineczek->wycieczka_odcinek2->punktpocz->nazwa }},
                            @else
                                {{ $odcineczek->wycieczka_odcinek2->punktpocz->nazwa }} -
                                {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa }},
                            @endif
                        </td>
                        <td>
                            @if ($odcineczek->id_status == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green"
                                    class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red"
                                    class="bi bi-exclamation-square" viewBox="0 0 16 16">
                                    <g>
                                        <path
                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                    </g>
                                </svg>
                                <strong>- {{ $odcineczek->status->nazwa }}</strong>
                            @endif
                        </td>
                        <td style="text-align: right;">
                            {{ $odcineczek->liczba_punktow }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>
                    </th>
                    <th id="suma" style="text-align:left;">Suma: </th>
                    <th style="text-align: right;">
                        @php
                            $x = 0;
                            foreach ($wycieczkiSzczeg->wieleodcinkow as $odcineczek) {
                                $x += $odcineczek->liczba_punktow;
                            }
                            echo $x;
                        @endphp
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <h2> Zdjęcia: </h2>
    <div class="container">

        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($wycieczkiZdj as $wycieczkiZdjecia)
                        
                            <div class="carousel-item @if($loop->iteration == 1) active @endif">
                                <div class="col-md-3">
                                    <div class="card" >
                                        <div class="card-img" style="min-height: 100%; min-width: 100%">
                                            <img src="{{ url('/zrodlo_zdjecia') }}/{{ $wycieczkiZdjecia->zrodlo_zdjecia }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 1</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

</x-app-layout>
