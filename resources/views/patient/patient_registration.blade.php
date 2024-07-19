@extends('masterLayout')

@section('title')
    Home |
@endsection

@section('body')
    <div class="flex justify-center mt-5">
        <div class="w-[80%]">
            <div>
                <h1 class="font-bold text-2xl text-center text-blue-600 mb-2">Patient Registration</h1>
            </div>
            <hr class="border-blue-500">
            <br>
            <form action="{{ route('store') }}" method="POST" class="w-full flex flex-col gap-3 p-1">
                @csrf
                <div class="flex gap-5">
                    <div class="flex gap-3 flex-1">
                        <label for="patient_no" class="w-full flex flex-col gap-2">
                            <p class="font-semibold">Patient's id</p>
                            <input type="number" disabled value="1"
                                class="cursor-not-allowed bg-gray-300 p-1 rounded-md px-2 border">
                        </label>
                        <label for="id_type" class="w-full flex flex-col gap-2">
                            <p>Select Id Type</p>
                            <select name="user_id_type" id="id_type" class="p-1 px-2 border  rounded-md" required>
                                <option value="aadhar">Aadhar Card</option>
                                <option value="pan">Pan Card</option>
                            </select>
                            @if ($errors->any())
                                <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                    @error('user_id_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </label>
                    </div>

                    <div class="flex-1">
                        <label for="aadhar" class="w-full flex flex-col gap-2">
                            <p>Enter Card Number<span class="text-red-800">*</span></p>
                            <input type="text" name="user_card_no" value="{{old('user_card_no')}}" id="aadhar" placeholder="**** **** 6244"
                                class="p-1 px-2 border rounded-md">


                            @if ($errors->any())
                                <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                    @error('user_card_no')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                    </div>
                </div>

                <div class="flex gap-5">
                    <label for="title" class="w-24 flex flex-col gap-2">
                        <p class="font-semibold">Title<span class="text-red-800 ">*</span></p>
                        <select name="title" id="title" class="p-1 px-2 border rounded-md" required>
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                        </select>

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <div class="flex w-full gap-3">
                        <label for="fname" class="flex-1 font-semibold flex flex-col gap-2">
                            <p>First Name<span class="text-red-800 ">*</span></p>
                            <input type="text" name="fname" value="{{old('fname')}}" class="border p-1 px-2 rounded-md" placeholder="First Name"
                                id="fname">

                            @if ($errors->any())
                                <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                        <label for="mname" class="flex-1 font-semibold flex flex-col gap-3">
                            <p>Middle Name</p>
                            <input type="text" name="mname" value="{{old('mname')}}" class="border p-1 px-2 rounded-md"
                                placeholder="Middle Name" id="mname">

                            @if ($errors->any())
                                <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                    @error('mname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                        <label for="lname" class="flex-1 font-semibold flex flex-col gap-3">
                            <p>Last Name</p>
                            <input type="text" name="lname" value="{{old('lname')}}" class="border p-1 px-2 rounded-md" placeholder="Last Name"
                                id="lname">

                            @if ($errors->any())
                                <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                    @error('lname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif


                        </label>
                    </div>
                </div>


                <div class="flex gap-5">
                    <label for="dob" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>D.O.B <span class="text-red-800">*</span></p>
                        <input type="date" name="dob" id="dob" value="{{old('dob')}}" class="border p-1 px-2 rounded-md">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label for="age" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Age<span class="text-red-800">*</span></p>
                        <input type="number" name="age" id="age" value="{{old('age')}}" class="border p-1 px-2 rounded-md"
                            placeholder="Age">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('age')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label for="sex" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Sex<span class="text-red-800">*</span></p>
                        <select name="gender" id="sex" class="p-1 px-2 border rounded-md" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label for="mobile" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Mobile<span class="text-red-800">*</span></p>
                        <input type="number" name="mobile1" value="{{old('mobile1')}}" id="mobile" class="border p-1 px-2 rounded-md"
                            placeholder="Mobile">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('mobile1')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                </div>


                <div class="flex gap-5">
                    <label for="anumber" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Alternative Number</p>
                        <input type="number" name="mobile2" value="{{old('mobile2')}}" id="anumber" class="border p-1 px-2 rounded-md"
                            placeholder="Number">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('mobile2')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label for="blood_group" class="flex-1 font-semibold flex flex-col gap-2">
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
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('blood_group')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                    <label for="email" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Email</p>
                        <input type="email" name="email" id="email" value="{{old('email')}}" class="border p-1 px-2 rounded-md"
                            placeholder="Email">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>

                    <label for="area" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Area<span class="text-red-800 ">*</span></p>
                        <input type="text" name="area" id="area" value="{{old('area')}}" class="border p-1 px-2 rounded-md"
                            placeholder="Area">

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
                                @error('area')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif


                    </label>
                </div>
                <div>
                    <label for="address" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Address</p>
                        <textarea name="address" id="address" value="{{old('address')}}" class="border rounded-md p-1 px-2 w-full"></textarea>

                        @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-sm ">
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
    </div>
@endsection
