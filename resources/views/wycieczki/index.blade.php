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
        <a href=""
        {{-- {{ route('wycieczki.create') }} --}}
            type="button"
            class="btn btn-light"
            role="button">
          {{ __('translations.wycieczki.label.create') }}
          </a>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
          @endif
      </div>
      <div id="no-more-tables">
        <div class="container">            
            <h2><small>Wycieczki dodane:</small></h2>
            <ul class="responsive-table">
              <li class="table-header">
                <div class="col col-1">Data początku</div>
                <div class="col col-2">Data końca</div>
                <div class="col col-3">Pasmo</div>
                <div class="col col-4">Ilość punktów</div>
                <div class="col col-5">Status</div>
                <div class="col col-6"></div>
              </li>
              <li class="table-row">
                <div class="col col-1"><!-- data poczatku wycieczki --></div>
                <div class="col col-2"><!-- data konca wycieczki --></div>
                <div class="col col-3"><!-- nazwa pasma --></div>
                <div class="col col-4"><!-- ilosc zebranych punktow --></div>
                <div class="col col-5"><!-- status wycieczki --></div>
                <div class="col col-6">
                    <a><button class="button-1" role="button">Szczegóły</button></a>
                </div>
              </li>
            </ul>
          </div>
      </div>      
    </div>
</x-app-layout>