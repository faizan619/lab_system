<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Sub;
use App\Models\Test;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
        return view('test.view',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $center = Center::all();
        $sub = Sub::all();
        return view('test.create',compact('sub','center'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_dept_id'=>"required",
            "center_id"=> "required",
            "test_name"=> "required",
            "short_name"=> "required",
            "tech_name"=> "required",
            "test_price"=> "required",
            "seperate"=> "required",
        ]);

        $data = new Test();
        $data->sub_dept_id = $request->sub_dept_id;
        $data->center_id = $request->center_id;
        $data->test_name = $request->test_name;
        $data->short_name = $request->short_name;
        $data->tech_name = $request->tech_name;
        $data->test_price = $request->test_price;
        $data->seperate = $request->seperate;
        $data->save();
        return redirect()->route('test.index')->with('status','Test Data Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
    public function getData(Request $request) {
        if ($request->ajax()) {
            $data = Test::select(['id', 'test_name', 'short_name']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('test.edit', $row->id);
                    $deleteUrl = route('test.destroy', $row->id);
                    return '<div class="flex gap-5 "><a href="' . $editUrl . '"><i class="fa-solid fa-pen fa-lg"></i></a>
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline-block;">
                                ' . csrf_field() . '
                                ' . method_field("DELETE") . '
                                <i class="fa-solid fa-trash fa-lg"></i>
                            </form></div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $tests = [];

    //     if ($query !== "") {
    //         $tests = Test::where('test_name', 'LIKE', "%{$query}%")
    //             ->get();
    //     }
    //     else{
    //         $data = Test::all();
    //     }

    //     return view('test.view', compact('tests'));
    // }

}
