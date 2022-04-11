<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/raport.js') }}"></script>
    </x-slot>
    <div class="container">
      <h1>{{ __('translations.wycieczki.title') }}</h1>
      <div class="d-flex flex-row-reverse mb-4">
        <a href="{{ route('wycieczki.index') }}"
            type="button"
            class="btn btn-light"
            role="button">
          {{ __('translations.wycieczki.label.back') }}
          </a>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
          @endif
      </div>
      <div id="no-more-tables">
        <div class="container">            
            <h2><small>Szczegóły wycieczki:</small></h2>
            <table class="table">
              <thead>
                  <tr>
                      <th scope='col'>Imie i nazwisko twórcy</th>                      
                      <th scope='col'>Punkt początkowy</th>
                      <th scope='col'>Odcinek otwarty</th>
                      <th scope='col'>Odcinek zamknięty</th>
                      <th scope='col'>Punkt końcowy</th>
                  </tr>     
              </thead>   
                  <tbody>
                      <tr>        
                          {{-- @dd($wycieczki->uzytkownikWycieczka);                   --}}
                          {{-- <th scope='row'>{{ $wycieczki->uzytkownikWycieczka->imie}} {{ $wycieczki->uzytkownikWycieczka->nazwisko}}</th> --}}
                          <th scope='row'>{{ $wycieczki->wieleodcinkow->wycieczka_odcinek2->punktpocz->nazwa}}</th>
                          <th scope='row'>
                            @foreach($wycieczki->wieleodcinkow as $odcineczek)
                                @foreach($odcineczek as $odcinek)
                                    @if($odcinek->otwarty == 1)
                                        {{ $odcinek->punktpocz->nazwa }} {{ $odcinek->punktkoncz->nazwa}}
                                    @endif
                                @endforeach
                            @endforeach
                        </th>
                        <th scope='row'>
                            @foreach($wycieczki->wieleodcinkow as $odcineczek)
                                @foreach($odcineczek as $odcinek)
                                    @if($odcinek->otwarty == 0)
                                        {{ $odcinek->punktpocz->nazwa }} {{ $odcinek->punktkoncz->nazwa}}
                                    @endif
                                @endforeach
                            @endforeach
                        </th>                          
                          <th scope='row'>{{ $wycieczki->wieleodcinkow->wycieczka_odcinek2->punktkoncz->nazwa}}</th>
                          </tbody>                              
              
            
              @foreach($wycieczki as $wycieczka)
              @foreach($wycieczka->wieleodcinkow as $wycieczkaa)
              <li class="table-row">
                <div class="col col-1"><!-- data poczatku wycieczki -->{{$wycieczka->dataod}}</div>
                <div class="col col-2"><!-- data konca wycieczki -->{{$wycieczka->datado}}</div>
                <div class="col col-3"><!-- nazwa pasma -->{{$wycieczkaa->wycieczka_odcinek2->pasmo->nazwa}}</div>
                <div class="col col-4"><!-- ilosc zebranych punktow -->{{$wycieczka->punkty}}</div>
                <div class="col col-5 m-1"><!-- status wycieczki -->{{$wycieczkaa->status->nazwa}}</div>
                <div class="col col-6">
                    <a><button class="button-1 m-2" role="button">Szczegóły</button></a>
                </div>
              </li>
              @endforeach
              @endforeach
            </ul>
          </div>
      </div>      
    </div>
</x-app-layout>