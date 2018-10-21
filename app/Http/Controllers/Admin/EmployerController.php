<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerRequest;
use App\Employer;
use Session;

class EmployerController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        return view("employers.listAdminAll")->with("employers", $employers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerRequest $request)
    {
//        dd($request->all());
        $employer = new Employer($request->all());
        $employer->save();
        
        Session::flash('employer_created', 'Pracownik został zapisany w bazie');
        return redirect("/admin/employers");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.show')->with('employer', $employer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.edit')->with('employer', $employer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployerRequest $request, $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->update($request->all());
        
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();
        return redirect("/admin");
    }
}
