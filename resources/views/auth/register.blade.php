<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="klient-imie" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.imie') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Imie') is-invalid @enderror" name="Imie"
                    id="klient-imie" value="{{ old ('Imie') }}">
                    @error('Imie')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-nazwisko" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.nazwisko') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Nazwisko') is-invalid @enderror" name="Nazwisko"
                    id="klient-nazwisko" value="{{ old ('Nazwisko') }}">
                    @error('Nazwisko')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-nazwa" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.nazwa') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Nazwa') is-invalid @enderror" name="Nazwa"
                    id="klient-nazwa" value="{{ old ('Nazwa') }}">
                    @error('Nazwa')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-NIP" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.NIP') }}
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('NIP') is-invalid @enderror" name="NIP"
                    id="klient-NIP" value="{{ old ('NIP') }}">
                    @error('NIP')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-ulica" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.ulica') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Ulica') is-invalid @enderror" name="Ulica"
                    id="klient-ulica" value="{{ old ('Ulica') }}">
                    @error('Ulica')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-numerdomu" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.numerdomu') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('NumerDomu') is-invalid @enderror" name="NumerDomu"
                    id="klient-numerdomu" value="{{ old ('NumerDomu') }}">
                    @error('NumerDomu')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-numerlokalu" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.numerlokalu') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('NumerLokalu') is-invalid @enderror" name="NumerLokalu"
                    id="klient-numerlokalu" value="{{ old ('NumerLokalu') }}">
                    @error('NumerLokalu')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-kodpocztowy" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.kodpocztowy') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('KodPocztowy') is-invalid @enderror" name="KodPocztowy"
                    id="klient-kodpocztowy" value="{{ old ('KodPocztowy') }}">
                    @error('KodPocztowy')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-miejscowosc" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.miejscowosc') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Miejscowosc') is-invalid @enderror" name="Miejscowosc"
                    id="klient-miejscowosc" value="{{ old ('Miejscowosc') }}">
                    @error('Miejscowosc')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-haslo" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.haslo') }}
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('Haslo') is-invalid @enderror" name="Haslo"
                    id="klient-haslo" value="{{ old ('Haslo') }}">
                    @error('Haslo')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-telefon" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.telefon') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Telefon') is-invalid @enderror" name="Telefon"
                    id="klient-telefon" value="{{ old ('Telefon') }}">
                    @error('Telefon')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="klient-email" class="col-sm-5 col-form-label">
                    {{ __('translations.klient.attribute.email') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email"
                    id="klient-email"value="{{ old ('Email') }}">
                    @error('Email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>


            <div class="d-flex justify-content-end mt-4">
                <a class="text-muted mt-3 me-3" href="{{ route('login') }}">
                    {{ __('auth.other.already_registered') }}
                </a>
                <x-button>
                    {{ __('auth.buttons.register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
