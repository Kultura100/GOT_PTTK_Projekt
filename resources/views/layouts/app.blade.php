@props(['styles' => '', 'scripts' => ''])

<x-base-layout>
    <x-slot name="styles">
        <style type="text/css" media="screen">
            body {
                padding-top: 4.5rem;
            }
        </style>
        {{ $styles }}
    </x-slot>   

    @include('layouts.navigation')    
    <div class="container">
        {{ $slot }}
    </div>

    <footer class="bg-dark text-light">
        <p class="py-4 mb-0 text-center">2022 &copy; Kawczyński Andrzej, Kociński Maciej, Owczarek Tomasz, Dudek Łukasz, Danielak Bartosz</p>
    </footer>

    <x-slot name="scripts">
        {{ $scripts }}
    </x-slot>
</x-base-layout>