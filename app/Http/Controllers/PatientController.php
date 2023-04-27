<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $datos['listPatients']=Patient::paginate(5);
        // return view('patients.index', $datos);
        return view('patients.index');
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
        $datosPatients=$request->except(['_token','_method']);
        Patient::insert($datosPatients);
        // return response()-> json($datosPatients);
        // $datos['patients'] = response()-> json($datosPatients);
        $datos['patients'] = Patient::paginate(100);
        return view('patients.listsPatients',$datos);
        
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
        $data['patients']=Patient::all();
        // $datos['patients']= response()->json($data['patients']);
        return view('patients.listsPatients',$data);
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
        $patient=Patient::findOrFail($id);

        return view('patients.editPatients', compact('patient'));

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
        $datosPatients=$request->except(['_token','_method']);
        Patient::where('id','=',$id)->update($datosPatients);

        $patient=Patient::findOrFail($id);

        return view('patients.editPatients', compact('patient'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Patient::destroy($id);
        $data['patients']=Patient::all();
        return view('patients.listsPatients',$data);
    }
}
