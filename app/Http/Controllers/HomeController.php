<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Home;

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
        $request->validate([
            'data1Select1' => 'required',
            'data1Part1Input1' => 'required',

            'data2Select1' => 'required',
            'data2Part1Input1' => 'required',
            'data2Part1Select1' => 'required',
            'data2Part1Input2' => 'required',
            
            'data3Input1' => 'required',
            'data3Select1' => 'required',
            'data3Input2' => 'required'
        ]);

        $data1Part1Date1 = $request->data1Part1Date1Day . '/' . $request->data1Part1Date1Month . '/' . $request->data1Part1Date1Year;
        $data2Part1Date1 = $request->data2Part1Date1Day . '/' . $request->data2Part1Date1Month . '/' . $request->data2Part1Date1Year;

        $rq = new Request();
        $request->form = $request->form;
        $request->mode = $request->mode;
        $request->submode = $request->submode;

        $request->data1Select1 = $request->data1Select1;
        $request->data1Part1Input1 = $request->data1Part1Input1;
        $request->data1Part1Date1 = $data1Part1Date1;
        $request->data1Part1Select1 = $request->data1Part1Select1;
        $request->data1Part1Input2 = $request->data1Part1Input2;

        $request->data2Select1 = $request->data2Select1;
        $request->data2Part1Input1 = $request->data2Part1Input1;
        $request->data2Part1Date1 = $data2Part1Date1;
        $request->data2Part1Select1 = $request->data2Part1Select1;
        $request->data2Part1Input2 = $request->data2Part1Input2;

        $request->data3Input1 = $request->data3Input1;
        $request->data3Select1 = $request->data3Select1;
        $request->data3Input2 = $request->data3Input2;

        dd($request);
    }

}
