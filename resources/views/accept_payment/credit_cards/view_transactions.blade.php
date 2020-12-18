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
                                            data-toggle="tab">Charges</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Kartu</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">3DSecure</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_4"
                                            data-toggle="tab">Otorisasi</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Refunds</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">Settlements</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="card-header">
                                            {{-- button --}}
                                            <div class="card-tools">
                                                <button onclick='location.href="/mitra/driver/tambah";'
                                                    class="btn btn-primary">
                                                    <i class="fa fa-cloud-download-alt"></i> CSV
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="charges">
                                            <!-- data table  -->
                                            <table id="charges" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice charges</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="card-header">
                                            {{-- button --}}
                                            <div class="card-tools">
                                                <button onclick='location.href="/mitra/driver/tambah";'
                                                    class="btn btn-primary">
                                                    <i class="fa fa-cloud-download-alt"></i> CSV
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show " role="tabpanel" aria-labelledby="cards">
                                            <!-- data table  -->
                                            <table id="cards" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice cards</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="card-header">
                                            {{-- button --}}
                                            <div class="card-tools">
                                                <button onclick='location.href="/mitra/driver/tambah";'
                                                    class="btn btn-primary">
                                                    <i class="fa fa-cloud-download-alt"></i> CSV
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show " role="tabpanel" aria-labelledby="3dsecure">
                                            <!-- data table  -->
                                            <table id="3dsecure" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice 3dsecure</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane show" id="tab_4">
                                        <div class="card-header">
                                            {{-- button --}}
                                            <div class="card-tools">
                                                <button onclick='location.href="/mitra/driver/tambah";'
                                                    class="btn btn-primary">
                                                    <i class="fa fa-cloud-download-alt"></i> CSV
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" role="tabpanel" aria-labelledby="authorization">
                                            <!-- data table  -->
                                            <table id="authorization" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice authorization</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_5">
                                        <div class="tab-pane fade show" role="tabpanel" aria-labelledby="refunds">
                                            <!-- data table  -->
                                            <table id="refunds" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice refunds</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_6">
                                        <div class="tab-pane fade show" role="tabpanel" aria-labelledby="settlements">
                                            <!-- data table  -->
                                            <table id="settlements" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice settlements</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
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
                    <!-- END CUSTOM TABS -->
                </div>
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
            $("#charges").DataTable({
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
                    // {
                    //     data: 'driver'
                    // },
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
            $("#cards").DataTable({});
        });

        $(function() {
            $("#3dsecure").DataTable({});
        });

        $(function() {
            $("#authorization").DataTable({});
        });

        $(function() {
            $("#refunds").DataTable({});
        });

        $(function() {
            $("#settlements").DataTable({});
        });

    </script>
@endsection
