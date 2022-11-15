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

                <li class="nav-item">
                    <x-nav-link :href="route('szlak.index')" :active="request()->routeIs('szlak.index')">
                        <!-- szlak.index -->
                        {{ __('translations.szlak.title') }}
                    </x-nav-link>
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



            </ul>
            <div class="navbar-nav dropdown">
                <div class="notification">
                    <div class="notBtn" href="#">
                        @if(isset($powiadomienie))
                        @if ($powiadomienie->count() > 0)
                        {{-- @dd($powiadomienie) --}}
                            @foreach ($powiadomienie as $powiadomienia)
                                {{-- Jak chcesz bez powiadomienia wywalasz klase number --}}
                                <div class="number">{{ $loop->iteration }}</div>
                                <i class="fa-regular fa-bell"></i>
                                <div class="box">
                                    <div class="display">
                                        <div class="cont">
                                            @php
                                                $dzisiaj = new DateTime();
                                                $przodownikdata = new DateTime($powiadomienia->created_at);
                                                if($dzisiaj->format('Y-m-d') == $przodownikdata->format('Y-m-d'))
                                                {
                                                    print(" <div class='sec new'> ");
                                                }
                                                else {
                                                    print(" <div class='sec'> ");
                                                }
                                            @endphp
                                                {{-- jak chcesz nowy to zrob sec new --}}
                                                <div class="profCont">
                                                    <img class="profile"
                                                        src="https://bootdey.com/img/Content/avatar/avatar6.png">
                                                </div>
                                                <div class="txt">{{$powiadomienia->tekst}}</div>
                                                {{-- <div class="txt sub">czas ble ble ble</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <i class="fa-regular fa-bell"></i>
                            <div class="box">
                                <div class="display">
                                </div>
                            </div>
                        @endif
                        @else
                        <i class="fa-regular fa-bell"></i>
                        <div class="box">
                            <div class="display">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
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
