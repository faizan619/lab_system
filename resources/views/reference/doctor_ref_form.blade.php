@extends('masterLayout')

@section('title')
    Doctor Reference |
@endsection

@section('body')
    <div class="flex justify-center items-center ">
        <div class="w-[30%] mt-3">
            <h1 class="text-center text-2xl font-semibold">Create Doctor Reference</h1>
            <hr class="border-blue-800"/>
            @if (session('status'))
                    <p class="text-red-600 text-lg capitalize text-center">
                        {{ session('status') }}
                    </p>
                @endif
            <form action="{{route('doctor_data')}}" method="POST" class="flex flex-col gap-3 py-5">
                @csrf
                <label for="name" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Full Name<span class="text-red-800">*</span></p>
                    <input type="text" class="p-2 border rounded-md w-full" autofocus name="name" id="name" value="{{old('name')}}" placeholder="Enter Doctor Name">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="email" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Email<span class="text-red-800">*</span></p>
                    <input type="email" class="p-2 border rounded-md w-full" name="email" id="email" value="{{old('email')}}" placeholder="Enter Doctor Email">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="specialist" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Specialist<span class="text-red-800">*</span></p>
                    <input type="text" class="p-2 border rounded-md w-full" name="specialist" id="specialist" value="{{old('specialist')}}" placeholder="Enter Doctor Speciality">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('specialist')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="contact" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Mobile No.<span class="text-red-800">*</span></p>
                    <input type="number" class="p-2 border rounded-md w-full" name="mobile" id="contact" value="{{old('mobile')}}" placeholder="Enter Number">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('mobile')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="address" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Address</p>
                    <textarea name="address" id="address" class="p-2 border rounded-md w-full" placeholder="Enter Address"></textarea>
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <button type="submit" class="px-5 py-2 rounded-md bg-blue-800 text-white hover:bg-blue-900">Create Doctor Reference</button>
            </form>
        </div>
    </div>
@endsection