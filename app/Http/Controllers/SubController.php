<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table("subs")->get();
        $data = Sub::all();
        return view('department.view_sub',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dept = DB::table("departments")->get();
        return view("department.create_sub",compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_department_name'=> 'required',
            'dept_id'=> 'required|numeric',
        ]);
        $sub = new Sub();
        $sub->sub_department_name = $request->sub_department_name;
        $sub->dept_id = $request->dept_id;
        $sub->save();
        return redirect()->route('dept.index')->with('status','Sub Department Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
