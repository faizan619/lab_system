@extends('masterLayout')

@section('title')
    Patient Collection X Ray
@endsection

@section('body')
<div class="flex justify-center items-center" id="printarea">
    <div class="w-[80%] mt-3">
        <div class="flex justify-around">
            <div>
                <select name="doctor" class="w-36 capitalize px-1">
                    <option value="select1">Sub Department</option>
                    <option value="select2">select2</option>
                </select>
            </div>
            <h1 class="text-center text-xl font-semibold">Summary Report</h1>
        </div>
        <hr class="border-blue-800" />

        @if (session('status'))
            <div id="alert-1" class="flex items-center p-4 my-1 text-blue-800 rounded-lg bg-blue-50" role="alert">
                <i class="fa-solid fa-circle-info fa-lg"></i>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('status') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <i class="fa-solid fa-xmark fa-lg"></i>
                </button>
            </div>
        @endif
        <div class="flex justify-between items-center px-3 mt-3">
            <div class="flex gap-2 items-center">
                <p>Month: </p>
                <input type="month" name="month" id="month" class="p-1">
            </div>
            <div>
                <button id="printbtn" class="px-5 py-1 bg-green-500 text-white rounded-md">Print</button>
            </div>
        </div>
    </div>
</div>
@include('component.printbtn')
@endsection
