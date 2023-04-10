<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        $data=array('employes'=>$employes);
        return view('employees.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$employes = Employe::all();
        //$data=array('employes'=>$employes);
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'department'=>'required',
            'hire_date'=>'required',
            'phone'=>'required',
            'registration_number'=>'required'|'unique:employes'|'numeric',
            'address'=>'required',
            'city'=>'required',
        ]);
        employe::create($request->except('_token'));
        return redirect()->route('employees.index')->with('success',' Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        $data=array('employe'=>$employe);
        return view('employees.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        $data=array('employe'=>$employe);
        return view('employees.edit')->with($data);
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
        $employe = Employe::where('registration_number',$id)->first();
        $this->validate($request,[
            'fullname'=>'required',
            'department'=>'required',
            'hire_date'=>'required',
            'phone'=>'required',
            'registration_number'=>'required'|'unique:employes'|'numeric',
            'address'=>'required',
            'city'=>'required',
        ]);
        $employe->update($request->except('_token', '_method'));
        return redirect()->route('employees.index')->with('success',' Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        $employe->delete();
        return redirect()->route('employees.index')->with('success',' Employee Deleted Successfully');
    }
    public function vacationrequest($id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        return view('employees.vacationrequest')->with('employe',$employe);
    }
    public function certificaterequest($id)
    {  
        $employe = Employe::where('registration_number',$id)->first();
        return view('employees.certificaterequest')->with('employe',$employe);
    }
}
