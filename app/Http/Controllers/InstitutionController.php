<?php

namespace App\Http\Controllers;
use App\Institution;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Institutation;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert.inst');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inst=  Institution::get();
        return view('insert.inst',compact('inst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
    {
        $validatedData = $request->validate([

            'inst_name' =>  'required|min:3',
            'found_year' => 'required',
            'inst_type' => 'required',
             'section_name' => 'required',
             'location' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
        ]);

        Institution::create([
            'inst_name'=>$request ->inst_name,
            'found_year'=>$request ->found_year,
            'type_name'=>$request ->type_id,
            'section_name'=>$request ->section_id,
            'location'=>$request ->location,
            'phone_no'=>$request ->phone_no,
            'email'=>$request ->email,



        ]);
        return redirect()->route('inst.show');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inst = DB::table('institutions')->get();
        return View::make('show.inst')->with(array('institutions'=>$inst));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $inst = Institution::findOrFail($id);

        return view('edit.inst',compact('inst'));

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

        $data = $request->except('_method','_token','submit');



        $inst = Institution::find($id);

        if($inst->update($data)){

           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
        }
           return redirect()->route('inst.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Institution::destroy($id);
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');


        return redirect()->route('inst.show');
    }
}
