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
      <div class="container my-2">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
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
