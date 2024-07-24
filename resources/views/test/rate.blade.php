@extends('masterLayout')

@section('title')
    Test Rate |
@endsection

@section('body')
    <div class="flex items-center justify-center">
        <div class="w-[80%]">
            <h1 class="text-xl text-center font-semibold">Search Parameter for Help Value</h1>
            <hr />
            <div class="flex justify-evenlyg items-center my-3 gap-5">
                <label for="center">
                    <p class="font-semibold text-lg">Center</p>
                    <select name="center" id="center" class="p-1 w-44 border border-dashed">
                        <option value="val1">val1</option>
                        <option value="val2">val2</option>
                        <option value="val3">val2</option>
                    </select>
                </label>
                <label for="dept">
                    <p class="font-semibold text-lg">Department</p>
                    <select name="department" id="dept" class="p-1 w-44 border border-dashed">
                        <option value="val1">val1</option>
                        <option value="val2">val2</option>
                        <option value="val3">val2</option>
                    </select>
                </label>
                <label for="subdept">
                    <p class="font-semibold text-lg">Sub Department</p>
                    <select name="subdept" id="subdept" class="p-1 w-44 border border-dashed">
                        <option value="val1">val1</option>
                        <option value="val2">val2</option>
                        <option value="val3">val2</option>
                    </select>
                </label>
                <label for="test">
                    <p class="font-semibold text-lg">Search Test</p>
                    <input type="text" name="test" id="test" placeholder="Search By Test Name" class="p-1">
                </label>

            </div>
            <hr>
        </div>
    </div>
@endsection
