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
        $form = $request->form;
        $mode = $request->mode;
        $submode = $request->submode;

        $d1 = $d2 = $d3 ='d-none';
        if ($mode == 1) {
            $d1 = '';
        }else if($submode == 1){
            $d2 = '';
        }else{
            $d3 = '';
        }

        return view('home.request', ['form' => $form, 'mode' => $mode, 'submode' => $submode, 'd1' => $d1, 'd2' => $d2, 'd3' => $d3]);
    }

    public function send(Request $request){
        if ($request->mode == 1) {
            $request->validate([
                'data1Select1' => 'required',
                'data1Part1Input1' => 'required'
            ]);
        }
        if ($request->submode == 1) {
            $request->validate([
                'data2Select1' => 'required',
                'data2Part1Input1' => 'required',
            ]);
        }
        $request->validate([
            'form' => 'required',
            'mode' => 'required',
            'submode' => 'required',

            'data3Input1' => 'required',
            'data3Select1' => 'required',
            'data3Input2' => 'required'
        ]);

        $data1Part1Date1 = $request->data1Part1Date1Day . '/' . $request->data1Part1Date1Month . '/' . $request->data1Part1Date1Year;
        $data2Part1Date1 = $request->data2Part1Date1Day . '/' . $request->data2Part1Date1Month . '/' . $request->data2Part1Date1Year;

        $solicitude = new Solicitude();
        $solicitude->form = $request->form;
        $solicitude->mode = $request->mode;
        $solicitude->submode = $request->submode;

        $solicitude->data1Select1 = $request->data1Select1;
        $solicitude->data1Part1Input1 = $request->data1Part1Input1;
        $solicitude->data1Part1Date1 = $data1Part1Date1;

        $solicitude->data2Select1 = $request->data2Select1;
        $solicitude->data2Part1Input1 = $request->data2Part1Input1;
        $solicitude->data2Part1Date1 = $data2Part1Date1;

        $solicitude->data3Input1 = $request->data3Input1;
        $solicitude->data3Select1 = $request->data3Select1;
        $solicitude->data3Input2 = $request->data3Input2;

        $solicitude->save();

        $save = Solicitude::latest('id')->first();
        $id = $save->id;

        $message = "Solicitud enviada. N° de solicitud: #$id"; 

        return redirect()->route('home')->with('success', $message);
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
        // return view('home.search', []);

        // dd($request);
    }

}
