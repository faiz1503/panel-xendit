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
                                            data-toggle="tab">Ringkasan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Daftar</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                            aria-labelledby="summary">
                                            <!-- data table all walet -->
                                            <table id="summary" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Invoice summary</th>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-info alert">
                                                    <h5><i class="icon fas fa-exclamation-circle"></i> Pemberitahuan!</h5>
                                                    Daftar dikonfigurasi adalah bagian dari Xenshield beta. Anda dapat
                                                    menggunakan daftar ini untuk menyesuaikan bagaimana Anda berurusan
                                                    dengan penipuan. Kami akan senang mendengar umpan balik yang mungkin
                                                    Anda miliki tentang ini - chatting dengan kami melalui Xendit Dukungan
                                                    bawah atau hubungi manajer akun Anda!
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>

                                        {{-- allow tabel --}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Daftar yang diizinkan</h3>
                                                        <br>
                                                        <br>
                                                        Klik salah satu daftar ini untuk melihat atau memperbarui daftar
                                                        yang diperbolehkan.
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body table-responsive p-0">
                                                        <table class="table table-hover text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <th>Item</th>
                                                                    <th>Terakhir Diperbarui</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>John Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>219</td>
                                                                    <td>Alexander Pierce</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>657</td>
                                                                    <td>Bob Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>175</td>
                                                                    <td>Mike Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        {{-- blok tabel --}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Blok Daftar</h3>
                                                        <br>
                                                        <br>
                                                        Klik salah satu daftar ini untuk melihat atau memperbarui daftar
                                                        yang diperbolehkan.
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body table-responsive p-0">
                                                        <table class="table table-hover text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <th>Item</th>
                                                                    <th>Terakhir Diperbarui</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>John Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>219</td>
                                                                    <td>Alexander Pierce</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>657</td>
                                                                    <td>Bob Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>175</td>
                                                                    <td>Mike Doe</td>
                                                                    <td>11-7-2014</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                        <!-- /.row -->

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
            $("#summary").DataTable({
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
            $("#list").DataTable({});
        });

    </script>
@endsection
