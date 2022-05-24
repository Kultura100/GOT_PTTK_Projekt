<?php

namespace App\Http\Controllers;

use App\Models\Zdjecia;
use App\Models\Wycieczka;
use App\Models\Ksiazeczka;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use Illuminate\Support\Facades\Auth;

class OsiagnieciaController extends Controller
{
    public function index()
    {
        return view('osiagniecia.index', [
            'ksiazeczka' => Ksiazeczka::where('id_turysty', Auth::user()->id)->first(),
            'odznaka' => Odznaka_Turysty::where('id_turysty', Auth::user()->id)->orderBy('id_odznaki', 'ASC')->get(),
        ]);
    }

    public function search(Request $request)
    { //naprawic 
        
        if ($request->ajax()) {
            $output = "";
            $ksiazeczka = Ksiazeczka::join('ksiazeczka_wycieczka', function($builder){
                $builder->on('ksiazeczka_wycieczka.id_ksiazeczki', '=', 'ksiazeczka.id');
            })->join('wycieczka', function($builder) {
                $builder->on('wycieczka.id', '=', 'ksiazeczka_wycieczka.id_wycieczki');
            })->where('nazwa', 'LIKE', '%'.$request->search.'%')->get();
            //dd($ksiazeczka);
            if ($ksiazeczka) {
                foreach ($ksiazeczka as $wycieczka) {
                    $output .= '
                        <div class="col-6">
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    <!-- tutaj zdjęcie -->
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left">'.$wycieczka->jakawycieczka->nazwa.'</h5>
                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-pin mr-2"></i> lokalizacja &nbsp&nbsp&nbsp
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-time mr-2"></i>'.$wycieczka->jakawycieczka->dataod.' do '.$wycieczka->jakawycieczka->datado.'
                                        </li>&nbsp&nbsp
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-parking mr-2"> </i>'.$wycieczka->jakawycieczka->punkty.'
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                return Response($output);
            }
        }
    }
    public function szczegoly($id)
    {    
        $wycieczkiSzczeg = Wycieczka::find($id);         
        return view('osiagniecia.szczegoly', compact('wycieczkiSzczeg')        
    );
    }

    public function dodajzdjecie(Request $request)
    {  
        $request->validate([
            'id_tworcy' => 'required',
            'id_wycieczka' => 'required',
            'zrodlo_zdjecia' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
  
        $input = $request->all();
  
        if ($image = $request->file('zrodlo_zdjecia')) {
            $destinationPath = 'zrodlo_zdjecia/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['zrodlo_zdjecia'] = "$profileImage";
        }
    
        Zdjecia::create($input);
     
        return redirect()->route('osiagniecia.index')
            ->with('success','Product created successfully.');        
    
    }
}
