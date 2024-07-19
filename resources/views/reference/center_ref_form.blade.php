@extends('masterLayout')

@section('title')
    Center Reference |
@endsection

@section('body')
    <div class="flex justify-center items-center ">
        <div class="w-[30%] mt-3">
            <h1 class="text-center text-2xl font-semibold">Create Center Reference</h1>
            <hr class="border-blue-800"/>
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
            <form action="{{route('center_data')}}" method="POST" class="flex flex-col gap-3 py-5">
                @csrf
                <label for="name" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Center Full Name<span class="text-red-800">*</span></p>
                    <input type="text" class="p-2 border rounded-md w-full" autofocus name="center_name" id="name" value="{{old('center_name')}}" placeholder="Enter Doctor Name">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('center_name')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="name" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Center Short Name<span class="text-red-800">*</span></p>
                    <input type="text" class="p-2 border rounded-md w-full" autofocus name="center_short_name" id="name" value="{{old('center_short_name')}}" placeholder="Enter Doctor Name">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('center_short_name')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                
                
                <label for="contact" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Center Mobile No.<span class="text-red-800">*</span></p>
                    <input type="number" class="p-2 border rounded-md w-full" name="center_mobile1" id="contact" value="{{old('mobile1')}}" placeholder="Enter Number">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('mobile1')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="contact" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Center Mobile No 2 (Optional).</p>
                    <input type="number" class="p-2 border rounded-md w-full" name="center_mobile2" id="contact" value="{{old('mobile2')}}" placeholder="Enter Number">
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('mobile2')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <label for="address" class="w-full flex flex-col gap-1">
                    <p class="text-md font-semibold">Address<span class="text-red-800">*</span></p>
                    <textarea name="center_address" id="address" class="p-2 border rounded-md w-full" placeholder="Enter Address"></textarea>
                    @if ($errors->any())
                        <p class="text-red-700 rounded-md mt-[-5px]">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </p>
                    @endif
                </label>
                <button type="submit" class="px-5 py-2 rounded-md bg-blue-800 text-white hover:bg-blue-900">Create Center Reference</button>
            </form>
        </div>
    </div>
@endsection