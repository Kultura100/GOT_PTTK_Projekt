<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-light">
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

                {{-- <li class="nav-item">
                    <x-nav-link :href="route('uzytkownik.index')" :active="request()->routeIs('uzytkownik.index')">
                        <!-- klient.index -->
                        {{ __('translations.uzytkownik.title') }}
                    </x-nav-link>
                </li> --}}

                

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

                {{-- <li class="nav-item dropdown">
                    <x-nav-link  :href="route('wycieczki.index')" :active="request()->routeIs('wycieczki.index')">
                        <!-- wycieczki.index -->
                        {{ __('translations.wycieczki.title') }}
                    </x-nav-link>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('translations.wycieczki.title') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('wycieczki.index') }}">{{ __('translations.wycieczki.index') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('wycieczki.create') }}">{{ __('translations.wycieczki.add') }}</a></li>
                    </ul>
                </li>

                
                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('przodownik'))
                    <li class="nav-item">
                        <x-nav-link :href="route('obowiazki.index')" :active="request()->routeIs('obowiazki.index')">
                            <!-- obowiazki.index -->
                            {{ __('translations.obowiazki.title') }}
                        </x-nav-link>
                    </li>
                @endif
                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('przodownik'))
                    <li class="nav-item">
                        <x-nav-link :href="route('listaturystow.index')" :active="request()->routeIs('listaturystow.index')">
                            Lista zgłoszeń
                        </x-nav-link>
                    </li>
                @endif
                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('przodownik'))
                <li class="nav-item">
                    <x-nav-link :href="route('obowiazki.listaOdznak')" :active="request()->routeIs('obowiazki.listaOdznak')">
                        Lista odznak
                    </x-nav-link>
                </li>
            @endif



            </ul>
            <div class="navbar-nav dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="profile" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ url('/images/avatars/blank.png') }}" alt="USER_NAME" width="32" height="32"
                        class="rounded-circle">
                    {{ Auth::user()->imie }} {{ Auth::user()->nazwisko }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="profile">
                    <li>
                        @if (Auth::user()->hasRole('admin'))
                            <a class="dropdown-item" href="{{ route('uzytkownik.index') }}"
                                aria-disabled="true">Zarządzaj użytkownikami</a>
                        @else
                            <a class="dropdown-item" href="{{ route('uzytkownik.index') }}"
                                aria-disabled="true">Profil</a>
                        @endif
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('osiagniecia.index') }}">{{ __('translations.osiagniecia.title') }}</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Wylogowanie') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
