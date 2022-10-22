<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitude;

class HomeController extends Controller
{

    public function index(){
        return view('home.index', []);
    }

    public function request(Request $request){
        $parameters['mode'] = $request->mode;
        $parameters['submode'] = $request->submode;
        $parameters['form'] = $request->form;

        $show['mode'] = 'd-none';
        $show['submode'] = 'd-none';
        $show['form'] = 'd-none';

        if ($parameters['mode'] == 1) {
            $show['mode'] = '';
        }
        else if($parameters['submode'] == 1){
            $show['submode'] = '';
        }
        else{
            $show['form'] = '';
        }

        return view('home.request', ['parameters' => $parameters, 'show' => $show]);
    }

    public function send(Request $request){
        if ($request->mode == 1) {
            $request->validate([
                'modeSelect1' => 'required',
                'modePart1Input1' => 'required'
            ]);
        }
        if ($request->submode == 1) {
            $request->validate([
                'submodeSelect1' => 'required',
                'submodePart1Input1' => 'required',
            ]);
        }
        $request->validate([
            'form' => 'required',
            'mode' => 'required',
            'submode' => 'required',

            'rqFormInput1' => 'required',
            'rqFormSelect1' => 'required'
        ]);

        $modePart1Date1 = $request->modePart1Date1Day . '/' . $request->modePart1Date1Month . '/' . $request->modePart1Date1Year;
        $submodePart1Date1 = $request->submodePart1Date1Day . '/' . $request->submodePart1Date1Month . '/' . $request->submodePart1Date1Year;

        $solicitude = new Solicitude();
        $solicitude->form = $request->form;
        $solicitude->mode = $request->mode;
        $solicitude->submode = $request->submode;

        $solicitude->modeSelect1 = $request->modeSelect1;
        $solicitude->modePart1Input1 = $request->modePart1Input1;

        $solicitude->submodeSelect1 = $request->submodeSelect1;
        $solicitude->submodePart1Input1 = $request->submodePart1Input1;

        $solicitude->rqFormInput1 = $request->rqFormInput1;
        $solicitude->rqFormSelect1 = $request->rqFormSelect1;
        $solicitude->rqFormDate1Day = $request->rqFormDate1Day;
        $solicitude->rqFormDate1Month = $request->rqFormDate1Month;
        $solicitude->rqFormDate1Year = $request->rqFormDate1Year;

        $solicitude->save();

        $save = Solicitude::latest('id')->first();
        $id = $save->id;

        return redirect()->route('home')->with('success', $id);
    }

    public function search(Request $request){
        $id = $request->searchID;

        if ($id == null) {
            $id = "";
            $solicitude = "";
        }
        else{
            $solicitude = Solicitude::find($id);
        }

        return view('home.search', ['id' => $id, 'solicitude' => $solicitude]);
    }

}
