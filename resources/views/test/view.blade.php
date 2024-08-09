@extends('masterLayout')

@section('title')
    Add Test |
@endsection

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-warning d-flex align-items-center justify-content-between" id="customAlert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="bg-danger border-danger text-lg px-2 rounded"
                    onclick="closeAlert()">&times;</button>
            </div>
        @endif
        <div>
            <div class="pt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Search Test and Update</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Test_Id</td>
                                    <td>Test Name</td>
                                    <td>Test Price</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($tests as $dd)
                                    <tr>
                                        <td>{{ $dd->id }}</td>
                                        <td>{{ $dd->test_name }}</td>
                                        <td>{{ $dd->test_price }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('dept.edit', $dd->id) }}">
                                                <button class="btn-outline-primary px-2 border-priary mx-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </a>
                                            <form action="{{ route('dept.destroy', $dd->id) }}" class="btn-outline-danger px-2 d-flex justify-content-center align-items-center mx-2">
                                                @csrf
                                                @method('DELETE')
                                                <i class="fa-solid fa-trash"></i>
                                            </form>
                                            {{-- <a href="{{ route('dept.edit', $dd->id) }}">
                                                <button title="Edit Test"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                            </a>
                                            <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <p title="Delete Test" class="form-label">
                                                    <i class="fa-solid fa-trash"></i>
                                                </p>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Test Data Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Test_Id</td>
                                    <td>Test Name</td>
                                    <td>Test Price</td>
                                    <td>Action</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="flex justify-center items-center"> 
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Search Test and Update</h1>
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
            <div class="mt-5 flex flex-col justify-center items-center">
                <div class="my-1 flex justify-between gap-5 w-[60%]">
                    <input title="Search Test" type="text" name="query" id="search" placeholder="Search by Test Name or Test Price"
                        class="p-2 border w-full rounded-md">
                    <a href="{{ route('test.create') }}">
                        <p title="Create Test" class="bg-blue-600 text-white py-2 px-3 hover:scale-105 cursor-pointer rounded-full">
                            <i class="fa-solid fa-plus fa-lg"></i>
                        </p>
                    </a>
                </div>
                <table class="border mt-1 w-full">
                    <thead class="border w-full">
                        <tr class="w-full">
                            <td class="border px-3 py-1 font-semibold bg-black text-white ">Test_Id</td>
                            <td class="border px-3 py-1 font-semibold bg-black text-white w-[50%]">Test Name</td>
                            <td class="border px-3 py-1 font-semibold bg-black text-white w-[50%]">Test Price</td>
                            <td class="border px-3 py-1 font-semibold bg-black text-white ">Action</td>
                        </tr>
                    </thead>
                    <tbody class="border" id="testTableHere">
                        @forelse ($tests as $dd)
                            <tr>
                                <td class="border p-1 font-semibold">{{ $dd->id }}</td>
                                <td class="border p-1 font-semibold">{{ $dd->test_name }}</td>
                                <td class="border p-1 font-semibold">{{ $dd->test_price }}</td>
                                <td class="border px-3 font-semibold">
                                    <div class="flex gap-5">
                                        <a href="{{ route('dept.edit', $dd->id) }}">
                                            <button title="Edit Test"
                                                class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700  text-white"><i
                                                    class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                        </a>
                                        <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <p title="Delete Test"
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
    </div> --}}

    {{-- <script>
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
    </script> --}}
@endsection

{{-- Showing active on side start --}}
@section('menuopenmaster')
    menu-open
@endsection
@section('activemaster')
    active
@endsection
@section('master1')
    active
@endsection
{{-- till here active showing part ends --}}
@section('headFile')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('scriptFile')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        function closeAlert() {
            var alert = document.getElementById('customAlert');
            alert.style.display = 'none';
        }
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
