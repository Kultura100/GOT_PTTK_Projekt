<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/raport.js') }}"></script>
        <script>
        function zmien() {
            var element = document.getElementById("historia");
        if (document.getElementById('flexCheckDefault').checked) {      
            element.classList.toggle("d-none");
        } else    element.classList.toggle("d-none");
    }
        </script>
    
    <div class="container">
        <x-toasts />
        <h1 style="float:none;">{{ __('translations.wycieczki.title') }}</h1> 
        <div class="d-flex flex-row-reverse mb-4 justify-center">
            <a href="{{ route('wycieczki.create') }}" type="button" class="btn btn-light" role="button">
                {{ __('translations.wycieczki.label.create') }}
            </a>
            <div class="form-check pt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="zmien()">
                <label class="form-check-label" for="flexCheckDefault">
                  Pokaz odbyte
                </label>
              </div>
        </div>
    </div>

    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1"><strong>Nazwa</strong></div>
            <div class="col col-2"><strong>Data początku</strong></div>
            <div class="col col-3"><strong>Data końca</strong></div>
            <div class="col col-4"><strong>Pasmo</strong></div>
            <div class="col col-5"><strong>Ilość punktów</strong></div>
            <div class="col col-6"><strong>Operacje</strong></div>
        </li>
      
        @foreach ($wycieczki as $wycieczka)
        {{-- @dd($wycieczka->wieleodcinkow->first()->wycieczka_odcinek2->pasmo->nazwa) --}}
            <li class="table-row">
                <div class="col col-1">
                    <!-- Nazwa wycieczki -->{{ $wycieczka->nazwa }}
                </div>
                <div class="col col-2">
                    <!-- data poczatku wycieczki -->{{ $wycieczka->dataod }}
                </div>
                <div class="col col-3">
                    <!-- data konca wycieczki -->{{ $wycieczka->datado }}
                </div>
                <div class="col col-4">
                    <!-- nazwa pasma -->@if(null !== $wycieczka->wieleodcinkow->first()) {{$wycieczka->wieleodcinkow->first()->wycieczka_odcinek2->pasmo->nazwa }}@endif
                </div>
                <div class="col col-5">
                    <!-- ilosc zebranych punktow -->{{ $wycieczka->punkty }}
                </div>

                <div class="col col-6">
                @if(null !== $wycieczka->wieleodcinkow->first())
                    <a href="{{ route('wycieczki.szczegoly', ['id' => $wycieczka->id]) }}">
                        <x-button class="hover:bg-green-700">
                            Szczegóły
                        </x-button>
                    </a>
                @endif
                @if(null !== $wycieczka->wieleodcinkow->first())
                <a href="{{ route('wycieczki.zapisz', ['id' => $wycieczka->id]) }}">
                    <x-button class="hover:bg-green-700">
                        Zapisz się
                    </x-button>
                </a>
                @endif
                </div>
            </li>
        @endforeach
    </ul>


    {{-- Historia wycieczek --}}
<div id="historia" class="d-none">
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col justify-center align-middle"><strong>Odbyte</strong></div>
            <div class="col"></div>
            <div class="col"></div>
        </li>
      
        @foreach ($wycieczkiodbyte as $wycieczka)
        {{-- @dd($wycieczka->wieleodcinkow->first()->wycieczka_odcinek2->pasmo->nazwa) --}}
            <li class="table-row">
             <div class="col col-1">
                    <!-- Nazwa wycieczki -->{{ $wycieczka->nazwa }}
                </div>
                <div class="col col-2">
                    <!-- data poczatku wycieczki -->{{ $wycieczka->dataod }}
                </div>
                <div class="col col-3">
                    <!-- data konca wycieczki -->{{ $wycieczka->datado }}
                </div>
                <div class="col col-4">
                    <!-- nazwa pasma -->@if(null !== $wycieczka->wieleodcinkow->first()) {{$wycieczka->wieleodcinkow->first()->wycieczka_odcinek2->pasmo->nazwa }}@endif
                </div>
                <div class="col col-5">
                    <!-- ilosc zebranych punktow -->{{ $wycieczka->punkty }}
                </div>

                <div class="col col-6">
                  @if(null !== $wycieczka->wieleodcinkow->first())
                    <a href="{{ route('wycieczki.szczegoly', ['id' => $wycieczka->id]) }}">
                        <x-button class="hover:bg-green-700">
                            Szczegóły
                        </x-button>
                    </a>
                    @endif
                </div>
            </li>
        @endforeach

    </ul>
    </div>  
    
    </div>
    
</x-app-layout>
