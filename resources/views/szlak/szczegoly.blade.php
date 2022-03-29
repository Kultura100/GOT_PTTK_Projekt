<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/szlak.js') }}"></script>
    </x-slot>

<style> 
    
    .list-group-item.active {
      z-index: 2;
      color: #fff;
      background-color: #3490dc;
      border-color: #3490dc;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    .list-group-item {
    position: relative;
    display: block;
    padding: 0.5rem 1rem;
    color: #212529;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
    text-align: center;
    font-size: 15px;

    }
</style>

    <div class="container">
        <!-- <h2>Grupy</h2> -->
        <!-- <h2><small>Grupy górskie</small></h2> -->

        @dd($listapunktow);
      @foreach($listapunktow as $punkty)
     
        @foreach($punkty->podpunkty as $punktinfo)
        
        @endforeach
      @endforeach
  <ul class="list-group">
    {{-- dokonczyc zrobic zeby się wyswietlalo --}}
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>


        </ul>
      </div>
</x-app-layout>