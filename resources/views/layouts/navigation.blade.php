<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::asset('/images/logo-pttk.png') }}" width="50" height="50" alt="ikona">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav me-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Strona Główna
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link :href="route('uzytkownik.index')" :active="request()->routeIs('uzytkownik.index')">
                        <!-- klient.index -->
                        {{ __('translations.uzytkownik.title') }}
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link :href="route('osiagniecia.index')" :active="request()->routeIs('osiagniecia.index')">
                        <!-- osiagniecia.index -->
                        {{ __('translations.osiagniecia.title') }}
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link :href="route('odznaki.index')" :active="request()->routeIs('odznaki.index')">
                        <!-- odznaki.index -->
                        {{ __('translations.odznaki.title') }}
                    </x-nav-link>
                </li>

                {{-- <li class="nav-item">
                <x-nav-link :href="route('ranking.index')" :active="request()->routeIs('ranking.index')">
                    <!-- ranking.index -->
                    {{ __('translations.ranking.title') }}
                </x-nav-link>
            </li> --}}

                <li class="nav-item">
                    <x-nav-link :href="route('ranking.index')" :active="request()->routeIs('ranking.index')">
                        <!-- ranking.index -->
                        Ranking
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link :href="route('wycieczki.index')" :active="request()->routeIs('wycieczki.index')">
                        <!-- wycieczki.index -->
                        {{ __('translations.wycieczki.title') }}
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link :href="route('szlak.index')" :active="request()->routeIs('szlak.index')">
                        <!-- szlak.index -->
                        {{ __('translations.szlak.title') }}
                    </x-nav-link>
                </li>

            </ul>
            <div class="navbar-nav dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="profile" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ url('/images/avatars/blank.png') }}" alt="USER_NAME" width="32" height="32"
                        class="rounded-circle">
                    {{ Auth::user()->imie }} {{ Auth::user()->nazwisko }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="profile">
                    <li><a class="dropdown-item" href="{{ route('uzytkownik.index') }}">Ustawienia</a></li>
                    <li><a class="dropdown-item disabled" href="#" aria-disabled="true">Profil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Wylogowanie') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
