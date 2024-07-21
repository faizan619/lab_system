<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Test;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //yaha test id pass karna
        return view('parameter.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tests = Test::with('para')->get();
        $countofpara = Test::with('para')->count();
        return view('parameter.view',compact('tests','countofpara'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Parameter $parameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parameter $parameter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parameter $parameter)
    {
        //
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $tests = [];
    //     if($query !== "") {
    //         $tests = Test::with('para')->where('test_name', 'LIKE', "%{$query}%")
    //                         ->orWhere('test_price', 'LIKE', "%{$query}%")->get();
    //     }
    //     else{
    //         $tests = Test::with('para')->get();
    //     }
    //     return view('table.parameter', compact('tests'));
    // }
}
