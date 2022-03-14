<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/uzytkownik.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script type="text/javascript" src="{{ asset('js/uzytkownik.js') }}"></script>
      {!!
        JsValidator::formRequest('App\Http\Requests\Uzytkownik\UzytkownikRequest')
      !!}
    </x-slot>
    <div class="container">
      <h1>{{ __('translations.uzytkownik.title') }}</h1>
      <div class="card">
          <div class="card-body">
                <h5 class="card-title">
                    @if (isset($edit) && $edit === true)  
                        {{ __('translations.uzytkownik.label.edit') }}
                    @else
                        {{ __('translations.uzytkownik.label.create') }}
                    @endif
                </h5>
              <form id="uzytkownik-form" method="POST"
                @if (isset($edit) && $edit === true) 
                action="{{ route('uzytkownik.update', ['id' => $klient->id]) }}"
                @else
                action="{{ route('uzytkownik.store') }}"
                @endif
              >
              @csrf
              @if (isset($edit) && $edit === true) 
                @method('PATCH')
              @endif
            <div class="row mb-3">
                <label for="uzytkownik-imie" class="col-sm-2 col-form-label">
                    {{ __('translations.uzytkownik.attribute.imie') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('imie') is-invalid @enderror" name="imie"
                    id="uzytkownik-imie" 
                    @if (isset($klient))
                        Value="{{ $klient->imie }}"
                    @else
                        value="{{ old ('imie') }}"
                    @endif
                    >
                    @error('imie')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="uzytkownik-nazwisko" class="col-sm-2 col-form-label">
                    {{ __('translations.uzytkownik.attribute.nazwisko') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nazwisko') is-invalid @enderror" name="nazwisko"
                    id="uzytkownik-nazwisko"
                    @if (isset($klient))
                        Value="{{ $klient->nazwisko }}"
                    @else
                        value="{{ old ('nazwisko') }}"
                    @endif
                    >
                    @error('nazwisko')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <label for="uzytkownik-telefon" class="col-sm-2 col-form-label">
                    {{ __('translations.uzytkownik.attribute.telefon') }}
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('telefon') is-invalid @enderror" name="telefon"
                    id="uzytkownik-telefon"
                    @if (isset($klient))
                        Value="{{ $klient->telefon }}"
                    @else
                        value="{{ old ('telefon') }}"
                    @endif
                    >
                    @error('telefon')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="uzytkownik-email" class="col-sm-2 col-form-label">
                    {{ __('translations.uzytkownik.attribute.email') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="uzytkownik-email"
                    @if (isset($klient))
                        Value="{{ $klient->email }}"
                    @else
                        value="{{ old ('email') }}"
                    @endif
                    >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <label for="uzytkownik-haslo" class="col-sm-2 col-form-label">
                    {{ __('translations.uzytkownik.attribute.haslo') }}
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="uzytkownik-password"
                    @if (isset($klient))
                        Value="{{ $klient->password }}"
                    @else
                        value="{{ old ('password') }}"
                    @endif
                    >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="uzytkownik-haslo" class="col-sm-2 col-form-label">
                   Potwierdz haslo
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                    id="uzytkownik-password-confirmation"
                    @if (isset($klient))
                        Value="{{ $klient->password }}"
                    @else
                        value="{{ old ('password') }}"
                    @endif
                    >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

              <div class="d-flex justify-content-end mb-3 ">
                  <div class="btn-group" role="group" aria-label="Cancel or submit form">
                      <a href="{{ route('uzytkownik.index') }}" type="submit" class="btn btn-danger">
                        {{ __('translations.buttons.cancel') }}
                      </a>
                      <button type="submit" class="btn btn-primary">
                          @if(isset($edit) && $edit === true)
                          {{ __('translations.buttons.update') }}
                          @else
                          {{ __('translations.buttons.store') }}
                          @endif 
                      </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</x-app-layout>