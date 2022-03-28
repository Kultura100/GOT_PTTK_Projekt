<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/szlak.js') }}"></script>
    </x-slot>
    <div class="container">
        <h2>Grupy</h2>
        <h2><small>Grupy górskie</small></h2>
        <ul class="responsive-table">
          
        <li class="table-header">
            <div class="col col-t">TATRY I PODTATRZE</div>
       </li>
          <li class="table-row">
            <div class="col col-1">Tatry Wysokie</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>   
            <li class="table-row">
            <div class="col col-1">Tatry Zachodnie</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>   
            <li class="table-row">
            <div class="col col-1">Podtatrze</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>

         <!-- <li class="table-header">
            <div class="col col-t">TATRY SŁOWACKIE</div>
       </li>
          <li class="table-row">
            <div class="col col-1">Zapadane Tatry - (Tatry Zachodnie - Słowacja) </div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>   
            <li class="table-row">
            <div class="col col-1">Vysoke Tatry - (Tatry Wysokie - Słowacja)</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>   
            <li class="table-row">
            <div class="col col-1">Belanske Tatry - (Tatry Bielskie - Słowacja)</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>
        <li class="table-row">
            <div class="col col-1">Tatry Słowackie - szlaki z przewodnikiem</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>
        <li class="table-row">
            <div class="col col-1">Niske Tatry - (Niskie Tatry - Słowacja)</div>
            <div><a><button class="button-1" role="button">Szczegóły</button></a>
            </div>
        </li>  -->


              
        </ul>
      </div>
</x-app-layout>