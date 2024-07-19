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
                <div class="my-5 flex justify-between gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search by Test Name"
                        class="p-2 border w-full rounded-md">
                    {{-- <button type="submit" class="px-5 py-1 rounded-md bg-blue-700 text-white">Search</button> --}}
                    <a href="{{ route('test.create') }}">
                        {{-- <div class="px-3 w-28 py-1 rounded-md bg-blue-700 text-white">Create New</div> --}}
                        <p class="bg-blue-600 text-white py-2 px-3 hover:scale-105 cursor-pointer rounded-full">
                            <i class="fa-solid fa-plus fa-lg"></i>
                        </p>
                    </a>
                </div>
                <table class="border w-full">
                    <thead class="border w-full">
                        <tr class="w-full">
                            <td class="border p-2 font-semibold bg-black text-white ">Id</td>
                            <td class="border p-2 font-semibold bg-black text-white ">Test Name</td>
                            <td class="border p-2 font-semibold bg-black text-white ">Sub Department Id</td>
                            <td class="border p-2 font-semibold bg-black text-white ">Center Id</td>
                            <td class="border p-2 font-semibold bg-black text-white ">Action</td>
                        </tr>
                    </thead>
                    <tbody class="border" id="testTableHere">
                        @forelse ($tests as $dd)
                            <tr>
                                <td class="border p-2 font-semibold">{{ $dd->id }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->test_name }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->sub_dept_id }}</td>
                                <td class="border p-2 font-semibold">{{ $dd->center_id }}</td>
                                <td class="border px-3 font-semibold">
                                    <div class="flex gap-5">
                                        <a href="{{ route('dept.edit', $dd->id) }}">
                                            <button
                                                class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700  text-white"><i
                                                    class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                        </a>
                                        <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <p
                                                class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 cursor-pointer  text-white">
                                                <i class="fa-solid fa-trash"></i>
                                            </p>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Test Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="w-full">
                    @if ($tests->hasPages())
                        <div class="mt-5">
                            {{ $tests->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                console.log(query);
                $.ajax({
                    url: '{{ route('test.search') }}',
                    type: 'GET',
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        console.log(data);
                        $('#testTableHere').html(data);
                    }
                });
            });
        });
    </script>
@endsection
