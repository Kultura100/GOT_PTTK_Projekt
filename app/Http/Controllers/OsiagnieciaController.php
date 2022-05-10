<?php

namespace App\Http\Controllers;

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
    {
        if ($request->ajax()) {
            $output = "";
            $ksiazeczka = Ksiazeczka::where('id_turysty', Auth::user()->id)->first();
            
            if ($ksiazeczka) {
                foreach ($ksiazeczka->ksiazeczkawycieczki as $wycieczka) {
                    $wycieczka->jakawycieczka->where(['nazwa', 'LIKE', '%'.$request->search.'%'])->get();
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
}
