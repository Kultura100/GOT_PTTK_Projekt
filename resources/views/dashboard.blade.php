<style>
/* * {
    box-sizing: border-box;
} */

/* body{
  background-image: url('/images/tlo.jpg');
} */

section{
    display: flex;
}

header{
    margin: 0;
    padding: 0;
    height: 50%;
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
            <p class="text-white-50 mb-0"></p>
    </header>
    <section class="py-5">
      <div class="my-2 d-flex">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in felis dignissim, imperdiet nulla vitae, condimentum nulla. Ut scelerisque a nisl sit amet facilisis. Etiam blandit iaculis tellus, vitae condimentum leo congue a. Vivamus in vehicula massa. Pellentesque libero libero, commodo lacinia volutpat non, tincidunt at lectus. Maecenas ipsum turpis, viverra vitae lacus eu, fringilla ultricies erat. Aenean hendrerit maximus sodales.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Quisque sapien augue, ornare id leo a, tristique elementum justo. Praesent non nulla sagittis, sollicitudin justo id, varius erat. Nunc sed pharetra nisl. Cras et suscipit felis, in lacinia sapien. Integer venenatis sagittis massa, eu eleifend nibh venenatis in. Pellentesque a aliquet urna. Curabitur tortor metus, ultrices sed mi at, sagittis imperdiet turpis. Suspendisse nec luctus nunc. Fusce in arcu quis lacus mollis ultrices.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus, bibendum in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl ullamcorper ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>






















{{-- <section>
<div class="container h-100 d-flex flex-column justify-content-center align-items-center text-left">
    <h1 class="mt-2">Kolory szlaków górskich</h1>
    <div class="text-left">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Czerwony.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK CZERWONY</b> - To szlak główny, którym najprawdopodobniej wędrówka będzie najciekawsza.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Niebieski.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK NIEBIESKI</b> - To trasa długodystansowa, ale nie jest to główny szlak.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Zielony.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK ZIELONY</b> - Szlak doprowadzający do ciekawych lub charakterystycznych miejsc.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Zolty.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK ŻÓŁTY</b> - Kolor ten oznacza szlaki łącznikowe, czasami oznacza też szlaki dojściowe.</li>
            <li class="list-group-item fs-4"><img src="{{ URL::asset('/images/szlaki/Czarny.png')}}" class="img-fluid" width=20% height=20% alt="logo"><b>SZLAK CZARNY</b> - Szlak dojściowy.</li>
      </ul>
    </div>
</div>

{{-- <div class="container h-100 d-flex flex-column justify-content-center align-items-center  text-center"> --}}
  {{-- <img src="{{ URL::asset('/images/Tatry_szlaki.png')}}" class="img-fluid d-flex flex-column justify-content-center" width="72%" alt="szlaki"> --}}

</section>
</x-app-layout>
