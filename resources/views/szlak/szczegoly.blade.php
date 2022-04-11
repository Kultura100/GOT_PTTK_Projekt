<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
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
            text-align: left;
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
            text-align: left;
            font-size: 15px;

        }

    </style>

    <div class="container">
        <!-- <h2>Grupy</h2> -->
        <!-- <h2><small>Grupy górskie</small></h2> -->
        <ul class="list-group">
            {{-- dokonczyc zrobic zeby się wyswietlalo --}}
            @if ($punkty->count())
                @foreach ($punkty as $punkt)
                    <li class="list-group-item active">
                    @php
                    if( strpos($punkt->nazwa, '(') !== false){
                        $tablice = explode("(", $punkt->nazwa, strlen($punkt->nazwa));
                        print("<div class='text-left'>$tablice[0]</div> <div class='text-right'>($tablice[1]</div>");
                    } 
                    else{
                        print($punkt->nazwa);
                    }
                    @endphp
                    </li>
                    @foreach (App\Models\Punkt::find($punkt->id)->punktnaliscie as $punkcik)
                        <li class="list-group-item">{{ $punkcik->nazwa }}</li>
                    @endforeach
                @endforeach
            @else
                <ul class="list-group">

                    <li class="list-group-item active"> Brak punktow</li>
                </ul>
            @endif
        </ul>


        </ul>
    </div>
</x-app-layout>
