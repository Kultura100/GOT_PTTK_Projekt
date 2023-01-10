<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/obowiazki.css') }}">
    </x-slot>
    <section class="container">
        <div class="d-flex justify-content-center mt-2">
            <h1>Przyznawanie odznak</h1>
        </div>
        <div class="d-flex flex-column">
            <img src="/images/odznaki/gotdz.gif" class="border mx-auto shadow" style="width: 250px;">
            <h3 class="text-center mt-3 mb-3">Nazwa odznaki</h3>
            <div class="d-flex flex-row justify-content-center">
                <a class="btn btn-danger mx-2 my-auto" style="height: 37px; color:white">Odrzuć</a>
                <div class="card" style="width: 18rem;">
                    <div class="card-body shadow">
                        <h5 class="card-title">Nazwa gościa</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Liczba punktów?</h6>
                        <p class="card-text">Jakiś opis?</p>
                    </div>
                </div>
                <a class="btn btn-success mx-2 my-auto" style="height: 37px; ">Przyznaj</a>
            </div>
        </div>
    </section>
</x-app-layout>
