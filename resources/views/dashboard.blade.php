<style>
    /* * {
    box-sizing: border-box;
} */

    /* body{
  background-image: url('/images/tlo.jpg');
} */

    section {
        display: flex;
    }

    header {
        margin: 0;
        padding: 0;
        height: 50%;
    }

    .carousel-item {
        position: relative;
        height: 200px;
        width: 200px;
        background-position: center;
        background-size: cover;
        z-index: 0;

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
    </x-slot>
    <header class="d-flex justify-content-center py-5 bg-image-full">
        <h1 class="align-middle fs-1 fw-bolder">GOT PPTK</h1>
    </header>
    {{-- <div class="row py-5 my-2">
        <div class="col-sm m-0 p-0">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <img src="{{ URL::asset('/images/szlaki/Czerwony.png') }}" width=30% height=30%
                                alt="logo">
                            <p class="fs-3"><b>SZLAK CZERWONY</b></p>
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
                            <img src="{{ URL::asset('/images/szlaki/Niebieski.png') }}" width=30% height=30%
                                alt="logo">
                            <p class="fs-3"><b>SZLAK NIEBIESKI</b></p>
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
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <img src="{{ URL::asset('/images/szlaki/Zielony.png') }}" width=30% height=30%
                                alt="logo">
                            <p class="fs-3"><b>SZLAK ZIELONY</b></p>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="fs-4">Szlak doprowadzający do ciekawych lub charakterystycznych miejsc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            <img src="{{ URL::asset('/images/szlaki/Zolty.png') }}" width=30% height=30% alt="logo">
                            <p class="fs-3"><b>SZLAK ŻÓŁTY</b></p>
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
                            data-bs-target="#flush-collapseFifth" aria-expanded="false"
                            aria-controls="flush-collapseFifth">
                            <img src="{{ URL::asset('/images/szlaki/Czarny.png') }}" width=30% height=30%
                                alt="logo">
                            <p class="fs-3"><b>SZLAK CZARNY</b></p>
                        </button>
                    </h2>
                    <div id="flush-collapseFifth" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFifth" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="fs-4">Szlak dojściowy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
