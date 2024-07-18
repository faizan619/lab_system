<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patientdata = Patient::all();
        return view('patient.view_patient',compact('patientdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.patient_registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id_type'=>'required',
            'user_card_no'=> 'required|alpha_num',
            'title'=> 'required',
            'fname'=> 'required',
            'lname'=> 'nullable',
            'mname'=> 'nullable',
            'dob'=> 'required|date',
            'age'=> 'required|numeric',
            'gender'=> 'required',
            'mobile1'=> 'required|numeric',
            'blood_group'=> 'required',
            'mobile2'=> 'nullable|numeric',
            'email'=> 'nullable|email',
            'area'=> 'required',
            'address'=> 'nullable',
        ]);
        $patient = new Patient();
        $patient->user_id_type = $request->user_id_type;
        $patient->user_card_no = $request->user_card_no;
        $patient->title = $request->title;
        $patient->fname = $request->fname;
        $patient->mname = $request->mname;
        $patient->lname = $request->lname;
        $patient->dob = $request->dob;
        $patient->age = $request->age;
        $patient->gender = $request->gender;
        $patient->mobile1 = $request->mobile1;
        $patient->mobile2 = $request->mobile2;
        $patient->blood_group = $request->blood_group;
        $patient->email = $request->email;
        $patient->area = $request->area;
        $patient->address = $request->address;
        $patient->save();
        return redirect()->route('index')->with('status','Data Successfully Stored!');







        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $patientdata = [];

        if ($query !== "") {
            $patientdata = Patient::where('user_card_no', 'LIKE', "%{$query}%")
                ->orWhere('mobile1', 'LIKE', "%{$query}%")
                ->orWhere('fname', 'LIKE', "%{$query}%")
                ->get();
        }
        else{
            $data = Patient::all();
        }

        return view('patient.view_patient', compact('patientdata'));
    }
}
