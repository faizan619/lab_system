@extends('masterLayout')

@section('title')
    View Patient |
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
                        <h3 class="card-title">Search Patient For View Record</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Card No</th>
                                    <th>Patient</th>
                                    <th>Register Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($patientdata as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->user_card_no }}</td>
                                        <td>{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}</td>
                                        <td>{{ $data->register_date }}</td>
                                        <td>
                                            <a href={{ route('dept.show', $data->id) }}>
                                                <button class="btn-outline-dark px-2 border-dark" title="View Details"><i
                                                        class="fa-regular fa-address-card"></i></button>
                                            </a>
                                            <button class="btn-outline-dark px-2 border-dark" title="Don't Know"><i
                                                    class="fa-solid fa-inbox fa-xl"></i></button>
                                            <button class="btn-outline-dark px-2 border-dark" title="Receipt"><i
                                                    class="fa-solid fa-receipt fa-lg"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Patient Data Available</td>
                                    </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Card No</th>
                                    <th>Patient</th>
                                    <th>Register Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('menuopenreception')
    menu-open
@endsection

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
