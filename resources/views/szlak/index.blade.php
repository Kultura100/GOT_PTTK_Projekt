<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/szlak.js') }}"></script>
    </x-slot>
    <div class="container">
        <h2>Grupy górskie</h2>
        <ul class="responsive-table">
            @foreach($grupy as $grupa)
           
        <li class="table-header">
            <div class="col col-t">{{$grupa->nazwa}}</div>
       </li>
       <h3 style="text-align:center;">Pasma górskie</h3>
            @if($grupa->id == 1)
                @foreach ($pasmo1 as $pasm)
                <li class="table-row">
                    <div class="col col-1">{{$pasm->nazwa}}</div>
                    <div>
                         <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
                            <x-button class="hover:bg-green-700">
                                Szczegoly
                            </x-button>
                        </a> 
                    </div>
                  </li>     
                @endforeach
            @endif
            @if($grupa->id == 2)
            @foreach ($pasmo2 as $pasm)
            <li class="table-row">
                <div class="col col-1">{{$pasm->nazwa}}</div>
                <div>
                    <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
                        <x-button class="hover:bg-green-700">
                            Szczegoly
                        </x-button>
                    </a> 
                </div>
              </li>     
            @endforeach
            @endif
            @if($grupa->id == 3)
            @foreach ($pasmo3 as $pasm)
            <li class="table-row">
                <div class="col col-1">{{$pasm->nazwa}}</div>
                <div>
                    <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
                        <x-button class="hover:bg-green-700">
                            Szczegoly
                        </x-button>
                    </a> 
                </div>
              </li>     
            @endforeach
        @endif
        @if($grupa->id == 4)
        @foreach ($pasmo4 as $pasm)
        <li class="table-row">
            <div class="col col-1">{{$pasm->nazwa}}</div>
            <div>
                <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
                    <x-button class="hover:bg-green-700">
                        Szczegoly
                    </x-button>
                </a> 
            </div>
          </li>     
        @endforeach
    @endif
    @if($grupa->id == 5)
    @foreach ($pasmo5 as $pasm)
    <li class="table-row">
        <div class="col col-1">{{$pasm->nazwa}}</div>
        <div>
            <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
                <x-button class="hover:bg-green-700">
                    Szczegoly
                </x-button>
            </a> 
        </div>
      </li>     
    @endforeach
@endif
@if($grupa->id == 6)
@foreach ($pasmo6 as $pasm)
<li class="table-row">
    <div class="col col-1">{{$pasm->nazwa}}</div>
    <div>
        <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
            <x-button class="hover:bg-green-700">
                Szczegoly
            </x-button>
        </a> 
    </div>
  </li>     
@endforeach
@endif
@if($grupa->id == 7)
@foreach ($pasmo7 as $pasm)
<li class="table-row">
    <div class="col col-1">{{$pasm->nazwa}}</div>
    <div>
        <a href="{{ route('szlak.szczegoly', ['id' => $pasm->id]) }}">
            <x-button class="hover:bg-green-700">
                Szczegoly
            </x-button>
        </a> 
    </div>
  </li>     
@endforeach
@endif
        @endforeach
              
        </ul>
      </div>
</x-app-layout>