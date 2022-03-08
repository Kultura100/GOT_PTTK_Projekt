<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/klient.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script type="text/javascript" src="{{ asset('js/klient.js') }}"></script>
      {!!
        JsValidator::formRequest('App\Http\Requests\Klient\KlientRequest')
      !!}
    </x-slot>
    <div class="container">
      <h1>{{ __('translations.klient.title') }}</h1>
      <div class="card">
          <div class="card-body">
                <h5 class="card-title">
                    @if (isset($edit) && $edit === true)  
                        {{ __('translations.klient.label.edit') }}
                    @else
                        {{ __('translations.klient.label.create') }}
                    @endif
                </h5>
              <form id="klient-form" method="POST"
                @if (isset($edit) && $edit === true) 
                action="{{ route('klient.update', ['id' => $klient->id]) }}"
                @else
                action="{{ route('klient.store') }}"
                @endif
              >
              @csrf
              @if (isset($edit) && $edit === true) 
                @method('PATCH')
              @endif
            <div class="row mb-3">
                <label for="klient-imie" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.imie') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Imie') is-invalid @enderror" name="Imie"
                    id="klient-imie" 
                    @if (isset($klient))
                        Value="{{ $klient->Imie }}"
                    @else
                        value="{{ old ('Imie') }}"
                    @endif
                    >
                    @error('Imie')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-nazwisko" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.nazwisko') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Nazwisko') is-invalid @enderror" name="Nazwisko"
                    id="klient-nazwisko"
                    @if (isset($klient))
                        Value="{{ $klient->Nazwisko }}"
                    @else
                        value="{{ old ('Nazwisko') }}"
                    @endif
                    >
                    @error('Nazwisko')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-nazwa" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.nazwa') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Nazwa') is-invalid @enderror" name="Nazwa"
                    id="klient-nazwa"
                    @if (isset($klient))
                        Value="{{ $klient->Nazwa }}"
                    @else
                        value="{{ old ('Nazwa') }}"
                    @endif
                    >
                    @error('Nazwa')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-NIP" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.NIP') }}
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('NIP') is-invalid @enderror" name="NIP"
                    id="klient-NIP"
                    @if (isset($klient))
                        Value="{{ $klient->NIP }}"
                    @else
                        value="{{ old ('NIP') }}"
                    @endif
                    >
                    @error('NIP')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-ulica" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.ulica') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Ulica') is-invalid @enderror" name="Ulica"
                    id="klient-ulica"
                    @if (isset($klient))
                        Value="{{ $klient->Ulica }}"
                    @else
                        value="{{ old ('Ulica') }}"
                    @endif
                    >
                    @error('Ulica')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-numerdomu" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.numerdomu') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('NumerDomu') is-invalid @enderror" name="NumerDomu"
                    id="klient-numerdomu"
                    @if (isset($klient))
                        Value="{{ $klient->NumerDomu }}"
                    @else
                        value="{{ old ('NumerDomu') }}"
                    @endif
                    >
                    @error('NumerDomu')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-numerlokalu" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.numerlokalu') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('NumerLokalu') is-invalid @enderror" name="NumerLokalu"
                    id="klient-numerlokalu"
                    @if (isset($klient))
                        Value="{{ $klient->NumerLokalu }}"
                    @else
                        value="{{ old ('NumerLokalu') }}"
                    @endif
                    >
                    @error('NumerLokalu')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-kodpocztowy" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.kodpocztowy') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('KodPocztowy') is-invalid @enderror" name="KodPocztowy"
                    id="klient-kodpocztowy"
                    @if (isset($klient))
                        Value="{{ $klient->KodPocztowy }}"
                    @else
                        value="{{ old ('KodPocztowy') }}"
                    @endif
                    >
                    @error('KodPocztowy')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-miejscowosc" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.miejscowosc') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Miejscowosc') is-invalid @enderror" name="Miejscowosc"
                    id="klient-miejscowosc"
                    @if (isset($klient))
                        Value="{{ $klient->Miejscowosc }}"
                    @else
                        value="{{ old ('Miejscowosc') }}"
                    @endif
                    >
                    @error('Miejscowosc')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-haslo" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.haslo') }}
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('Haslo') is-invalid @enderror" name="Haslo"
                    id="klient-haslo"
                    @if (isset($klient))
                        Value="{{ $klient->Haslo }}"
                    @else
                        value="{{ old ('Haslo') }}"
                    @endif
                    >
                    @error('Haslo')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-telefon" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.telefon') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Telefon') is-invalid @enderror" name="Telefon"
                    id="klient-telefon"
                    @if (isset($klient))
                        Value="{{ $klient->Telefon }}"
                    @else
                        value="{{ old ('Telefon') }}"
                    @endif
                    >
                    @error('Telefon')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-email" class="col-sm-2 col-form-label">
                    {{ __('translations.klient.attribute.email') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email"
                    id="klient-email"
                    @if (isset($klient))
                        Value="{{ $klient->Email }}"
                    @else
                        value="{{ old ('Email') }}"
                    @endif
                    >
                    @error('Email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

              <div class="d-flex justify-content-end mb-3 ">
                  <div class="btn-group" role="group" aria-label="Cancel or submit form">
                      <a href="{{ route('klient.index') }}" type="submit" class="btn btn-danger">
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