@extends('backend.layouts.app')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('content')
<h6>Tabel {{$title}}</h6>
<a href="{{route('jadwal.create')}}" class="btn btn-primary btn-sm">Tambah Data</a>
        <div class="card">
            <div class="table-responsive">
                <div class="card-body">
                        <table class="table align-items-center table-data table-condensed text-center">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"width="10%">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Pelajaran</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hari</th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center" width="20%">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {

            var table = $('.table-data').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                responsive: true,
                ajax: "{{ route('jadwal.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'mata_pelajaran',
                        name: 'mata_pelajaran'
                    },
                    {
                        data: 'kelas_id',
                        name: 'kelas_id'
                    },
                    {
                        data: 'hari',
                        name: 'hari'
                    },
                    {
                        data: 'jam',
                        name: 'jam'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
    <script>
        document.querySelector("#delete").addEventListener("click", function() {
            Swal.fire({
                title: "Are you sure about deleting this file?",
                type: "info",
                showCancelButton: true,
                confirmButtonText: "Delete It",
                confirmButtonColor: "#ff0055",
                cancelButtonColor: "#999999",
                reverseButtons: true,
                focusConfirm: false,
                focusCancel: true
            });
            });
    </script>
@endsection
