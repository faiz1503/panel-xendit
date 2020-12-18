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
                                    <dt><a href="#pembayaran_kartu">Pembayaran Kartu</a></dt>
                                    <br>
                                    <dt><a href="#keamanan_kartu">Keamanan Kartu dan Acceptance</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">
                        <!-- /.section pembayaran_kartu -->
                        <section id="pembayaran_kartu">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Pembayaran Kartu
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Pengaturan Merchant ID (MID).</label>
                                            <br>
                                            Pembayaran kartu Anda diatur oleh Xendit dan akan settled ke balance Xendit
                                            Anda.
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <br>
                                                <dt>
                                                    <b>Mata Uang</b>
                                                    <br>
                                                </dt>
                                                Semua pembayaran diproses dalam IDR
                                                <br><br><br>
                                                <dt>
                                                    <b>Settled ke</b>
                                                    <br>
                                                </dt>
                                                Saldo dashboard Xendit Anda.
                                                <br><br><br>
                                                <dt>
                                                    <b>Waktu Settlement</b>
                                                    <br>
                                                </dt>
                                                3 Hari
                                                <br><br><br>
                                                <dt>
                                                    <b>Skema Kartu yang bisa digunakan</b>
                                                    <br>
                                                </dt>
                                                <dt>
                                                    <img src="{{ asset('assets/images/VISA-settings.png') }}"
                                                        style='width:60px;height:60px;min-width: auto; min-height: auto;' />‏‏‎
                                                    ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎
                                                    <img src="{{ asset('assets/images/MASTERCARD-settings.png') }}"
                                                        style='width:60px;height:46.7px;min-width: auto; min-height: auto;' />‏‏‎
                                                    ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎
                                                    <img src="{{ asset('assets/images/JCB-settings.png') }}"
                                                        style='width:60px;height:60px;min-width: auto; min-height: auto;' />
                                                </dt>
                                                <br>
                                                <dt>
                                                </dt>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section pembayaran_kartu -->

                        <!-- /.section keamanan_kartu -->
                        <section id="keamanan_kartu">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Keamanan Kartu dan Acceptance
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            Fitur ini akan membantu mengatasi chargebacks, tapi akan berefek terhadap
                                            acceptance rates. <a
                                                href="https://docs.xendit.co/xenpayments/payments-credit-cards-overview/payments-credit-cards-understanding-card-declines/index.html">Pelajari
                                                lebih lanjut.</a>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <br>
                                                <dt>
                                                    <b>3DS</b>
                                                    <br>
                                                </dt>
                                                3DS is mandatory for your business. Xendit will not process card payments if
                                                3DS is not initiated and verified.
                                                <input type="checkbox" name="my-checkbox" data-toggle="toggle">
                                                <br><br><br>
                                                <dt>
                                                    <b>Dynamic 3DS</b>
                                                    <br>
                                                </dt>
                                                Dynamic 3DS dalam keadaan nonaktif untuk bisnis anda. Untuk mengoptimisasi
                                                tingkat keberhasilan kartu, biarkan Xendit menentukan jika 3DS dibutuhkan
                                                atau tidak pada setiap transaksi.
                                                    <input type="checkbox" name="my-checkbox" data-toggle="toggle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>

                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.section keamanan_kartu -->

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
