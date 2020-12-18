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
                                <span class="info-box-text">Saldo payout Yang Tersedia</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <div class="card-tool">
                                <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                    Buat Payout
                                </button>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            Semua transaksi di bawah Rp 10.000 atau di atas Rp 50.000.000 (untuk bank selain BCA, BNI, BRI,
                            Mandiri, dan Permata) yang disetujui setelah 13:00 WIB (UTC + 7) akan dikirimkan pada hari kerja
                            berikutnya.
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-inverse" id="payouts">
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
        {{-- e:main --}}

    </div>
@endsection

@section('java')
    <script>
        $(function() {
            $("#payouts").DataTable({});
        });
    </script>

@endsection
