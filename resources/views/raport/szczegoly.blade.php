<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script type="text/javascript" src="{{ asset('js/raport.js') }}"></script>
      {!!
        JsValidator::formRequest('App\Http\Requests\Raport\RaportRequest')
      !!}
    </x-slot>
    <div class="container">
      <h1>{{ __('translations.raport.title') }}</h1>
      <div class="card">
          <div class="card-body">
                <h5 class="card-title">
                    @if (isset($edit) && $edit === true)  
                        {{ __('translations.raport.label.edit') }}
                    @else
                        {{ __('translations.raport.label.create') }}
                    @endif
                </h5>
              <form id="raport-form" method="POST"
                @if (isset($edit) && $edit === true) 
                action="{{ route('raport.update', ['id' => $klient->id]) }}"
                @else
                action="{{ route('raport.store') }}"
                @endif
              >
              @csrf
              @if (isset($edit) && $edit === true) 
                @method('PATCH')
              @endif
                <!--data do pobrania poczatek-->
            <div class="row mb-3">
                <label for="raport-dataod" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.dataod') }}
                </label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('dataod') is-invalid @enderror" name="dataod"
                    id="raport-dataod" 
                    @if (isset($klient))
                        Value="{{ $klient->dataod }}"
                    @else
                        value="{{ old ('dataod') }}"
                    @endif
                    >
                    @error('dataod')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <!--data do pobrania koniec-->
            <div class="row mb-3">
                <label for="raport-datado" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.datado') }}
                </label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('datado') is-invalid @enderror" name="datado"
                    id="raport-datado" 
                    @if (isset($klient))
                        Value="{{ $klient->datado }}"
                    @else
                        value="{{ old ('datado') }}"
                    @endif
                    >
                    @error('datado')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <!--pasmo do pobrania-->
            <div class="row mb-3">
                <label for="raport-pasmo" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.pasmo') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('pasmo') is-invalid @enderror" name="pasmo"
                    id="raport-pasmo"
                    @if (isset($klient))
                        Value="{{ $klient->pasmo }}"
                    @else
                        value="{{ old ('pasmo') }}"
                    @endif
                    >
                    @error('pasmo')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <!--ilosc punktów do pobrania-->
            <div class="row mb-3">
                <label for="raport-punkty" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.punkty') }}
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('punkty') is-invalid @enderror" name="punkty"
                    id="raport-punkty"
                    @if (isset($klient))
                        Value="{{ $klient->punkty }}"
                    @else
                        value="{{ old ('punkty') }}"
                    @endif
                    >
                    @error('punkty')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <!--maxilosc punktów do pobrania-->
            <div class="row mb-3">
                <label for="raport-maxpunkty" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.maxpunkty') }}
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('maxpunkty') is-invalid @enderror" name="maxpunkty"
                    id="raport-maxpunkty"
                    @if (isset($klient))
                        Value="{{ $klient->maxpunkty }}"
                    @else
                        value="{{ old ('maxpunkty') }}"
                    @endif
                    >
                    @error('maxpunkty')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <!--odcinkido pobrania z wycieczki i powielanie zeby bylo kilka + status (chyba obiekt)-->
            <div class="row mb-3">
                <label for="raport-odcinki" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.odcinki') }}
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('odcinki') is-invalid @enderror" name="odcinki"
                    id="raport-odcinki"
                    @if (isset($klient))
                        Value="{{ $klient->odcinki }}"
                    @else
                        value="{{ old ('odcinki') }}"
                    @endif
                    >
                    @error('odcinki')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <!--dodanie zdjęcia nwm czy dobrze-->
            <div class="row mb-3">
                <label for="raport-zdjecia" class="col-sm-2 col-form-label">
                    {{ __('translations.raport.attribute.zdjecia') }}
                </label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('zdjecia') is-invalid @enderror" name="zdjecia"
                    id="raport-zdjecia"
                    @if (isset($klient))
                        Value="{{ $klient->zdjecia }}"
                    @else
                        value="{{ old ('zdjecia') }}"
                    @endif
                    >
                    @error('zdjecia')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>
</x-app-layout>