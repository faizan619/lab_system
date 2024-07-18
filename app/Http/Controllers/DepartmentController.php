<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Department::all();
        $data = Department::paginate(5);
        return view('department.view_main',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("department.create_main");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "department_name"=> "required",
        ]);

        $data = new Department();
        $data->department_name = $request->department_name;
        $data->save();
        return redirect()->route('dept.index')->with("status","Department Added Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::destroy($id);
        return redirect()->route('dept.index');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $data = [];

        if($query !== "") {
            // $data = Department::where('department_name', 'LIKE', "%{$query}%")->get();
            $data = Department::where('department_name', 'LIKE', "%{$query}%")->paginate(5);
        }
        else{
            $data = Department::all();
        }

        return view('table.maindept', compact('data'));
    }
}
