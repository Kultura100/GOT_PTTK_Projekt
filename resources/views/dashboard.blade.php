<style>
/* * {
    box-sizing: border-box;
} */

section{
    display: flex;
}

header{
    margin: 0;
    padding: 0;
}

.carousel-item{
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
  padding: 0;
  box-sizing: 0 !important;
  max-width: 100% !important;
} 
</style>


<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
      </x-slot>
{{-- <header>
    <div class="container-fluid text-center mt-3 mb-3">
            <img src="{{ URL::asset('/images/logo-pttk.png')}}" class="img-fluid fixed" width=20% height=20% alt="logo">
    </div>
</header> --}}

<section>
<div class="container h-100 d-flex flex-column justify-content-center align-items-center text-left">
    <p class="display-4">Kolory szlaków górskich</p>
    <div class="text-left">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Czerwony.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK CZERWONY</b> - to szlak główny, którym najprawdopodobniej wędrówka będzie najciekawsza. 
                </li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Niebieski.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK NIEBIESKI</b> - to trasa długodystansowa, ale nie jest to główny szlak.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Zielony.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK ZIELONY</b> - Szlak doprowadzający do ciekawych lub charakterystycznych miejsc.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Zolty.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK ŻÓŁTY</b> - Kolor ten oznacza szlaki łącznikowe, czasami oznacza też szlaki dojściowe.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Czarny.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK CZARNY</b> - Szlak dojściowy.</li>
      </ul>
    </div>
</div>

{{-- <div class="container h-100 d-flex flex-column justify-content-center align-items-center  text-center"> --}}
  <img src="{{ URL::asset('/images/Tatry_szlaki.png')}}" class="img-fluid d-flex flex-column justify-content-center" width="80%" alt="szlaki">
    
    
{{-- </div>  --}}

{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner text-light text-center">
      <div class="carousel-item carousel-img-one active">
          <img src="{{ URL::asset('/images/tatrys.jpg')}}" class="d-block w-100" alt="tatry">
        <div class="carousel-caption h-100 p-5 d-flex flex-cloumn justify-content-end justify-content-md-center align-items-center">
            <p class="display-3"></p>
            <p class="d-none d-sm-mlock">opis</p>
        </div>
        <div class="hero-shadow"></div>
      </div>
      <div class="carousel-item carousel-img-two">
        <img src="{{ URL::asset('/images/Bielskie.jpg')}}" class="d-block w-100" alt="tatry">
        <div class="carousel-caption h-100 p-5 d-flex flex-cloumn justify-content-end justify-content-md-center align-items-center">
            <p class="display-3"></p>
            <p class="d-none d-sm-mlock">opis</p>
        </div>
        <div class="hero-shadow"></div>
      </div>
      <div class="carousel-item carousel-img-three">
        <img src="{{ URL::asset('/images/tatry-zima.jpg')}}" class="d-block w-100" alt="tatry">
        <div class="carousel-caption h-100 p-5 d-flex flex-cloumn justify-content-end justify-content-md-center align-items-center">
            <p class="display-3"></p>
            <p class="d-none d-sm-mlock">opis</p>
        </div>
        <div class="hero-shadow"></div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}


</section>
</x-app-layout>
