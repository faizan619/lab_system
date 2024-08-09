<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patientdata = Patient::all();
        return view('patient.view_patient',compact('patientdata'));
    }

    public function create()
    {
        $data1 = Patient::count();
        $data = $data1 +1;
        return view('patient.patient_registration',compact('data'));
    }

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
            'mobile1'=> 'required|string|regex:/^\+?[9,8,7]\d{1,14}$/',
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
    }

    public function show(Patient $patient)
    {
        //
    }

    public function edit(Patient $patient)
    {
        //
    }

    public function update(Request $request, Patient $patient)
    {
        //
    }

    public function destroy(Patient $patient)
    {
        //
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $data = [];

    //     if($query !== "") {
    //         // $data = Department::where('department_name', 'LIKE', "%{$query}%")->get();
    //         $data = Patient::where('user_card_no', 'LIKE', "%{$query}%")
    //                         ->orWhere('mobile1', 'LIKE', "%{$query}%")
    //                         ->orWhere('user_id_type', 'LIKE', "%{$query}%")
    //                         ->orWhere('mname', 'LIKE', "%{$query}%")
    //                         ->orWhere('age', 'LIKE', "%{$query}%")
    //                         ->orWhere('gender', 'LIKE', "%{$query}%")
    //                         ->orWhere('blood_group', 'LIKE', "%{$query}%")
    //                         ->orWhere('area', 'LIKE', "%{$query}%")
    //                         ->orWhere('register_date', 'LIKE', "%{$query}%")
    //                         ->orWhere('fname', 'LIKE', "%{$query}%")->paginate(5);
    //     }
    //     else{
    //         $data = Patient::all();
    //     }

    //     return view('table.patient', compact('data'));
    // }
}
