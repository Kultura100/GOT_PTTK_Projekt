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
            $('#raport').click(function() {
                printJS('tabela', 'html');
            });
        </script>
    </x-slot>
    <div class="container">
        <h1>Szczegóły wycieczki</h1>
        <div class="d-flex flex-row-reverse m-4">
            <a href="{{ route('wycieczki.index') }}" type="button" class="btn btn-primary" role="button">
                {{ __('translations.wycieczki.label.back') }}
            </a>

            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn btn-info" id="raport">Raport</button>
            </div>
        </div>
        <div class="text-left mt-5 mb-3 d-flex flex-column">
            <div> <strong>Imie i nazwisko:</strong> {{ $wycieczkiSzczeg->uzytkownikWycieczka->imie }}
                {{ $wycieczkiSzczeg->uzytkownikWycieczka->nazwisko }}</div>
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
        <form method="POST" action="{{ route('osiagniecia.potwierdzenie') }}">
            @csrf
            <table class="table" id="tabela">
                <thead>
                    <tr>
                        <th scope='col'>Odcinek</th>
                        <th scope='col'>Status</th>
                        <th scope='col'>Punkty</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="id" value="{{ $wycieczkiSzczeg->id }}">
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
                                    <div class="form-check m-1">
                                        <input class="form-check-input" name="postep[]" type="checkbox"
                                            value="{{ $odcineczek->id_odcinek }}">
                                        <label class="form-check-label">
                                            Zmień postęp ukończenia odcinka
                                        </label>
                                    </div>
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
            <x-button class="m-2" style="float:right">Zapisz postępy</x-button>
        </form>
        <div class="input-group">
            <form method="POST" action="{{ route('osiagniecia.dodajzdjecie') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_wycieczka" value="{{ $wycieczkiSzczeg->id }}">
                <input type="hidden" name="id_tworcy" value="{{ $wycieczkiSzczeg->id_tworcy }}">
                <input type="file" class="form-control" name="zrodlo_zdjecia">
                <button class="btn btn-primary float-left mt-2 mb-2" type="submit">Prześlij</button>
            </form>
        </div>

        <div class="row">
            @foreach ($wycieczkiZdj as $zdjecie)
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ url('/zrodlo_zdjecia') }}/{{ $zdjecie->zrodlo_zdjecia }}" class="img-fluid" alt="{{$zdjecie->zrodlo_zdjecia}}">
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
