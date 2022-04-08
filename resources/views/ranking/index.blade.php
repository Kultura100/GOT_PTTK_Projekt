<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ranking.css') }}">
    </x-slot>
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/ranking.js') }}"></script>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                        <h2 class="h3">Ranking</h2>
                    </div>
                    <div class="card-body no-padding">
                        {{-- poczatek --}}
                        @foreach ($kwerenda as $miejsca)
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                        alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text">
                                    <i class="fas fa-trophy"
                                        @if ($loop->iteration == 1) style="color:#ffbb00" @elseif ($loop->iteration == 2) style="color:#9c9c9c" @elseif($loop->iteration == 3) style="color:#b88700" @endif>
                                        {{ $loop->iteration }}</i>
                                    <h3 class="h5">
                                        {{ $imie = $uzytkownicy->where('id', key($kwerenda))->first()->imie }}
                                        {{ $nazwisko = $uzytkownicy->where('id', key($kwerenda))->first()->nazwisko }}
                                    </h3>
                                    <small>Ilosc odznak: {{ $miejsca }}</small>
                                    <input type="hidden" value="{{ $miejsca }}" name="wynik">
                                    <input type="hidden" value="{{ $imie }} {{ $nazwisko }}"
                                        name="imieinazwisko">
                                </div>
                            </div>
                            {{-- koniec --}}
                            @php
                                next($kwerenda);
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                        <h2 class="h3">Wykres</h2>
                    </div>
                    <div class="card-body no-padding" id="contenernawykres">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
