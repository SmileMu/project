<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use View;
use Session;
use Illuminate\Http\Request;
use App\section;
use App\Institutation;
class SectiontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert.section');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section=  Section::all();
        $inst=  Institution::all();
       
        return view('insert.section',compact('section','inst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'section_type' => 'required',
        ]);


        Section::create([
            'section_type'=>$request ->section_type,



        ]);

        return redirect()->route('section.show');

    }

    /**
     * Display the specified resource.
     *


     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

      $sections=DB::table('sections')->get();
       return View::make('show.section')->with(array('sections'=>$sections));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $se = Section::findOrFail($id);

        return view('edit.section',compact('se'));

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

        $se = Section::find($id);

        if($se->update($data)){

           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
        }
           return redirect()->route('section.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::destroy($id);
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');


        return redirect()->route('section.show');
    }
}
