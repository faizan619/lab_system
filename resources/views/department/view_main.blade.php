@extends('masterLayout')

@section('title')
    Main Department |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Search Main Department & Update</h1>
            <hr class="border-blue-800" />
            @if (session('status'))
                <p class="text-red-600 text-lg capitalize text-center">
                    {{ session('status') }}
                </p>
            @endif
            <div class="mt-5 flex flex-col justify-center items-center">
                {{-- <div action="{{ route('dept.search') }}" method="GET" class="my-5 flex justify-between gap-5 w-[60%]"> --}}
                <div  class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search Department Name" class="p-2 border w-full rounded-md">
                </div>
                <table class="border w-full">
                    <thead class="border">
                        <tr>
                            <td class="border p-2 font-semibold bg-black text-white">Id</td>
                            <td class="border p-2 font-semibold bg-black text-white">Department Name</td>
                            <td class="border p-2 font-semibold bg-black text-white">Action</td>
                        </tr>
                    </thead>
                    <tbody id="deptTableBody">
                        @forelse ($data as $dd)
                            <tr>
                                <td class="border p-2 font-semibold">{{ $dd->id }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->department_name }}</td>
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
                                <td colspan="3" class="text-center">No Department Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

@if ($data->hasPages())
<div class="mt-5">
    {{ $data->links() }}
</div>
@endif
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();

                $.ajax({
                    url: '{{ route('dept.search') }}',
                    type: 'GET',
                    data: {'query': query},
                    success: function(data) {
                        $('#deptTableBody').html(data);
                    }
                });
            });
        });
    </script>
@endsection


{{-- @extends('masterLayout')

@section('title')
    Main Department |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Search Main Department & Update</h1>
            <hr class="border-blue-800" />
            @if (session('status'))
                <p class="text-red-600 text-lg capitalize text-center">
                    {{ session('status') }}
                </p>
            @endif
            <div class="mt-5 flex flex-col justify-center items-center">
                <form action="{{ route('dept.search') }}" method="GET" class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search Department Name" class="p-2 border w-full rounded-md">
                    <button type="submit" class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button>
                </form>

                <table class="border w-full">
                    <thead class="border">
                        <tr>
                            <td class="border p-2 font-semibold bg-black text-white">Id</td>
                            <td class="border p-2 font-semibold bg-black text-white">Department Name</td>
                            <td class="border p-2 font-semibold bg-black text-white">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $dd)
                            <tr>
                                <td class="border p-2 font-semibold">{{ $dd->id }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->department_name }}</td>
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
                                <td colspan="3" class="text-center">No Department Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection --}}
