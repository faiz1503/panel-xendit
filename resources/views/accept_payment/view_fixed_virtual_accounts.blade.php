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
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_1"
                                            data-toggle="tab">Payments</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Virtual
                                            Accounts</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-12">
                                                        <div class="info-box shadow-none"
                                                            style="text-align: center; background-color: whitesmoke;">
                                                            <span class="info-box-icon bg-primary"><i
                                                                    class="fas fa-money-check-alt"
                                                                    style="text-align: center;"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Total Completed</span>
                                                                <span class="info-box-number">IDR xxx</span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-12">
                                                        <div class="info-box shadow-none"
                                                            style="text-align: center; background-color: whitesmoke;">
                                                            <span class="info-box-icon bg-success"><i
                                                                    class="fas fa-money-check"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Total Detected</span>
                                                                <span class="info-box-number">IDR xxx</span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-12">
                                                        <div class="info-box shadow-none"
                                                            style="text-align: center; background-color: whitesmoke;">
                                                            <span class="info-box-icon bg-warning"><i
                                                                    class="fas fa-exchange-alt"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Total Transactions</span>
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
                                                                {{-- button tambah data
                                                                --}}
                                                                <div class="card-tools">
                                                                    <button onclick='location.href="/mitra/driver/tambah";'
                                                                        class="btn btn-primary">
                                                                        <i class="fa fa-cloud-download-alt"></i> CSV
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table class="table table-striped table-inverse"
                                                                    id="payments">
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

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table class="table table-striped table-inverse"
                                                            id="virtualaccounts">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- END CUSTOM TABS -->

            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')
    <script>
        //-------------
        //- Data table Transaksi complete (example1) and Latest transaction (allwalet) -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        $(function() {
            $("#payments").DataTable({
                processing: true,
                serverSide: false,
                responsive: true,
                ajax: "{{ url('/finance/wallet_ajax') }}",
                columns: [{
                        data: 'no'
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: 'waktu'
                    },
                    {
                        data: 'nama_pemilik'
                    },
                    {
                        data: 'jumlah'
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'status'
                    },
                ],
            });
        });

        $(function() {
            $("#virtualaccounts").DataTable({});
        });

    </script>
@endsection
