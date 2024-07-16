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
            <form action="" method="POST" class="w-full flex flex-col gap-7 p-2">
                <div class="flex gap-5">

                    <div class="flex gap-3 flex-1">
                        <label for="patient_no" class="w-full flex flex-col gap-2">
                            <p class="font-semibold">Patient's id</p>
                            <input type="number" disabled value="1" class="cursor-not-allowed bg-gray-300 p-1 rounded-md px-2 border">
                        </label>
                        <label for="id_type" class="w-full flex flex-col gap-2">
                            <p>Select Id Type</p>
                            <select name="user_id_type" id="id_type" class="p-1 px-2 border  rounded-md" required>
                                <option value="aadhar">Aadhar Card</option>
                                <option value="pan">Pan Card</option>
                            </select>
                        </label>
                    </div>

                    <div class="flex-1">
                        <label for="aadhar" class="w-full flex flex-col gap-2">
                            <p>Enter Card Number<span class="text-red-800">*</span></p>
                            <input type="text" name="user_card_no" id="aadhar" placeholder="**** **** 6244" class="p-1 px-2 border rounded-md">
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
                    </label>
                    <div class="flex w-full gap-3">
                        <label for="fname" class="flex-1 font-semibold flex flex-col gap-2">
                            <p>First Name<span class="text-red-800 ">*</span></p>
                            <input type="text" name="fname" class="border p-1 px-2 rounded-md" placeholder="First Name" id="fname">
                        </label>
                        <label for="mname" class="flex-1 font-semibold flex flex-col gap-3">
                            <p>Middle Name</p>
                            <input type="text" name="mname" class="border p-1 px-2 rounded-md" placeholder="Middle Name" id="mname">
                        </label>
                        <label for="lname" class="flex-1 font-semibold flex flex-col gap-3">
                            <p>Last Name</p>
                            <input type="text" name="lname" class="border p-1 px-2 rounded-md" placeholder="Last Name" id="lname">
                        </label>
                    </div>
                </div>


                <div class="flex gap-5">
                    <label for="dob" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>D.O.B <span class="text-red-800">*</span></p>
                        <input type="date" name="dob" id="dob" class="border p-1 px-2 rounded-md">
                    </label>
                    <label for="age" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Age</p>
                        <input type="number" name="age" id="age" class="border p-1 px-2 rounded-md" placeholder="Age">
                    </label>
                    <label for="sex" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Sex</p>
                        <select name="gender" id="sex" class="p-1 px-2 border rounded-md" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </label>
                    <label for="mobile" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Mobile<span class="text-red-800">*</span></p>
                        <input type="number" max="10" name="mobile1" id="mobile" class="border p-1 px-2 rounded-md" placeholder="Mobile">
                    </label>
                </div>


                <div class="flex gap-5">
                    <label for="anumber" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Alternative Number</p>
                        <input type="number" name="mobile2" id="anumber" class="border p-1 px-2 rounded-md" placeholder="Number">
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
                    </label>
                    <label for="email" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Email</p>
                        <input type="email" name="email" id="email" class="border p-1 px-2 rounded-md" placeholder="Email">
                    </label>
                    
                    <label for="area" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Area<span class="text-red-800 ">*</span></p>
                        <input type="text" name="area" id="area" class="border p-1 px-2 rounded-md" placeholder="Area">
                    </label>
                </div>
                <div>
                    <label for="address" class="flex-1 font-semibold flex flex-col gap-2">
                        <p>Address</p>
                        <textarea name="address" id="address" class="border rounded-md p-1 px-2 w-full"></textarea>
                    </label>
                </div>
                <div>
                    <button type="submit" class="border bg-blue-600 px-7 hover:bg-blue-700 py-2 rounded-md text-white">Submit</button>
                    <button type="reset" class="border bg-red-600 px-7 hover:bg-red-700 py-2 rounded-md text-white">Reset</button>
                </div>

            </form>
        </div>
    </div>
@endsection
