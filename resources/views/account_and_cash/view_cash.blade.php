@extends('_partials.layout')
@section('title', $title)
@section('head')
@endsection

@section('body')
    <div class="content-wrapper">

        {{-- s:header --}}
        <div class="content-header">

        </div>
        {{-- e:header --}}

        {{-- s:main --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="info-box shadow-none">
                            <div class="info-box-content">
                                <span class="info-box-text">Saldo Anda</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                            <div class="card-tool">
                                <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                    Isi Ulang
                                </button>

                                <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                    Penarukan
                                </button>
                            </div>
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <b>{{ $title }}</b>
                                </h3>
                                {{-- button tambah data --}}
                                <div class="card-tools">
                                    <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                        <i class="fa fa-cloud-download-alt"></i> PDF
                                    </button>
                                    <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                        <i class="fa fa-cloud-download-alt"></i> CSV
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse" id="cash">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Status</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>ID Transaksi</th>
                                            <th>Tipe Transaksi</th>
                                            <th>Reference</th>
                                            <th>Jumlah</th>
                                            <th>Saldo</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>ID Transaksi</th>
                                            <th>Tipe Transaksi</th>
                                            <th>Reference</th>
                                            <th>Jumlah</th>
                                            <th>Saldo</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')
    <script>
        $(function() {
            $("#cash").DataTable({});
        });

    </script>
@endsection
