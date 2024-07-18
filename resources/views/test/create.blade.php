@extends('masterLayout')

@section('title')
    Add Test |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[80%]">
            <h1 class="font-semibold py-3 text-xl text-center">New Test Entry</h1>
            <hr class="border-blue-700"/>
            <div class="flex justify-center items-center pt-5">
                <form action="{{route('test.store')}}" method="POST" class="shadow-md shadow-black w-[45%] bg-gray-200 p-7 px-10 rounded-md flex flex-col gap-5">
                    @csrf
                    <label for="sub_dept" class="flex justify-between">
                        <p class="font-semibold">Select Sub Department <span class="font-bold text-red-700">*</span></p>
                        <select name="sub_dept_id" id="sub_dept" class="px-2 rounded-md w-[50%] shadow-sm shadow-black ">
                            @forelse ($sub as $ss)
                                <option value="{{$ss->id}}" class="">{{$ss->sub_department_name}}</option>
                            @empty
                                <option class="" value="">No Data Available!</option>
                            @endforelse
                        </select>
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('sub_dept_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="center" class="flex justify-between">
                        <p class="font-semibold">Select Center <span class="font-bold text-red-700">*</span></p>
                        <select name="center_id" id="center" class="px-3 rounded-md w-[55%] shadow-sm shadow-black">
                            @forelse ($center as $ss)
                                <option value="{{$ss->id}}">{{$ss->center_name}}</option>
                            @empty
                                <option class="" value="">No Data Available!</option>
                            @endforelse
                        </select>
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('center_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="name" class="flex justify-between">
                        <p class="font-semibold">Test Name <span class="font-bold text-red-700">*</span></p>
                        <input type="text" value="{{old('test_name')}}" name="test_name" id="name" class="border px-2 py-1 @error('test_name')   border-red-700            @enderror  rounded-md shadow-sm shadow-black " placeholder="Enter Test Name">
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('test_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="short" class="flex justify-between">
                        <p class="font-semibold">Short Name <span class="font-bold text-red-700">*</span></p>
                        <input type="text" value="{{old('short_name')}}" name="short_name" id="short" autocomplete="test_name" class="border px-2 py-1 @error('short_name')   border-red-700            @enderror  rounded-md shadow-sm shadow-black " placeholder="Enter Short Name">
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('short_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="tech" class="flex justify-between">
                        <p class="font-semibold">Technical Name <span class="font-bold text-red-700">*</span></p>
                        <input type="text" value="{{old('tech_name')}}" name="tech_name" id="tech" class="border px-2 py-1 @error('tech_name')   border-red-700            @enderror  rounded-md shadow-sm shadow-black " placeholder="Enter Techical Name">
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('tech_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="price" class="flex justify-between">
                        <p class="font-semibold">Test Price <span class="font-bold text-red-700">*</span></p>
                        <input type="number" value="{{old('test_price')}}" name="test_price" id="price" class="border px-2 py-1 @error('test_price')   border-red-700            @enderror  rounded-md shadow-sm shadow-black " placeholder="Enter Price">
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('test_price')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <label for="seperate" class="flex justify-between">
                        <p class="font-semibold">Check For test Print Seperate Page </p>
                        <input type="checkbox" value="110" name="seperate" id="seperate">
                    </label>
                    @if ($errors->any())
                            <span class="text-red-700 px-3 rounded-md mt-[-15px] text-right text-sm ">
                                @error('seperate')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif
                    <button class="px-5 py-1 bg-green-600 rounded-md text-white">Add Test</button>
                </form>
                <script>
                    document.getElementById('name').addEventListener('input', function() {
                        var testName = this.value;
                        document.getElementById('short').value = testName;
                        document.getElementById('tech').value = testName;
                    });
                </script>
            </div>
        </div>
    </div>
@endsection