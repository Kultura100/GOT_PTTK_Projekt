<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/raport.css') }}">
    </x-slot>
    <x-slot name="scripts">               
        {!!
            JsValidator::formRequest('App\Http\Requests\wycieczki\WycieczkiRequest')
        !!}
        <script>            
            $(document).ready(function() {
                $('#pasmo_label').hide();
                $('#wycieczki-pasmo').hide();  
                $('#punkty_label').hide();              
            $('#wycieczki-grupa').on('change', function() {
            var grupa = $(this).val();
            if(grupa) {
                $.ajax({ 
                    url: '/wycieczki/create/'+grupa,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data)
                    {
                        if(data){
                            $('#pasmo_label').show();
                            $('#wycieczki-pasmo').show();                                   
                            $('#wycieczki-pasmo').empty();
                            $('#wycieczki-pasmo').append('<option hidden>Wybierz pasmo</option>'); 
                            $.each(data, function(key, pasmo){
                                $('select[name="pasmo"]').append('<option value="'+ key +'">' + pasmo.nazwa+ '</option>');
                            });
                        }else{
                            $('#wycieczki-pasmo').empty();
                        }
                    }
                });
            }else{
                $('#wycieczki-pasmo').empty();
            }
            });
            $('#wycieczki-pasmo').on('change', function() {
            if($('#wycieczki-pasmo').css('display') !== 'none')
            {
                $('#punkty_label').show();  
            }
        });
            });
        </script>       
    </x-slot>

    
    
    
    <div class="container">
        <h1>{{ __('translations.wycieczki.title') }}</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('translations.wycieczki.label.create') }}</h5>
                <form id="wycieczki-form" method="POST"
                    action="">
                    {{-- {{ route('wycieczki.store') }} --}}
                    @csrf

                    <div class="row mb-3">
                        <label for="wycieczki-dataod" class="col-sm-2 col-form-label">
                            {{ __('translations.wycieczki.attribute.dataod') }}
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control @error('dataod') is-invalid @enderror" name="dataod"
                            id="wycieczki-dataod" value="@if (null !== old('dataod')){{ old('dataod') }}@else{{date('Y-m-d')}}@endif" min="{{date('Y-m-d')}}">
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
                        <input type="date" class="form-control @error('datado') is-invalid @enderror" name="datado"
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
                            {{__('translations.wycieczki.attribute.grupa')}}
                        </label>
                    <div class="col-sm-10">
                            <select id="wycieczki-grupa" class="form-select @error('grupa') is-invalid @enderror " name="grupa"
                            value="{{ old('grupa')}}">
                            <option hidden>Wybierz grupe</option>
                            @forelse ($grupy as $grupa)
                                <option name="grupa" value="{{ $grupa->id }}">{{ $grupa->nazwa }}</option>  
                            @empty
                                
                            @endforelse
                        
                            </select>
        
                            @error('grupa')
                            <div class="" role="alert">
                                <strong> {{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                    </div> 
                
                    
                    <div class="row mb-3">
                        <label for="wycieczki-pasmo" class="col-sm-2" id="pasmo_label" style="display: none;">
                            {{__('translations.wycieczki.attribute.pasmo')}}
                        </label>
                    <div class="col-sm-10">
                            <select id="wycieczki-pasmo" class="form-select @error('pasmo') is-invalid @enderror " name="pasmo" 
                            value="{{ old('pasmo')}}" style="display: none;">  
                            <option hidden>Wybierz pasmo</option>                                                   
                            @foreach ($pasma as $pasmo)                            
                                <option name="pasmo" value="{{$pasmo->id}}" >{{$pasmo->nazwa}}</option> 
                            @endforeach
                        
                            </select>
        
                            @error('pasmo')
                            <div class="" role="alert">
                                <strong> {{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                    </div> 

                    <div id="punkty_label" style="display: none;">

                    <div class="row mb-3">
                        <label for="wycieczki-punktpocz" class="col-sm-2" id="punktpocz_label">
                            {{__('translations.wycieczki.attribute.punktpocz')}}
                        </label>
                    <div class="col-sm-10">
                            <select id="wycieczki-punktpocz" class="form-select @error('punktpocz') is-invalid @enderror " name="punktpocz"
                            value="{{ old('punktpocz')}}">
                            @forelse ($punkty as $punkt)
                                <option name="punktpocz" value="{{ $punkt->id }}">{{ $punkt->nazwa }}</option>  
                            @empty
                                
                            @endforelse
                        
                            </select>
        
                            @error('punktpocz')
                            <div class="" role="alert">
                                <strong> {{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>  
                    
                    <div class="row mb-3">
                        <label for="wycieczki-punktkon" class="col-sm-2">
                            {{__('translations.wycieczki.attribute.punktkon')}}
                        </label>
                    <div class="col-sm-10">
                            <select id="wycieczki-punktkon" class="form-select @error('punktkon') is-invalid @enderror " name="punktkon"
                            value="{{ old('punktkon')}}">
                            @forelse ($punkty as $punkt)
                                <option name="punktkon" value="{{ $punkt->id }}">{{ $punkt->nazwa }}</option>  
                            @empty
                                
                            @endforelse
                        
                            </select>
        
                            @error('punktkon')
                            <div class="" role="alert">
                                <strong> {{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="wycieczki-status" class="col-sm-2 col-form-label">
                            {{ __('translations.wycieczki.attribute.status') }}
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                            id="wycieczki-status" value="{{ old('status') }}">
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>                    
                    </div>   --}}

                </select>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>                    
                    </div>

                    <div class="d-flex justify-content-end mb-3 ">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            {{-- {{ route('wycieczki.index') }} --}}
                            <a href="" type="submit" class="btn btn-primary m-1">
                                {{ __('translations.buttons.cancel') }}
                            </a>
                            <button type="submit" class="btn btn-primary m-1">
                                {{ __('translations.buttons.store') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>