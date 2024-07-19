@extends('masterLayout')

@section('title')
    Sub Department |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Add Sub Department</h1>
            <hr class="border-blue-800" />
            <form action="{{route('subdept.store')}}" method="POST" class="py-5 flex flex-col gap-3 items-start">
                @csrf
                <label for="main" class="w-full flex flex-col items-start gap-2">
                    <p class="font-semibold">Select Main Department</p>
                    <select name="dept_id" id="main" class="p-2 rounded-md @error('dept_id') border-red-700 @enderror border w-[50%] shadow-sm shadow-black">
                        @forelse ($dept as $dd)
                            <option value="{{$dd->id}}">{{$dd->department_name}}</option>
                        @empty
                            <option >No Department Available</option>
                        @endforelse
                    </select>
                </label>
                <label for="name" class="w-full flex flex-col items-start gap-2">
                    <p class="font-semibold">Sub Department Name</p>
                    <input type="text" name="sub_department_name" id="name"
                        class="p-2 rounded-md border w-[50%] @error('sub_department_name') border-red-700 @enderror shadow-sm shadow-black" placeholder="Enter Sub Department Name">
                        @if ($errors->any())
                        <span class="text-red-700 rounded-md ">
                            @error('sub_department_name')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </label>
                <button class="px-5 py-1 rounded-md mt-3 bg-blue-800 hover:bg-blue-900 text-white ">Add Sub
                    Department</button>
            </form>
        </div>
    </div>
@endsection
