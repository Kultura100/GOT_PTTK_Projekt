<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/osiagniecia.css') }}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('js/osiagniecia.js') }}"></script>
        <script>
            $('#search').on('keyup', function() {
                        $value = $(this).val();
                        $.ajax({
                            type: 'get',
                            // url: '{{ URL::to('search') }}',
                            url: '/osiagniecia/search',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'search': $value,},
                            success: function(data) {
                                $('.wycieczkizawartosc').html(data);
                            }
                        });
                    })
        </script>

    </x-slot>
    <div class="col-lg-10 mx-auto mb-4">
        <div class="section-title text-center ">
            <h3 class="top-c-sep">Osiągnięcia</h3>
            <p>Wykaz osiągnieć zdobytych przez użytkownika</p>
        </div>
    </div>
    <div class="row">
        <div class="md-form mt-0">
            <input class="form-control" type="text" id="search" name="search" placeholder="Szukaj wycieczki"
                aria-label="Szukaj wycieczki">
        </div>
        <div class="wycieczkizawartosc row">
            {{-- @dd($ksiazeczki) --}}
            @foreach ($ksiazeczka->ksiazeczkawycieczki as $wycieczka)
                <div class="col-6">
                    <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                <!-- tutaj zdjęcie -->
                            </div>
                            <div class="job-content">
                                <h5 class="text-center text-md-left">{{ $wycieczka->jakawycieczka->nazwa }}</h5>
                                <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-pin mr-2"></i> lokalizacja &nbsp&nbsp&nbsp
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-time mr-2"></i> {{ $wycieczka->jakawycieczka->dataod }} do
                                        {{ $wycieczka->jakawycieczka->datado }}
                                    </li>&nbsp&nbsp
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-parking mr-2"> </i> {{ $wycieczka->jakawycieczka->punkty }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section class="py-5 mb-5">
        <div class="section-title text-center ">
            <h3 class="top-c-sep">Odznaki</h3>
            <p>Gablota zdobytych odznak</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($odznaka as $odznaki)
                    @foreach ($odznaki->odznakaturysty_odznaka as $odznaczka)
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-3">
                                <img src="{{ $odznaczka->zrodlo }}" class="OdznakiImg"
                                    alt="{{ $odznaczka->nazwa }}">
                                <div class="cart-body">
                                    <p class="p-3"><b>{{ $odznaczka->nazwa }}</b> <br>
                                        {{-- {{ intval($odznaczka->wymaganepunkty)? 'Wymagane punkty: ' . $odznaczka->wymaganepunkty: 'Wymagania: ' . $odznaczka->wymaganepunkty }} --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
