@extends('masterLayout')

@section('title')
    Display Collection |
@endsection

@section('body')
    <div class="flex justify-center items-center" id="printarea">
        <div class="w-[70%] mt-3">
            <h1 class="text-center text-2xl font-semibold">Daily Collection Record</h1>
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
            <div class="flex justify-between items-center px-5">
                <form action="" method="POST" class="py-3 flex gap-5">
                    <input type="date" name="date" class="w-60 p-1">
                    <button class="px-5 py-1 rounded-md border bg-blue-500 text-white hover:bg-blue-600">Search</button>
                </form>
                <div class="flex gap-5">
                    <label for="bal" class="flex items-center gap-2">
                        <p>Amount:</p>
                        <input type="checkbox" name="balance" id="bal">
                    </label>
                    <button id="printbtn" class="px-5 py-1 bg-green-500 text-white rounded-md">Print</button>
                </div>
            </div>
        </div>
    </div>
    @include('component.printbtn')
@endsection
