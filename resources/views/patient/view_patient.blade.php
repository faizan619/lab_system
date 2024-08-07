@extends('masterLayout')

@section('title')
    View Patient |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="mt-5 w-[90%] ">
            <h1 class="text-center font-semibold text-xl">Search Patient for View Record</h1>
            <hr class="border-blue-800" />
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
            <div class="flex flex-col justify-center items-center ">
                <div class="my-5 flex justify-between gap-5 w-[60%]">
                    <input title="Search Patient" type="text" name="query" id="search" placeholder="Search by Aadhar No or Phone No"
                        class="p-1 border w-full rounded-md">
                    <a href="{{ route('create') }}">
                        {{-- <div class="px-3 w-28 py-1 rounded-md bg-blue-700 text-white">Create New</div> --}}
                        <p title="Create New Patient" class="bg-blue-600 text-white py-2 px-3 hover:scale-105 cursor-pointer rounded-full">
                            <i class="fa-solid fa-plus fa-lg"></i>
                        </p>
                    </a>
                </div>
                <table class="w-full">
                    <thead class="bg-black text-white w-full">
                        <tr>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Id</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Card_No</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Patient</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Register_Date
                            </td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody class="border" id="patientTableBody">
                        @forelse ($patientdata as $data)
                            <tr>
                                <td class="border px-1 ">{{ $data->id }}</td>
                                <td class="border px-1 ">{{ $data->user_card_no }}</td>
                                <td class="border px-1 ">{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}</td>
                                <td class="border px-1 ">{{ $data->register_date }}</td>
                                <td class="border px-1 flex gap-3 flex justify-center items-center">
                                    <a href={{ route('dept.show', $data->id) }}>
                                        <button title="View Details"
                                            class="px-3 border text-sm py-1 hover:bg-blue-800 rounded-md bg-blue-700 text-white"><i
                                                class="fa-regular fa-address-card"></i></button>
                                    </a>
                                    <button title="Don't Know"
                                        class="px-3 border text-sm py-1 hover:bg-green-800 rounded-md bg-green-700 text-white"><i
                                            class="fa-solid fa-inbox fa-xl"></i></button>
                                    <button title="Receipt"
                                        class="px-3 border text-sm py-1 hover:bg-gray-800 rounded-md bg-gray-700 text-white"><i
                                            class="fa-solid fa-receipt fa-lg"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Patient Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if ($patientdata->hasPages())
                    <div class="mt-5 w-full">
                        {{ $patientdata->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: '{{ route('patient.search') }}',
                    type: 'GET',
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        $('#patientTableBody').html(data);
                    }
                });
            });
        });
    </script>
@endsection
