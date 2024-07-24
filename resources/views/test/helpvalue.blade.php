@extends('masterLayout')

@section('title')
    Test Rate |
@endsection

@section('body')
    <div class="flex items-center justify-center">
        <div class="w-[60%]">
            <h1 class="text-xl text-center font-semibold">Search Parameter for Help Value</h1>
            <hr/>
            <div class="flex justify-center items-center my-3 gap-3">
                <p class="text-xl">Enter Parameter : </p>
                <input type="text" name="parameter" id="parameter" placeholder="Enter Parameter Name" class="p-1 rounded-sm w-80">
                <button class="px-3 py-1 bg-blue-600 text-white rounded-sm">Submit</button>
            </div>
            <hr>
            
        </div>

        
    </div>
@endsection