@extends('masterLayout')

@section('title')
    Main Department |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Add Main Department</h1>
            <hr class="border-blue-800"/>
            <form action="{{route('dept.store')}}" method="POST" class="py-5">
                @csrf
                <label for="name" class="w-full flex flex-col items-start gap-2">
                    <p class="font-semibold">Department Name</p>
                    <input type="text" name="department_name" id="name" class="p-2 rounded-md border w-[50%] shadow-sm shadow-black" placeholder="Enter Department Name">
                </label>
                <button class="px-5 py-1 rounded-md mt-3 bg-blue-800 hover:bg-blue-900 text-white ">Add Main Department</button>
            </form>
        </div>
    </div>
@endsection
