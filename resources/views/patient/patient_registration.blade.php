@extends('masterLayout')

@section('title')
    Home |
@endsection

@section('content')
    <div class="container pt-3">
        <h5 class="lead">Patient Registration</h5>
        <div class="dropdown-divider border-primary"></div>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="row py-1 px-3">
                <div title="Patient Id : {{ $data }}" class="col-md-2">
                    <label for="patient_no" class="form-label">Patient's id</label>
                    <input type="number" disabled value="{{ $data }}" id="patient_no" class="form-control">
                </div>
                <div class="col-md-4 ">
                    <label title="Card type" for="id_type" class="form-label">Select Id Type</label>
                    <select name="user_id_type" id="id_type" class="form-control" required>
                        <option value="aadhar">Aadhar Card</option>
                        <option value="pan">Pan Card</option>
                    </select>
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('user_id_type')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-6 ">
                    <label title="Card Number" for="aadhar" class="form-label">
                        Enter Card Number
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="user_card_no" value="{{ old('user_card_no') }}" id="aadhar"
                        placeholder="**** **** 6244" class="form-control">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('user_card_no')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif


                </div>
            </div>
            <div class="row py-1 px-3">
                <div class="col-md-1">
                    <label title="User Title" for="title" class="form-label">
                        Title<span class="text-danger ">*</span>
                    </label>
                    <select name="title" id="title" class="form-control" required>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                    </select>
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label title="First Name" for="fname" class="form-label">
                        First Name<span class="text-danger">*</span>
                    </label>
                    <input type="text" name="fname" value="{{ old('fname') }}" class="form-control"
                        placeholder="First Name" id="fname">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('fname')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label title="Middle Name" for="mname" class="form-label">Middle Name</label>
                    <input type="text" name="mname" value="{{ old('mname') }}" class="form-control"
                        placeholder="Middle Name" id="mname">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('mname')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Last Name" for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" value="{{ old('lname') }}" class="form-control"
                        placeholder="Last Name" id="lname">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('lname')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
            </div>
            <div class="row py-1 px-3">
                <div class="col-md-3">
                    <label title="Date Of Birth" for="dob" class="">
                        D.O.B <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('dob')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Age" for="age" class="form-label">
                        Age
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="age" id="age" value="{{ old('age') }}"
                        class="form-control" placeholder="Age">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('age')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Gender" for="sex" class="form-label">Sex<span
                            class="text-danger">*</span></label>
                    <select name="gender" id="sex" class="form-control" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Mobile Number1" for="mobile" class="form-label">Mobile<span
                            class="text-danger">*</span></label>
                    <input type="number" name="mobile1" value="{{ old('mobile1') }}" id="mobile"
                        class="form-control" placeholder="Mobile">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('mobile1')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
            </div>
            <div class="row py-1 px-3">
                <div class="col-md-3">
                    <label title="Mobile Number2" for="anumber" class="form-label">Alternative Number</label>
                    <input type="number" name="mobile2" value="{{ old('mobile2') }}" id="anumber"
                        class="form-control" placeholder="Number">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('mobile2')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Blood Group" for="blood_group" class="form-label">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="form-control" required>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('blood_group')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Email" for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control" placeholder="Email">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Area" for="area" class="form-label">Area<span
                            class="text-danger">*</span></label>
                    <input type="text" name="area" id="area" value="{{ old('area') }}"
                        class="form-control" placeholder="Area">
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('area')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
            </div>
            <div class="row py-1 px-3">
                <div class="col-md-12">
                    <label title="Address" for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" value="{{ old('address') }}" class="form-control"></textarea>
                    @if ($errors->any())
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
            </div>
            <div class="row py-1 px-3">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-outline-danger ml-3">Reset</button>
            </div>
        </form>

    </div>
@endsection

{{-- Showing active on side start --}}
@section('menuopenreception')
    menu-open
@endsection
@section('activereception')
    active
@endsection
@section('patientregistrationactive')
    active
@endsection
{{-- till here active showing part ends --}}

