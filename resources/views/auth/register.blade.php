<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="uzytkownik-imie" class="col-sm-5 col-form-label">
                    {{ __('translations.uzytkownik.attribute.imie') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Imie') is-invalid @enderror" name="imie"
                    id="uzytkownik-imie" value="{{ old ('Imie') }}">
                    @error('Imie')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="uzytkownik-nazwisko" class="col-sm-5 col-form-label">
                    {{ __('translations.uzytkownik.attribute.nazwisko') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Nazwisko') is-invalid @enderror" name="nazwisko"
                    id="uzytkownik-nazwisko" value="{{ old ('Nazwisko') }}">
                    @error('Nazwisko')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="uzytkownik-telefon" class="col-sm-5 col-form-label">
                    {{ __('translations.uzytkownik.attribute.telefon') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Telefon') is-invalid @enderror" name="telefon"
                    id="uzytkownik-telefon" value="{{ old ('Telefon') }}">
                    @error('Telefon')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            
  

            <div class="row mb-3">
                <label for="uzytkownik-email" class="col-sm-5 col-form-label">
                    {{ __('translations.uzytkownik.attribute.email') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" name="email"
                    id="uzytkownik-email"value="{{ old ('Email') }}">
                    @error('Email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="uzytkownik-haslo" class="col-sm-5 col-form-label">
                    {{ __('translations.uzytkownik.attribute.haslo') }}
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="uzytkownik-haslo" value="{{ old ('password') }}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <label for="uzytkownik-haslo" class="col-sm-5 col-form-label">
                   Potwierdz haslo
                </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                    id="uzytkownik-haslo" value="{{ old ('password') }}">
                    @error('password')
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
