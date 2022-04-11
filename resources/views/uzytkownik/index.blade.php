<x-app-layout>
    <x-slot name="styles">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/klient.css') }}">
    </x-slot>
    <x-slot name="scripts">
      <script src="{{ asset('js/klient.js') }}"></script>
    </x-slot>
    @if(Gate::check('log-viewer'))
    <div class="container">
      <h1>{{ __('translations.uzytkownik.title') }}</h1>
      <div class="d-flex flex-row-reverse mb-4">
        <a href="{{ route('uzytkownik.create') }}"
        type="button"
        class="btn btn-light"
        role="button">
        {{ __('translations.uzytkownik.label.create') }}
        </a>
      </div>
      <div id="no-more-tables">
      <table class="table" style="width: 100%;" id="tabelka">
      <thead>
        <tr>
          <th>#</th>
          <th>{{ __('translations.uzytkownik.attribute.email') }}</th>
          <th>{{ __('translations.uzytkownik.attribute.haslo') }}</th>
          <th>{{ __('translations.uzytkownik.attribute.imie') }}</th>
          <th>{{ __('translations.uzytkownik.attribute.nazwisko') }}</th>
          <th>{{ __('translations.uzytkownik.attribute.telefon') }}</th>
          <th>{{ __('translations.attribute.created_at') }}</th>
          <th>{{ __('translations.attribute.updated_at') }}</th>
          <th class="always-visible"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($klienci as $klient)
        <tr>
          <td>{{ $klient->id }}</td>
          <td>{{ $klient->email }}</td>
          <td>*********</td>
          <td>{{ $klient->imie }}</td>
          <td>{{ $klient->nazwisko }}</td>
          <td>{{ $klient->telefon }}</td>
          <td>{{ $klient->created_at }}</td>
          <td>{{ $klient->updated_at }}</td>
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
                      <div class="col-md-6"><label class="labels">Imie</label><input type="text" class="form-control" placeholder="Podaj imie" name="imie" value="{{ $Klient->imie }}"></div>
                      <div class="col-md-6"><label class="labels">Nazwisko</label><input type="text" class="form-control" name="nazwisko" value="{{ $Klient->nazwisko }}" placeholder="Podaj nazwisko"></div>
                      <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="{{ $Klient->email }}" placeholder="Podaj Email"></div>
                  </div>
                  <input type="hidden" class="form-control" name="nazwa" value="{{ $Klient->imie }} {{ $Klient->nazwisko }}">
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Numer Telefonu</label><input type="text" class="form-control" placeholder="Podaj numer telefonu" name="telefon" value="{{ $Klient->telefon }}"></div>
                      <div class="col-md-12"><label class="labels">Punkty</label><input type="text" class="form-control" placeholder="Podaj ulice" name="punkty" value="{{ $Klient->punkty }}" disabled></div>
                  </div>
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                  <div class="mt-5 text-center">
                    <input class="btn btn-primary profile-button" type="submit" value="Zapisz Profil">
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center experience"><span>Zmien Haslo</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Haslo</span></div><br>
                  <div class="col-md-12"><label class="labels">Podaj haslo</label><input type="password" class="form-control" name="password" placeholder="Podaj Haslo" value="{{ $Klient->password }}"></div> <br>
                  <div class="col-md-12"><label class="labels">Potworz haslo</label><input type="password" class="form-control" name="password_confirmation" placeholder="Potworz haslo" value="{{ $Klient->password }}"></div>
              </div>
          </div>
      </div>
  </div>
  @endforeach

  </form>
  @endif


</x-app-layout>