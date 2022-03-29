<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/osiagniecia.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/osiagniecia.js') }}"></script>
    </x-slot>
    <div class="container">
        <div class="row">
             <div class="col-lg-10 mx-auto mb-4">
                <div class="section-title text-center ">
                    <h3 class="top-c-sep">Osiągnięcia</h3>
                    <p>Wykaz osiągnieć zdobytych przez użytkownika</p>
                </div>
            </div>
        </div>
        @foreach ($wycieczki as $wycieczka)
        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                    <!-- tutaj zdjęcie -->
                </div>
                <div class="job-content">
                    <h5 class="text-center text-md-left">Wycieczka {{ $wycieczka->id }}</h5>
                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                        <li class="mr-md-4">
                            <i class="zmdi zmdi-pin mr-2"></i>  lokalizacja &nbsp&nbsp&nbsp
                        </li>
                        <li class="mr-md-4">
                            <i class="zmdi zmdi-time mr-2"></i> {{ $wycieczka->dataod }} do {{ $wycieczka->datado }} 
                        </li>&nbsp&nbsp
                        <li class="mr-md-4">
                            <i class="zmdi zmdi-parking mr-2"> </i>  {{ $wycieczka->punkty }}
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-lg-10 mx-auto mb-4">
               <div class="section-title text-center ">
                   <h3 class="top-c-sep">Odznaki</h3>
                   <p>Gablota zdobytych odznak</p>
               </div>
           </div>
       </div>


        @foreach ($odznaka as $odznaki)
        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
        @foreach($odznaki->odznakaturysty_odznaka as $odznaczka)
                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                        <img src="{{ URL::asset($odznaczka->zrodlo) }}" alt="{{$odznaczka->nazwa}}">
                    </div>
                    <div class="job-content">
                        <h5 class="text-center text-md-left">{{ $odznaczka->nazwa }}</h5>
                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                            <li class="mr-md-4">
                                <i class="zmdi mr-2">Wymagane Punkty: {{ $odznaczka->wymaganepunkty }}
                            </li>
                        </ul>
                    </div>
        @endforeach
    </div>
</div>
        @endforeach

    </div>
</x-app-layout>