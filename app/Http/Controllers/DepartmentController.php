<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Support\Facades\Log;

class DepartmentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $all = Department::all();
       $all = Department::paginate(intval(env('PAGESIZE')));
        $countryarray = ['bangladesh','india'];
    //    dd($countryarray);
        //echo "index called";
        Log::info("***Someone visited Departments at" . date("Y-m-d H:i:s a"));
        Log::info('Just an informational message.');
        Log::warning('Something may be going wrong.');
        Log::error('Something is definitely going wrong.');
        Log::critical('Danger, Will Robinson! Danger!');
        return view('department.index',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        echo "create called";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentRequest $request)
    {
        echo "store called";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        echo "show called. Name:  ". $department->name;
        echo "<br>Description:  ". $department->description;
        echo "<br>Phone:  ". $department->phone;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        echo "Edit called. Name:  ". $department->name;
        echo "<br>Description:  ". $department->description;
        echo "<br>Phone:  ". $department->phone;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentRequest  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        echo "update called";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        echo "delete called";
    }

    function morefx(){
        echo "another function/route called";
    }
    function sq($n="-1"){
        if($n=="-1"){ echo "value den"; return;}
        echo $n*$n;
    }
    function text($n){
        echo "Testing $n";
    }
}
