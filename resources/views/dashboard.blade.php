<style>
    header {
        margin: 0;
        padding: 0;
        height: 50%;
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: transform 0.6s ease-in-out !important;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            transition: none;
        }
    }

    .hero-shadow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: (0, 0, 0, 0.6);
        z-index: -1;
    }

    .container {
        margin-right: 0 !important;
        margin-left: 0 !important;
        padding: 0 !important;
        box-sizing: 0 !important;
        max-width: 100% !important;
    }

</style>

<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/szlak.css') }}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </x-slot>
    @push('scripts')
        <script type="module">
            $(document).ready(function(){
                var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
                var carousel = new bootstrap.Carousel(myCarousel)
            });
        </script>
    @endpush
    <header class="d-flex justify-content-center py-5 bg-image-full">
        <h1 class="align-middle fs-1 fw-bolder">GOT PPTK</h1>
    </header>
    <div class="d-flex mt-2 justify-content-between">
        <div class="accordion accordion-flush w-25" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <img src="{{ URL::asset('/images/szlaki/Czerwony.png') }}" width=30% height=30% alt="logo">
                        <p class="fs-3 mx-2"><b>SZLAK CZERWONY</b></p>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="text-wrap ">
                        <p class="fs-4">To szlak główny, którym najprawdopodobniej wędrówka będzie najciekawsza.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <img src="{{ URL::asset('/images/szlaki/Niebieski.png') }}" width=30% height=30% alt="logo">
                        <p class="fs-3 mx-2"><b>SZLAK NIEBIESKI</b></p>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fs-4">To trasa długodystansowa, ale nie jest to główny szlak.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <img src="{{ URL::asset('/images/szlaki/Zielony.png') }}" width=30% height=30% alt="logo">
                        <p class="fs-3 mx-2"><b>SZLAK ZIELONY</b></p>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fs-4">Szlak doprowadzający do ciekawych lub charakterystycznych miejsc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <img src="{{ URL::asset('/images/szlaki/Zolty.png') }}" width=30% height=30% alt="logo">
                        <p class="fs-3 mx-2"><b>SZLAK ŻÓŁTY</b></p>
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fs-4">Kolor ten oznacza szlaki łącznikowe, czasami oznacza też
                            szlaki dojściowe.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFifth">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFifth" aria-expanded="false" aria-controls="flush-collapseFifth">
                        <img src="{{ URL::asset('/images/szlaki/Czarny.png') }}" width=30% height=30% alt="logo">
                        <p class="fs-3 mx-2"><b>SZLAK CZARNY</b></p>
                    </button>
                </h2>
                <div id="flush-collapseFifth" class="accordion-collapse collapse" aria-labelledby="flush-headingFifth"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fs-4">Szlak dojściowy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center flex-column my-5" style="width: 250px; max-height:500">
            <h2>Odznaki GOT</h2>
            <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($odznaka as $item)
                        @if ($loop->iteration == 1)
                            <div class="carousel-item active">
                                {{-- <img src="{{ $item->zrodlo }}" class=""  alt="...">
                                <hr>
                                <p class="text-center fs-4">{{ $item->nazwa }}</p> --}}
                                <figure class="image-block" style>
                                    <img src="{{ $item->zrodlo }}" style="width: 200px; max-height:280px" alt="" />
                                    <figcaption>
                                        <h3>
                                            {{ $item->nazwa }}
                                        </h3>
                                        <button>
                                            <a href="{{ route('odznaki.index') }}">Szczegóły</a>
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        @else
                            <div class="carousel-item">
                                {{-- <img src="{{ $item->zrodlo }}" class=""  alt="...">
                                <p class="text-center fs-4">{{ $item->nazwa }}</p> --}}
                                <figure class="image-block">
                                    <img src="{{ $item->zrodlo }}" style="width: 200px; max-height:280px" alt="" />
                                    <figcaption>
                                        <h3>
                                            {{ $item->nazwa }}
                                        </h3>
                                        <button>
                                            <a href="{{ route('odznaki.index') }}">Szczegóły</a>
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="d-flex overflow-auto mx-4 mt-2" style="max-width: 500px; max-height:650px;">
            <div class="container">
                <h2>Grupy górskie</h2>
                <ul class="responsive-table">
                    @foreach ($grupy as $grupa)
                        <li class="table-header">
                            <div class="col col-t">{{ $grupa->nazwa }}</div>
                        </li>
                        <h3 style="text-align:center;">Pasma górskie</h3>
                        @foreach (App\Models\Grupa::find($grupa->id)->pasma as $pasma)
                            <li class="table-row">
                                <div class="col col-1">{{ $pasma->nazwa }}</div>
                                <div>
                                    <a href="{{ route('szlak.szczegoly', ['id' => $pasma->id]) }}">
                                        <x-button class="button-1 hover:bg-green-700">
                                            Szczegóły
                                        </x-button>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
