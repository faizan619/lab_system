{{-- every code here is just for copy pasting the content if used in future. for example i have implement the search functionality
but then i founded the datalist library so rather than removing the search function i will put the code here. to use that function
in other part. ;)

It will make the real code clean :)
--}}

{{--

//test search code

// public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $tests = [];

    //     if ($query !== "") {
    //         $tests = Test::where('test_name', 'LIKE', "%{$query}%")
    //             ->get();
    //     }
    //     else{
    //         $data = Test::all();
    //     }

    //     return view('test.view', compact('tests'));
    // }
--}}


{{--

//view patient old code
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

                <form action="{{ route('patient.search') }}" method="GET" class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search by Aadhar No or Phone No" class="p-2 border w-full rounded-md">
                    <button type="submit" class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button>
                </form>


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
                            <tr>
                                <td colspan="5" class="text-center">No Patient Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

--}}

{{--

//test old code here
@extends('masterLayout')

@section('title')
    Add Test |
@endsection

@section('body')
<div class="flex justify-center items-center">
    <div class="w-[70%] mt-5">
        <h1 class="text-center font-semibold text-xl">Search Test and Update/h1>
        <hr class="border-blue-800" />
        @if (session('status'))
            <p class="text-red-600 text-lg capitalize text-center">
                {{ session('status') }}
            </p>
        @endif
        <div class="mt-5 flex flex-col justify-center items-center">
            <form action="{{ route('test.search') }}" method="GET" class="my-5 flex justify-between gap-5 w-[60%]">
                <input type="text" name="query" id="search" placeholder="Search Department Name" class="p-2 border w-full rounded-md">
                <button type="submit" class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button>
            </form>
            <table class="border w-full">
                <thead class="border">
                    <tr>
                        <td class="border p-2 font-semibold bg-black text-white">Id</td>
                        <td class="border p-2 font-semibold bg-black text-white">Test Name</td>
                        <td class="border p-2 font-semibold bg-black text-white">Short Name</td>
                        <td class="border p-2 font-semibold bg-black text-white">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tests as $dd)
                        <tr>
                            <td class="border p-2 font-semibold">{{ $dd->id }}</td>
                            <td class="border p-2 font-semibold">{{ $dd->test_name }}</td>
                            <td class="border p-2 font-semibold">{{ $dd->short_name }}</td>
                            <td class="border px-3 font-semibold">
                                <div class="flex gap-5">
                                    <a href="{{route('dept.edit',$dd->id)}}">
                                        <button class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700  text-white">Edit</button>
                                    </a>
                                    <form action="{{route('dept.destroy',$dd->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 text-white">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No Test Data Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

--}}

{{--
// search for patient
 // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $patientdata = [];

    //     if ($query !== "") {
    //         $patientdata = Patient::where('user_card_no', 'LIKE', "%{$query}%")
    //             ->orWhere('mobile1', 'LIKE', "%{$query}%")
    //             ->orWhere('fname', 'LIKE', "%{$query}%")
    //             ->get();
    //     }
    //     else{
    //         $data = Patient::all();
    //     }

    //     return view('patient.view_patient', compact('patientdata'));
    // }
--}}
