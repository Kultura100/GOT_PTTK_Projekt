<x-app-layout>
    {{-- <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/raport.js') }}"></script>
    </x-slot> --}}
    <div class="container">
      <h1>Szczegóły wycieczki</h1>
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
            </table>                              
          </div>
</x-app-layout>