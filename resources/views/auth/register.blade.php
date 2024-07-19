@extends('masterLayout')

@section('title')
    Register |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[80%]">
            <h1 class="text-center font-semibold text-xl my-3 uppercase">Register User</h1>
            <hr class="border-blue-700">
            @if (session('status'))
            <div id="alert-1" class="flex items-center p-4 my-1 text-blue-800 rounded-lg bg-blue-50" role="alert">
                <i class="fa-solid fa-circle-info fa-lg"></i>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('status') }}
                </div>
                  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <i class="fa-solid fa-xmark fa-lg"></i>
                </button>
              </div>
            @endif
            <div class="flex justify-center">
                <form action="{{ route('registerUser') }}" method="POST" class="flex flex-col gap-2 mt-5 w-[40%] shadow-md shadow-black p-5 rounded-md">
                    @csrf
                    <div class="flex flex-col gap-1">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="p-1 @error('password') border-red-700 @enderror rounded-md">
                        @if ($errors->any())
                        <span class="text-red-700 rounded-md ">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username">User Name:</label>
                        <input type="text" name="username" id="username" placeholder="Enter User name"
                            class="p-1 @error('password') border-red-700 @enderror rounded-md">
                            @if ($errors->any())
                        <span class="text-red-700 rounded-md ">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="pass">Password:</label>
                        <input type="text" name="password" id="pass" placeholder="Enter Password"
                            class="p-1 @error('password') border-red-700 @enderror rounded-md">
                            @if ($errors->any())
                        <span class="text-red-700 rounded-md ">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                    </div>
                    <button type="submit" class="py-1 rounded-md bg-blue-700 text-white hover:bg-blue-800 mt-3">Register User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
