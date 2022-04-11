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
                          <th scope='row'>{{ $wycieczki->uzytkownikWycieczka->imie}} {{ $wycieczki->uzytkownikWycieczka->nazwisko}}</th>
                          <th scope='row'>
                            {{-- @foreach($wycieczki->wieleodcinkow as $odcinek)
                              {{$odcinek->wycieczka_odcinek2->punktpocz->nazwa}}
                            @endforeach --}}
                            {{ $wycieczki->wieleodcinkow->first()->wycieczka_odcinek2->punktpocz->nazwa}}
                          </th>
                          <th scope='row'>
                            @foreach($wycieczki->wieleodcinkow as $odcineczek)
                                    @if($odcineczek->wycieczka_odcinek2->otwarty == true)
                                        {{$odcineczek->wycieczka_odcinek2->punktpocz->nazwa }} - {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa}}, 
                                    @endif
                            @endforeach
                        </th>
                        <th scope='row'>
                          @foreach($wycieczki->wieleodcinkow as $odcineczek)
                          @if($odcineczek->wycieczka_odcinek2->otwarty == false)
                              {{$odcineczek->wycieczka_odcinek2->punktpocz->nazwa }} - {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa}}
                          @endif
                  @endforeach
                        </th>                          
                          <th scope='row'>{{  $wycieczki->wieleodcinkow->last()->wycieczka_odcinek2->punktkoncz->nazwa}}</th>
                          </tbody>                              
            </ul>
          </div>
      </div>      
    </div>
</x-app-layout>