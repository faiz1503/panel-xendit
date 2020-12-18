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

                    <style>
                        html {
                            scroll-behavior: smooth;
                        }

                    </style>

                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <dl>
                                    <dt><a href="#biaya_belum_bayar">Biaya yang Belum Dibayar</a></dt>
                                    <br>
                                    <dt><a href="#bukti_tagihan">Bukti Tagihan</a></dt>
                                    <br>
                                    <dt><a href="#struktur_biaya">Struktur Biaya</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">

                        <div class="alert alert-info alert">
                            <h3>Biaya yang belum dibayar</h3>
                            <div class="card-tool">
                                <h1>IDR xxx</h1>
                            </div>
                        </div>

                        <!-- /.section biaya_belum_bayar -->
                        <section id="biaya_belum_bayar">
                            <div class="card">
                                <form>
                                    <div class="card-body">
                                        <label for="example">Biaya terutang sudah termasuk tagihan terbaru dan juga faktur
                                            yang belum dibayar.</label>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section biaya_belum_bayar -->

                        <!-- /.section bukti_tagihan -->
                        <section id="bukti_tagihan">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Bukti Tagihan
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <!-- /.card-body -->
                                    <div class="card-body">
                                        <p style="text-align:center;">
                                            <img src="https://via.placeholder.com/350" />
                                            <br>
                                            <b>Belum ada tagihan</b>
                                            <br>
                                            Sepertinya Anda tidak memiliki tagihan apa pun. Anda beruntung!
                                            <br>
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.section bukti_tagihan -->

                        <!-- /.section struktur_biaya -->
                        <section id="struktur_biaya">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Struktur Biaya
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        Berikut ini adalah biaya per transaksi Anda dalam rupiah (Rp) dan tidak termasuk
                                        pajak (10% dari biaya).
                                        <br>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Virtual Account</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Semua Transaksi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>4.500</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Disbursements</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Semua Transaksi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>5.000</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Retail Outlets</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Semua Transaksi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>5.000</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Credit Cards</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Semua Transaksi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Kredit dan Debit</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>2.000 + 2.90%</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><b>eWallets</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Semua Transaksi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>OVO</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>1.50%</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>DANA</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>1.50%</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>LINKAJA</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>1.50%</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section struktur_biaya -->

                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')

@endsection
