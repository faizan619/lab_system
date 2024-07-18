@extends('masterLayout')

@section('title')
    Add Test |
@endsection

@section('body')
<div class="flex justify-center items-center">
    <div class="w-[70%] mt-5">
        <h1 class="text-center font-semibold text-xl">Search Test and Update</h1>
        <hr class="border-blue-800" />
        @if (session('status'))
            <p class="text-red-600 text-lg capitalize text-center">
                {{ session('status') }}
            </p>
        @endif
        <div class="mt-5 flex flex-col justify-center items-center">
            <table id="testTable" class="border w-full">
                <thead class="border w-full">
                    <tr class="w-full">
                        <td class="border p-2 font-semibold bg-black text-white w-full">Id</td>
                        <td class="border p-2 font-semibold bg-black text-white w-full">Test Name</td>
                        <td class="border p-2 font-semibold bg-black text-white w-full">Short Name</td>
                        <td class="border p-2 font-semibold bg-black text-white w-full">Action</td>
                    </tr>
                </thead>
                {{-- <tbody>
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
                                        @method("DELETE")1
                                        <i class="fa-solid fa-trash"></i>   
                                    </form> 
                                </div> 
                            </td> 
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No Test Data Available</td>
                        </tr>
                    @endforelse
                </tbody> --}}
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#testTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('test.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'test_name', name: 'test_name' },
                { data: 'short_name', name: 'short_name' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endsection



{{-- @extends('masterLayout')

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
@endsection --}}