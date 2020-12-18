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
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="info-box shadow-none" style="text-align: center;">
                            <span class="info-box-icon bg-success"><i class="fas fa-money-check-alt"
                                    style="text-align: center;"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Dibayar</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="info-box shadow-none" style="text-align: center;">
                            <span class="info-box-icon bg-warning"><i class="fas fa-exchange-alt"
                                    style="text-align: center;"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Transaksi</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- button tambah data --}}
                                <div class="card-tools">
                                    {{-- <button
                                        onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                        <i class="fa fa-cloud-download-alt"></i> CSV
                                    </button> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse" id="retail_outlets">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Status</th>
                                            <th>Date Created</th>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Reference</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>No Hp</th>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Reference</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="card-footer">

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
            $("#retail_outlets").DataTable({});
        });

    </script>

@endsection
