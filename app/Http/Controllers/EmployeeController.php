<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use View;
use App\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert.em');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee=  Employee::get();
        return view('insert.em',compact('employee'));
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

            'emp_name' =>  'required|min:3',
            'institution_name' => 'required',
            'inst_name' => 'required',
             'appation_date' => 'required',
             'age' => 'required',
            'primary_sal' => 'required',
            'email' => 'required',
        ]);

        Employee::create([
            'emp_name'=>$request ->emp_name,
            'institution_name'=>$request -> institution_id,
            'inst_name'=>$request -> institution_id,
             'appation_date'=>$request -> appation_date,
             'age'=>$request ->age,
            'primary_sal'=>$request ->primary_sal,
            'email'=>$request ->email,
        ]);

        return redirect()->route('employees.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $employees=DB::table('employees')->get();
       return View::make('show.emp')->with(array('employees'=>$employees));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::findOrFail($id);

        return view('edit.emp',compact('emp'));



    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id){


        $data = $request->except('_method','_token','submit');

        $employee = Employee::find($id);

        if($employee->update($data)){

           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
        }
           return redirect()->route('employees.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id){
        Employee::destroy($id);
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('employees.show');
    }

}
