@extends('masterLayout')

@section('title')
    Sub Department |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Search Sub Department & Update</h1>
            <hr class="border-blue-800" />
            {{-- code idher aayega .. --}}
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
            <div class="mt-5 flex flex-col justify-center items-center">
                <div class="my-5 flex justify-between gap-5 w-[70%]">
                    <input type="text" name="search" id="search" placeholder="Search by Main Department Name" class="p-2 border w-full rounded-md">
                    <button class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button>
                </div>
                <table class="border w-full">
                    <thead class="border">
                        <tr>
                            <td class="border p-2 font-semibold bg-black text-white">Id</td>
                            <td class="border p-2 font-semibold bg-black text-white">Sub Department Name</td>
                            <td class="border p-2 font-semibold bg-black text-white">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $dd)
                            <tr>
                                <td class="border p-2 font-semibold">{{ $dd->id }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->sub_department_name }}</td>
                                <td class="border px-3 font-semibold ">
                                    <button class="px-3 rounded-sm text-sm py-1 bg-blue-800 text-white">Edit</button>
                                    <button class="px-3 rounded-sm text-sm py-1 bg-red-800 text-white">Delete</button>
                                </td>
                            </tr>
                        @empty
                            {{-- <p>No Sub Department Registered</p> --}}
                            <tr>
                                <td colspan="3" class="text-center">No Department Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 
