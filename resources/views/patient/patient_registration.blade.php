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
                        <span class="">
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
                        <span class="">
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
                        <span class="">
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
                        <span class="">
                            @error('fname')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label title="Middle Name" for="mname" class="form-label">Middle Name</label>
                    <input type="text" name="mname" value="{{ old('mname') }}" class="form-control" placeholder="Middle Name" id="mname">
                    @if ($errors->any())
                        <span class="">
                            @error('mname')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label title="Last Name" for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" value="{{old('lname')}}" class="form-control" placeholder="Last Name" id="lname">
                        @if ($errors->any())
                            <span class="">
                                @error('lname')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                </div>
            </div>
            <div class="row py-1 px-3">
                <div class="col-md-3 border">
                    <label title="Date Of Birth" for="dob" class="">
                        <p>D.O.B <span class="text-danger">*</span></p>
                        <input type="date" name="dob" id="dob" value="{{old('dob')}}" class="form-control">
                        @if ($errors->any())
                            <span class="">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    </label>
                </div>
                <div class="col-md-3 border">col 3</div>
                <div class="col-md-3 border">col 3</div>
                <div class="col-md-3 border">col 3</div>
            </div>
            <div>forth div</div>
            <div>fifth div</div>
        </form>

    </div>
    {{-- <div class="flex justify-center mt-3">
        <div class="w-[70%]">
            <h1 class="font-bold text-2xl text-center text-blue-600 mb-2">Patient Registration</h1>

            <hr class="border-blue-500">
            <form action="{{ route('store') }}" method="POST" class="w-full flex flex-col gap-3 p-1">
                @csrf
                <div class="flex gap-5 ">
                    <div class="flex gap-3">
                        <label title="Patient Id" for="patient_no" class="flex flex-col gap-1">
                            <p class="font-semibold">Patient's id</p>
                            <input type="number" disabled value="{{$data}}"
                                class="cursor-not-allowed bg-gray-300 p-1 w-40 rounded-md px-2">
                        </label>
                        <label title="Card type" for="id_type" class="flex flex-col gap-1">
                            <p>Select Id Type</p>
                            <select name="user_id_type" id="id_type" class="p-1 w-40 px-2 border rounded-md" required>
                                <option value="aadhar">Aadhar Card</option>
                                <option value="pan">Pan Card</option>
                            </select>
                            @if ($errors->any())
                                <span class="text-red-700 rounded-md  text-sm ">
                                    @error('user_id_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </label>
                    </div>

                    <div class="flex-1">
                        <label title="Card Number" for="aadhar" class="w-full flex flex-col gap-1">
                            <p>Enter Card Number<span class="text-red-800">*</span></p>
                            <input type="text" name="user_card_no" value="{{old('user_card_no')}}" id="aadhar" placeholder="**** **** 6244"
                                class="p-1 px-2 border rounded-md">


                            @if ($errors->any())
                                <span class="text-red-700 rounded-md  text-sm ">
                                    @error('user_card_no')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                    </div>
                </div>

                <div class="flex gap-5">
                    <label title="User Title" for="title" class="w-24 flex flex-col gap-1">
                        <p class="font-semibold">Title<span class="text-red-800 ">*</span></p>
                        <select name="title" id="title" class="p-1 px-2 border rounded-md" required>
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                        </select>

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    </label>
                    <div class="flex w-full gap-3">
                        <label title="First Name" for="fname" class="font-semibold flex flex-col gap-1">
                            <p>First Name<span class="text-red-800 ">*</span></p>
                            <input type="text" name="fname" value="{{old('fname')}}" class="border w-52 p-1 px-2 rounded-md" placeholder="First Name"
                                id="fname">

                            @if ($errors->any())
                                <span class="text-red-700 rounded-md  text-sm ">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                        <label title="Middle Name" for="mname" class="font-semibold flex flex-col gap-1">
                            <p>Middle Name</p>
                            <input type="text" name="mname" value="{{old('mname')}}" class="border w-52 p-1 px-2 rounded-md"
                                placeholder="Middle Name" id="mname">

                            @if ($errors->any())
                                <span class="text-red-700 rounded-md  text-sm ">
                                    @error('mname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                        <label title="Last Name" for="lname" class="font-semibold flex flex-col gap-1">
                            <p>Last Name</p>
                            <input type="text" name="lname" value="{{old('lname')}}" class="border p-1 px-2 w-52 rounded-md" placeholder="Last Name"
                                id="lname">

                            @if ($errors->any())
                                <span class="text-red-700 rounded-md  text-sm ">
                                    @error('lname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                    </div>
                </div>


                <div class="flex gap-5">
                    <label title="Date Of Birth" for="dob" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>D.O.B <span class="text-red-800">*</span></p>
                        <input type="date" name="dob" id="dob" value="{{old('dob')}}" class="border p-1 px-2 rounded-md">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label title="Age" for="age" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Age<span class="text-red-800">*</span></p>
                        <input type="number" name="age" id="age" value="{{old('age')}}" class="border w-52 p-1 px-2 rounded-md"
                            placeholder="Age">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('age')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label title="Gender" for="sex" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Sex<span class="text-red-800">*</span></p>
                        <select name="gender" id="sex" class="p-1 px-2 border rounded-md" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label title="Mobile Number1" for="mobile" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Mobile<span class="text-red-800">*</span></p>
                        <input type="number" name="mobile1" value="{{old('mobile1')}}" id="mobile" class="border w-52 p-1 px-2 rounded-md"
                            placeholder="Mobile">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('mobile1')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                </div>


                <div class="flex gap-5">
                    <label title="Mobile Number2" for="anumber" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Alternative Number</p>
                        <input type="number" name="mobile2" value="{{old('mobile2')}}" id="anumber" class="border w-40 p-1 px-2 rounded-md"
                            placeholder="Number">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('mobile2')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label title="Blood Group" for="blood_group" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Blood Group</p>
                        <select name="blood_group" id="blood_group" class="p-1 px-2 border rounded-md" required>
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
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('blood_group')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label title="Email" for="email" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Email</p>
                        <input type="email" name="email" id="email" value="{{old('email')}}" class="border w-52 p-1 px-2 rounded-md"
                            placeholder="Email">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>

                    <label title="Area" for="area" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Area<span class="text-red-800 ">*</span></p>
                        <input type="text" name="area" id="area" value="{{old('area')}}" class="border w-52 p-1 px-2 rounded-md"
                            placeholder="Area">

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('area')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                </div>
                <div>
                    <label title="Address" for="address" class="flex-1 font-semibold flex flex-col gap-1">
                        <p>Address</p>
                        <textarea name="address" id="address" value="{{old('address')}}" class="border rounded-md p-1 px-2 w-full"></textarea>

                        @if ($errors->any())
                            <span class="text-red-700 rounded-md  text-sm ">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                </div>
                <div>
                    <button type="submit"
                        class="border bg-blue-600 px-7 hover:bg-blue-700 py-2 rounded-md text-white">Submit</button>
                    <button type="reset"
                        class="border bg-red-600 px-7 hover:bg-red-700 py-2 rounded-md text-white">Reset</button>
                </div>

            </form>
        </div>
    </div> --}}
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

@section('headFile')
@endsection

@section('scriptFile')
@endsection
