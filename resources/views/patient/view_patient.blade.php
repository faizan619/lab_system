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
                <p class="text-red-700 rounded-md">
                    {{ session('status') }}
                </p>
            @endif
            <div class="flex flex-col justify-center items-center ">
                <div class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search by Aadhar No or Phone No" class="p-1 border w-full rounded-md">
                    <a href="{{route('create')}}">
                        <div class="px-3 w-28 py-1 rounded-md bg-blue-700 text-white">Create New</div>
                    </a>
                </div>
                <table id="patientTable" >
                    <thead class="bg-black text-white w-full">
                        <tr>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Id</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Card No</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Patient</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Register_Date</td>
                            <td class="border px-5 font-semibold bg-black text-white capitalize text-center">Action</td>
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
                                    <a href={{route('dept.show',$data->id)}}>
                                        <button class="px-3 border text-sm py-2 hover:bg-blue-800 rounded-md bg-blue-700 text-white"><i class="fa-regular fa-address-card"></i></button>
                                    </a>
                                    <button class="px-3 border text-sm py-2 hover:bg-green-800 rounded-md bg-green-700 text-white"><i class="fa-solid fa-inbox fa-xl"></i></button>
                                    <button class="px-3 border text-sm py-2 hover:bg-gray-800 rounded-md bg-gray-700 text-white"><i class="fa-solid fa-receipt fa-lg"></i></button>
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

    <script>
        $(document).ready(function() {
            $('#patientTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('patient.data') }}',
                    data: function (d) {
                        d.query = $('#search').val();
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'user_card_no', name: 'user_card_no' },
                    { data: 'fname', name: 'fname' },
                    { data: 'register_date', name: 'register_date' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });

            $('#search').on('keyup', function() {
                $('#patientTable').DataTable().draw(true);
            });
        });
    </script>
@endsection

