@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('/stok/import') }}')" class="btn btn-info">Import Stok</button>
                <a href="{{ url('/stok/export_excel') }}" class="btn btn-primary"><i class="fa fa-fileexcel"></i> Export Stok</a>
                <a href="{{ url('/stok/export_pdf') }}" class="btn btn-warning"><i class="fa fa-filepdf"></i> Export Stok</a>
                <button onclick="modalAction('{{ url('/stok/create_ajax') }}')" class="btn btn-success">Tambah Data (Ajax)</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div id="filter" class="form-horizontal p-2 border-bottom mb-2">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <label for="filter_supplier" class="col-form-label">Nama Supplier</label>
                        <select name="filter_supplier" class="form-control form-control-sm filter_supplier">
                            <option value="">- Semua -</option>
                            @foreach ($supplier as $s)
                                <option value="{{ $s->supplier_id }}">{{ $s->supplier_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter_barang" class="col-form-label">Nama Barang</label>
                        <select name="filter_barang" class="form-control form-control-sm filter_barang">
                            <option value="">- Semua -</option>
                            @foreach ($barang as $b)
                                <option value="{{ $b->barang_id }}">{{ $b->barang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter_user" class="col-form-label">Penginput</label>
                        <select name="filter_user" class="form-control form-control-sm filter_user">
                            <option value="">- Semua -</option>
                            @foreach ($user as $u)
                                <option value="{{ $u->user_id }}">{{ $u->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm" id="table_stok">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Supplier</th>
                        <th>Nama Barang</th>
                        <th>Penginput</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" databackdrop="static"
        data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        var dataStok;
        $(document).ready(function() {
            dataStok = $('#table_stok').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ url('stok/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.filter_barang = $('.filter_barang').val();
                        d.filter_supplier = $('.filter_supplier').val();
                        d.filter_user = $('.filter_user').val();
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "supplier.supplier_nama",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "barang.barang_nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "user.nama",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "stok_tanggal",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "stok_jumlah",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#table-stok_filter input').unbind().bind('keyup', function(e) {
                if (e.keyCode == 13) { // enter key
                    tableStok.search(this.value).draw();
                }
            });

            $('.filter_barang').change(function() {
                dataStok.draw();
            });

            $('.filter_supplier').change(function() {
                dataStok.draw();
            });

            $('.filter_user').change(function() {
                dataStok.draw();
            });
        });
    </script>
@endpush
