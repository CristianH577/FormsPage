<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitude;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $results = 10;

        $parameters = $request->all();
        // unset($parameters['_token']);
        unset($parameters['page']);

        $b = 0;
        foreach ($parameters as $parameter => $value) { 
            if ($value !== null) {
                $b++;
            }
        }

        // dd($b);
        if ($b > 1) {
            $solicitudes = Solicitude::searchID($parameters['searchID'])->form($parameters['form'])->mode($parameters['mode'])->submode($parameters['submode'])->paginate($results);
        }else{
            $solicitudes = Solicitude::paginate($results);
        }

        return view('admin.index', [ 'solicitudes' => $solicitudes]);
        // 'parameters' => $parameters,
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitude = Solicitude::find($id);
        $solicitude->delete();

        return redirect()->route('admin')->with('success', 'Solicitud eliminada');
    }
}
