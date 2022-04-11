<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">
        {!! JsValidator::formRequest('App\Http\Requests\wycieczki\WycieczkiRequest') !!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#pasmo_label').hide();
                $('#wycieczki-pasmo').hide();
                $('#punkty_label').hide();
                $('#wycieczki-odcinek').hide();
                $('#odcinek_label').hide();
                $('#guziczek').hide();

                $('#wycieczki-grupa').on('change', function() {
                    var grupa = $(this).val();
                    if (grupa) {
                        $.ajax({
                            url: '/wycieczki/create/' + grupa,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data) {
                                    $('#pasmo_label').show();
                                    $('#wycieczki-pasmo').show();
                                    $('#wycieczki-pasmo').empty();
                                    $('#wycieczki-pasmo').append(
                                        '<option hidden>Wybierz pasmo</option>');
                                    $.each(data, function(key, pasmo) {
                                        $('select[name="pasmo"]').append('<option value="' +
                                            (key + 1) + '">' + pasmo.nazwa + '</option>'
                                            );
                                    });
                                } else {
                                    $('#wycieczki-pasmo').empty();
                                }
                            }
                        });
                    } else {
                        $('#wycieczki-pasmo').empty();
                    }
                });

                $('#wycieczki-pasmo').on('change', function() {
                    var pasmo = $(this).val();
                    if (pasmo) {
                        $.ajax({
                            url: '/wycieczki/odcinki/' + pasmo,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data) {
                                    $('#wycieczki-odcinek').empty();
                                    $('#wycieczki-odcinek').append(
                                        '<option hidden>Wybierz odcinek</option>');
                                    $.each(data, function(key, odcinek) {
                                        $('select[name="odcinek"]').append(
                                            '<option value="' + (key +
                                            1) + '"> z ' + odcinek.punktpocz.nazwa +
                                            ' do ' + odcinek.punktkoncz.nazwa +
                                            '</option>' +
                                            '<option name="zmienione" value="' + (key +
                                                1) + '"> z ' + odcinek.punktkoncz
                                            .nazwa + ' do ' + odcinek.punktpocz.nazwa +
                                            '</option>'
                                        );
                                    });
                                } else {
                                    $('#wycieczki-odcinek').empty();
                                }
                            }
                        });
                    } else {
                        $('#wycieczki-odcinek').empty();
                    }
                });

                $('#wycieczki-pasmo').on('change', function() {
                    if ($('#wycieczki-pasmo').css('display') !== 'none') {
                        $('#wycieczki-odcinek').show();
                        $('#odcinek_label').show();
                        $('#guziczek').show();
                    }
                });



                $.validator.addMethod("endDate", function(value, element) {
                    var startDate = $('#wycieczki-dataod').val();
                    return Date.parse(startDate) <= Date.parse(value) || value == "";
                }, "Data koncowa musi być pózniejsza niż początkowa");
                $('#wycieczki-form').validate();
            });

            const dragArea = document.querySelector(".wrapper");
            new Sortable(dragArea, {
                animation: 350,
                removeOnSpill: true
            });

            $("#guziczek").click(function() {
                var nazwa = $("#wycieczki-odcinek option:selected").text();
                var tmp;
                if ($("#wycieczki-odcinek option:selected").attr('name') == 'zmienione') {
                    tmp = "<input type='hidden' name='zmienione[]' value='1'>"
                } else
                    tmp = "<input type='hidden' name='zmienione[]' value='0'>"
                var idodcinka = $("#wycieczki-odcinek option:selected").val();
                var tekst = "<input type='hidden' name='odcinekid[]' value='" + idodcinka + "' >"
                tekst += tmp;
                $(".doformy").append(tekst);
                $(".wrapper").append(
                    "<div class='item' id='" + idodcinka + "'><span class='text'>" + nazwa +
                    "</span></i> <i class='fas fa-bars'></i></div>"
                );
                //$("#wycieczki-odcinek option:selected").remove();
            });
        </script>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                        <h2 class="h3">Tworzenie Wycieczki</h2>
                    </div>
                    <div class="card-body no-padding">
                        <form id="wycieczki-form" method="POST" action="{{ route('wycieczki.store') }}">
                            <div class="doformy">
                            </div>
                            @csrf
                            <div class="row mb-3">
                                <label for="wycieczki-dataod" class="col-sm-2 col-form-label">
                                    {{ __('translations.wycieczki.attribute.dataod') }}
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control @error('dataod') is-invalid @enderror"
                                        name="dataod" id="wycieczki-dataod"
                                        value="@if(null !== old('dataod')){{old('dataod')}}@else{{date('Y-m-d')}}@endif"
                                        min="{{ date('Y-m-d') }}">
                                    @error('dataod')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="wycieczki-datado" class="col-sm-2 col-form-label">
                                    {{ __('translations.wycieczki.attribute.datado') }}
                                </label>
                                <div class="col-sm-10">
                                    <input type="date"
                                        class="form-control @error('datado') is-invalid @enderror endDate" name="datado"
                                        id="wycieczki-datado" value="{{ old('datado') }}">
                                    @error('datado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="wycieczki-grupa" class="col-sm-2">
                                    {{ __('translations.wycieczki.attribute.grupa') }}
                                </label>
                                <div class="col-sm-10">
                                    <select id="wycieczki-grupa"
                                        class="form-select @error('grupa') is-invalid @enderror " name="grupa"
                                        value="{{ old('grupa') }}">
                                        <option hidden>Wybierz grupe</option>
                                        @forelse ($grupy as $grupa)
                                            <option name="grupa" value="{{ $grupa->id }}">{{ $grupa->nazwa }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('grupa')
                                        <div class="" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="wycieczki-pasmo" class="col-sm-2" id="pasmo_label"
                                    style="display: none;">
                                    {{ __('translations.wycieczki.attribute.pasmo') }}
                                </label>
                                <div class="col-sm-10">
                                    <select id="wycieczki-pasmo"
                                        class="form-select @error('pasmo') is-invalid @enderror " name="pasmo"
                                        value="{{ old('pasmo') }}" style="display: none;">
                                        <option hidden>Wybierz pasmo</option>
                                        @foreach ($pasma as $pasmo)
                                            <option name="pasmo" value="{{ $pasmo->id }}">{{ $pasmo->nazwa }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pasmo')
                                        <div class="" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="wycieczki-odcinek" class="col-sm-2" id="odcinek_label"
                                    style="display: none;">
                                    Odcinek
                                </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col">
                                            <select id="wycieczki-odcinek"
                                                class="form-select @error('odcinek') is-invalid @enderror "
                                                name="odcinek" value="{{ old('odcinek') }}" style="display: none;">
                                            </select>
                                            @error('odcinek')
                                                <div class="" role="alert">
                                                    <strong> {{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-primary m-1" id="guziczek"
                                                style="display: none;">Dodaj Odcinek</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mb-3 ">
                    <div class="btn-group" role="group" aria-label="Cancel or submit form">
                        {{-- {{ route('wycieczki.index') }} --}}
                        <a href="{{ route('wycieczki.index') }}" type="submit" class="btn btn-primary m-1">
                            {{ __('translations.buttons.cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary m-1">
                            {{ __('translations.buttons.store') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                        <h2 class="h3">Odcinki</h2>
                    </div>
                    <div class="card-body no-padding">
                        <div class="wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
