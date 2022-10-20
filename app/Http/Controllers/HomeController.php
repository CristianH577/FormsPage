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

        return view('home.request', ['form' => $form, 'd1' => $d1, 'd2' => $d2, 'd3' => $d3]);
    }

}
