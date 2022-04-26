<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/szlak.js') }}"></script>
    </x-slot>
    <div class="container">
        <h2>Grupy górskie</h2>
        <ul class="responsive-table">
            @foreach ($grupy as $grupa)
                <li class="table-header">
                    <div class="col col-t">{{ $grupa->nazwa }}</div>
                </li>
                <h3 style="text-align:center;">Pasma górskie</h3>
                @foreach(App\Models\Grupa::find($grupa->id)->pasma as $pasma)
                <li class="table-row">
                    <div class="col col-1">{{ $pasma->nazwa }}</div>
                    <div>
                        <a href="{{ route('szlak.szczegoly', ['id' => $pasma->id]) }}">
                            <x-button class="hover:bg-green-700">
                                Szczegóły
                            </x-button>
                        </a>
                    </div>
                </li>
                @endforeach
            @endforeach

        </ul>
    </div>
</x-app-layout>
