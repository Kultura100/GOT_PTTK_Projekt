<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/klient.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/klient.js') }}"></script>
    </x-slot>
    @if(Gate::check('log-viewer'))
    <div class="container">
      <h1>{{ __('translations.klient.title') }}</h1>
      <div class="d-flex flex-row-reverse mb-4">
        <a href="{{ route('uzytkownik.create') }}"
        type="button"
        class="btn btn-light"
        role="button">
        {{ __('translations.klient.label.create') }}
        </a>
      </div>
      <div id="no-more-tables">
      <table class="table" style="width: 100%;">
      <thead>
        <tr>
          <th>#</th>
          <th>{{ __('translations.klient.attribute.imie') }}</th>
          <th>{{ __('translations.klient.attribute.nazwisko') }}</th>
          <th>{{ __('translations.klient.attribute.nazwa') }}</th>
          <th>{{ __('translations.klient.attribute.NIP') }}</th>
          <th>{{ __('translations.klient.attribute.ulica') }}</th>
          <th>{{ __('translations.klient.attribute.numerdomu') }}</th>
          <th>{{ __('translations.klient.attribute.numerlokalu') }}</th>
          <th>{{ __('translations.klient.attribute.kodpocztowy') }}</th>
          <th>{{ __('translations.klient.attribute.haslo') }}</th>
          <th>{{ __('translations.klient.attribute.telefon') }}</th>
          <th>{{ __('translations.klient.attribute.email') }}</th>
          <th>{{ __('translations.attribute.created_at') }}</th>
          <th>{{ __('translations.attribute.updated_at') }}</th>
          <th>{{ __('translations.attribute.deleted_at') }}</th>
          <th class="always-visible"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($klienci as $klient)
        <tr>
          <td>{{ $klient->id }}</td>
          <td>{{ $klient->Imie }}</td>
          <td>{{ $klient->Nazwisko }}</td>
          <td>{{ $klient->Nazwa }}</td>
          <td>{{ $klient->NIP }}</td>
          <td>{{ $klient->Ulica }}</td>
          <td>{{ $klient->NumerDomu }}</td>
          <td>{{ $klient->NumerLokalu }}</td>
          <td>{{ $klient->KodPocztowy }}</td>
          <td>*********</td>
          <td>{{ $klient->Telefon }}</td>
          <td>{{ $klient->Email }}</td>
          <td>{{ $klient->created_at }}</td>
          <td>{{ $klient->updated_at }}</td>
          <td>{{ $klient->deleted_at }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="action buttons">
              @can('klient.store')
                <x-datatables.action-link class="btn btn-primary"
                  url="{{ route('uzytkownik.edit', ['id' => $klient->id]) }}"
                  title="{{ __('translations.klient.label.edit') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                </x-action-link>
              @endcan
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
      </div>
      <div class="justify-center">
        @if (!empty($klienci))
         {{ $klienci->links() }}   
        @endif
    </div>
    </div>
    @else
    @foreach ($klienci as $Klient)
    <form id="klient-form" method="POST" action="{{ route('uzytkownik.update', ['id' => $Klient->id]) }}">
    @csrf
    @method('PATCH')
  
    <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
          <div class="col-md-3 border-right">
              <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $Klient->Imie }} {{ $Klient->Nazwisko }} </span><span class="text-black-50">{{ $Klient->Email }}</span><span> </span></div>
          </div>
          <div class="col-md-5 border-right">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Ustawienia Profilu</h4>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-6"><label class="labels">Imie</label><input type="text" class="form-control" placeholder="Podaj imie" name="Imie" value="{{ $Klient->Imie }}"></div>
                      <div class="col-md-6"><label class="labels">Nazwisko</label><input type="text" class="form-control" name="Nazwisko" value="{{ $Klient->Nazwisko }}" placeholder="Podaj nazwisko"></div>
                      <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" name="Email" value="{{ $Klient->Email }}" placeholder="Podaj Email"></div>
                  </div>
                  <input type="hidden" class="form-control" name="Nazwa" value="{{ $Klient->Imie }} {{ $Klient->Nazwisko }}">
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">NIP</label><input type="text" class="form-control" placeholder="Podaj NIP" name="NIP" value="{{ $Klient->NIP }}"></div>
                      <div class="col-md-12"><label class="labels">Numer Telefonu</label><input type="text" class="form-control" placeholder="Podaj numer telefonu" name="Telefon" value="{{ $Klient->Telefon }}"></div>
                      <div class="col-md-12"><label class="labels">Ulica</label><input type="text" class="form-control" placeholder="Podaj ulice" name="Ulica" value="{{ $Klient->Ulica }}"></div>
                      <div class="col-md-12"><label class="labels">Numer Domu</label><input type="text" class="form-control" placeholder="Podaj Numer domu" name="NumerDomu" value="{{ $Klient->NumerDomu }}"></div>
                      <div class="col-md-12"><label class="labels">Numer Lokalu</label><input type="text" class="form-control" placeholder="Podaj numer lokalu" name="NumerLokalu" value="{{ $Klient->NumerLokalu }}"></div>
                      <div class="col-md-12"><label class="labels">KodPocztowy</label><input type="text" class="form-control" placeholder="Podaj kod pocztowy" name="KodPocztowy" value="{{ $Klient->KodPocztowy }}"></div>
                      <div class="col-md-12"><label class="labels">Miejscowosc</label><input type="text" class="form-control" placeholder="Podaj miejscowosc" name="Miejscowosc" value="{{ $Klient->Miejscowosc }}"></div>
                  </div>
                  <div class="mt-5 text-center">
                    <input class="btn btn-primary profile-button" type="submit" value="Zapisz Profil">
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center experience"><span>Zmien Haslo</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Haslo</span></div><br>
                  <div class="col-md-12"><label class="labels">Podaj haslo</label><input type="password" class="form-control" name="Haslo" placeholder="Podaj Haslo" value="{{ $Klient->Haslo }}"></div> <br>
                  <div class="col-md-12"><label class="labels">Potworz haslo</label><input type="password" class="form-control" name="Haslo" placeholder="Potworz haslo" value="{{ $Klient->Haslo }}"></div>
              </div>
          </div>
      </div>
  </div>
  @endforeach

  </form>
  @endif


</x-app-layout>