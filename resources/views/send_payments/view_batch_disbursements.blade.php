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
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Needs
                                            Validation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Needs
                                            Approval</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Approved</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-header">
                                        {{-- button tambah data
                                        --}}
                                        <div class="card-tools">
                                            <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                                <i class="fa fa-plus"></i> Buat
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                            aria-labelledby="needs_validation">
                                            <!-- data table  -->
                                            <table id="needs_validation" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice validasi</th>
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
                                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                            aria-labelledby="needs_approval">
                                            <!-- data table  -->
                                            <table id="needs_approval" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice approval</th>
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
                                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                            aria-labelledby="approved">
                                            <!-- data table  -->
                                            <table id="approved" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice approved</th>
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
        $(function() {
            $("#needs_validation").DataTable({});
        });
    </script>

    <script>
        $(function() {
            $("#needs_approval").DataTable({});
        });
    </script>

    <script>
        $(function() {
            $("#approved").DataTable({});
        });
    </script>
@endsection
