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
                <div class="my-5 flex justify-between items-center gap-5 w-[60%]">
                    <input type="text" name="query" id="search" placeholder="Search Department Name"
                        class="p-2 border w-full rounded-md">
                    <a href="{{ route('dept.create') }}">
                        <p class="bg-blue-600 text-white py-2 px-3 hover:scale-105 cursor-pointer rounded-full">
                            <i class="fa-solid fa-plus fa-lg"></i>
                        </p>
                    </a>
                </div>
                <table class="border w-full">
                    <thead class="border">
                        <tr>
                            <td class="border px-2 py-1 font-semibold bg-black text-white">Id</td>
                            <td class="border px-2 py-1 font-semibold bg-black text-white">Department Name</td>
                            <td class="border px-2 py-1 font-semibold bg-black text-white">Action</td>
                        </tr>
                    </thead>
                    <tbody id="deptTableBody">
                        @forelse ($data as $dd)
                            <tr>
                                <td class="border px-2 py-1 font-semibold">{{ $dd->id }}</td>
                                <td class="border px-2 py-1 font-semibold w-full">{{ $dd->department_name }}</td>
                                <td class="border px-3 font-semibold">
                                    <div class="flex gap-5">
                                        <button class="edit-button px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700 text-white"
                                                type="button" title="Edit"
                                                data-id="{{ $dd->id }}"
                                                data-name="{{ $dd->department_name }}">
                                            <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                        </button>
                                        <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 text-white">
                                                <i title="Delete" class="fa-solid fa-trash fa-lg"></i>
                                            </button>
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
                    <div class="mt-5 font-semibold w-full">
                        {{ $data->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-2 px-5 border-b">
                    <h3 class="text-xl font-semibold text-gray-900">Update Main Department</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="default-modal">
                        <i class="fa-solid fa-xmark fa-lg"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form id="edit-form" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-4 md:p-5 space-y-2">
                        <label for="update">Main Department Name</label>
                        <input type="text" name="department_name" id="update" class="w-full rounded-md">
                    </div>
                    <div class="flex items-center py-3 border-t gap-5 px-5">
                        <button type="submit" class="px-5 py-2 rounded-md bg-blue-700 hover:bg-blue-800 text-white">Update</button>
                        <button data-modal-hide="default-modal" type="button"
                                class="px-5 py-2 rounded-md border text-blue-700 border-dashed border-blue-700">Close
                        </button>
                    </div>
                </form>
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
                    data: { 'query': query },
                    success: function(data) {
                        $('#deptTableBody').html(data);
                    }
                });
            });

            $('.edit-button').on('click', function() {
                var deptId = $(this).data('id');
                var deptName = $(this).data('name');
                $('#update').val(deptName);
                $('#edit-form').attr('action', '{{ url('dept') }}/' + deptId);
                $('#default-modal').removeClass('hidden').addClass('flex');
            });

            $('[data-modal-hide]').on('click', function() {
                $('#default-modal').removeClass('flex').addClass('hidden');
            });
        });
    </script>
@endsection
