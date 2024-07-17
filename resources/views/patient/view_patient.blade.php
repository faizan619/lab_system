@extends('masterLayout')

@section('title')
    View Patient |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="mt-5 w-[90%]">
            <h1 class="text-center font-semibold text-xl">Search Patient for View Record</h1>
            <hr class="border-blue-800" />
            @if (session('status'))
                <p class="text-red-700 rounded-md">
                    {{ session('status') }}
                </p>
            @endif
            <div class="flex flex-col justify-center items-center">
                <div class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="search" id="search" placeholder="Search by Aadhar No or Phone No" class="p-2 border w-full rounded-md">
                    <button class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button>
                </div>
                <table class="border w-full ">
                    <thead class="bg-black text-white">
                        <tr>
                            <td class="border px-5 py-2 font-semibold bg-black text-white capitalize text-center">Id</td>
                            <td class="border px-5 py-2 font-semibold bg-black text-white capitalize text-center">Card No
                            </td>
                            <td class="border px-5 py-2 font-semibold bg-black text-white capitalize text-center">Patient
                                Name</td>
                            <td class="border px-5 py-2 font-semibold bg-black text-white capitalize text-center">register
                                at</td>
                            <td class="border px-5 py-2 font-semibold bg-black text-white capitalize text-center">Action
                            </td>
                        </tr>
                    </thead>
                    <tbody class="border ">
                        @forelse ($patientdata as $data)
                            <tr>
                                <td class="border px-1 ">{{ $data->id }}</td>
                                <td class="border px-1 ">{{ $data->user_card_no }}</td>
                                <td class="border px-1 ">{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}</td>
                                <td class="border px-1 ">{{ $data->register_date }}</td>
                                <td class="border px-1 flex gap-3 flex justify-center items-center">
                                    <button class="px-3 border text-sm py-2 hover:bg-blue-800 rounded-md bg-blue-700 text-white ">View Record</button>
                                    <button class="px-3 border text-sm py-2 hover:bg-green-800 rounded-md bg-green-700 text-white ">Result Entry</button>
                                    <button class="px-3 border text-sm py-2 hover:bg-gray-800 rounded-md bg-gray-700 text-white ">Receipt</button>
                                </td>
                            </tr>
                        @empty
                            <p>NO Data Available</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
