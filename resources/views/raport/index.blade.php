<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/raport.js') }}"></script>
    </x-slot>
    <div class="container">
        <h2>Raporty</h2>
        <h2><small>Wykaz raportów utworzonych przez użytkownika</small></h2>


        <table class="table">
          <thead class="table-header">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Data początku</th>
              <th scope="col">Data końca</th>
              <th scope="col">Pasmo</th>
              <th scope="col">Ilość punktów</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th> Przesunięte w czasie do zrealizowania potrzebnych zmian bazy danych w celu zakończenia tego zadania (GP-7)</th>
            </tr>
            {{-- @foreach ($wycieczki as $wycieczka)
            <tr>
              <th scope="row">{{$wycieczka->id}}</th>
              <td><!-- data poczatku wycieczki --> {{$wycieczka->dataod}}</td>
              <td><!-- data konca wycieczki -->{{$wycieczka->datado}}</td>
              <td><!-- nazwa pasma -->{{$pasmo}}</td>
              <td><!-- ilosc zebranych punktow --> {{$wycieczka->punkty}}</td>
              <td><!-- status wycieczki --></td>
              <td> <a><button class="button-1" role="button">Szczegóły</button></a>
              </td>
            </tr>
            @endforeach --}}
          </tbody>
        </table>
      </div>
</x-app-layout>