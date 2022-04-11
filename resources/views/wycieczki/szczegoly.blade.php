<x-app-layout>
<x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/szczegoly_wycieczki.css') }}">
    </x-slot>
    <div class="container">
      <h1>Szczegóły wycieczki</h1>
      <div class="d-flex flex-row-reverse mt-5">
      <a href="{{ route('wycieczki.index') }}"
      type="button"
      class="btn btn-primary"
      role="button">
    {{ __('translations.wycieczki.label.back') }}
    </a>
      </div>
            <table class="table">
              <thead >
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
                          <td>{{ $wycieczki->uzytkownikWycieczka->imie}} {{ $wycieczki->uzytkownikWycieczka->nazwisko}}</td>
                          <td>
                            {{ $wycieczki->wieleodcinkow->first()->wycieczka_odcinek2->punktpocz->nazwa}}
                          </td>
                          <td>
                            @foreach($wycieczki->wieleodcinkow as $odcineczek)
                                    @if($odcineczek->wycieczka_odcinek2->otwarty == true)
                                        {{$odcineczek->wycieczka_odcinek2->punktpocz->nazwa }} - {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa}}, 
                                    @endif
                            @endforeach
                          </td>
                        <td>
                          @foreach($wycieczki->wieleodcinkow as $odcineczek)
                            @if($odcineczek->wycieczka_odcinek2->otwarty == false)
                                {{$odcineczek->wycieczka_odcinek2->punktpocz->nazwa }} - {{ $odcineczek->wycieczka_odcinek2->punktkoncz->nazwa}}
                            @endif
                          @endforeach
                        </td>                          
                          <td>{{  $wycieczki->wieleodcinkow->last()->wycieczka_odcinek2->punktkoncz->nazwa}}</td>
                      </tr>
                  </tbody>
          </table>                              
      </div>
</x-app-layout>