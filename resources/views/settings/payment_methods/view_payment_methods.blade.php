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
                                    <dt><a href="#virtual_accounts">Virtual Accounts</a></dt>
                                    <br>
                                    <dt><a href="#retail_outlets">Retail Outlets</a></dt>
                                    <br>
                                    <dt><a href="#ewallets">eWallets</a></dt>
                                    <br>
                                    <dt><a href="#kartu">Kartu</a></dt>
                                    <br>
                                    <dt><a href="#qrcodes">QR Codes</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">

                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i>Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata, <a href="#">aktivasi akun
                                Anda terlebih
                                dahulu!</a>
                            Metode pembayaran yang ada dibawah ini tetap dapat digunakan di mode tes.
                        </div>

                        <!-- /.section virtual accounts -->
                        <section id="virtual_accounts">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Virtual Accounts
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        BRI
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/bri-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#bri">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Mandiri
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/mandiri-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal"
                                                                    data-target="#mandiri">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        BNI
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/bni-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#bni">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Permata
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/permata-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal"
                                                                    data-target="#permata">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        BCA
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/bca-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#bca">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        BSS
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/bss-logo.png') }}"
                                                                    style='width:143px;height:34px;' />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#bss">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section virtual account -->

                        <!-- /.section retail outlets -->
                        <section id="retail_outlets">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Retail Outlets
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Alfamart
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/alfamart-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal"
                                                                    data-target="#alfamart">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Indomaret
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img
                                                                    src="{{ asset('assets/images/indomaret-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal"
                                                                    data-target="#indomaret">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section retail outlets -->

                        <!-- /.section ewallets -->
                        <section id="ewallets">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        eWallets
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        OVO
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/ovo-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#ovo">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        DANA
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/dana-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#dana">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        LINKAJA
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/linkaja-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal"
                                                                    data-target="#linkaja">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section ewallets -->

                        <!-- /.section qrcodes -->
                        <section id="kartu">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Kartu
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">

                                                        Visa, Master Card, JCB
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/VISA-settings.png') }}"
                                                                    style='width:110px;height:110px;min-width: auto; min-height: auto;' />
                                                                <img src="{{ asset('assets/images/MASTERCARD-settings.png') }}"
                                                                    style='width:110px;height:110px;min-width: auto; min-height: auto;' />
                                                                <img src="{{ asset('assets/images/JCB-settings.png') }}"
                                                                    style='width:110px;height:110px;min-width: auto; min-height: auto;' />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    type="button" onclick='location.href="/settings/payment_methods/card_configuration";'>Settings</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section kartu -->

                        <!-- /.section qrcodes -->
                        <section id="qrcodes">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        QR Codes
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        QRIS
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <dl>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <img src="{{ asset('assets/images/qris-logo.svg') }}" />
                                                            </p>
                                                        </dt>
                                                        <br>
                                                        <dt>
                                                            <p style="text-align:center;">
                                                                <button class="btn btn-block btn-default"
                                                                    data-toggle="modal" data-target="#qris">Tes</button></a>
                                                            </p>
                                                        </dt>
                                                    </dl>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section qrcodes -->

                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        {{-- e:main --}}

        {{-- begin modal vritual account --}}
        {{-- modal bri --}}
        <div class="modal fade" id="bri">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">BRI Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/bri-logo.svg') }}" /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 26215 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 26215 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal bri --}}

        {{-- modal mandiri --}}
        <div class="modal fade" id="mandiri">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Mandiri Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/mandiri-logo.svg') }}" /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 88608 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 88608 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal mandiri --}}

        {{-- modal bni --}}
        <div class="modal fade" id="bni">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">BNI Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/bni-logo.svg') }}" /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 8808 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 8808 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal bni --}}

        {{-- modal permata --}}
        <div class="modal fade" id="permata">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Permata Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/permata-logo.svg') }}" /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 8214 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 8214 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal permata --}}

        {{-- modal bca --}}
        <div class="modal fade" id="bca">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">BCA Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/bca-logo.svg') }}" /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 10766 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 10766 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal bca --}}

        {{-- modal bss --}}
        <div class="modal fade" id="bss">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">BSS Virtual Accounts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="#">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/bss-logo.png') }}" style='width:143px;height:34px;' /></p>
                        <p><b>Range fixed virtual account</b></p>
                        <p>26215 9999000001 - 40102 9999999999</p>
                        <p><b>Range invoice virtual account</b></p>
                        <p>26215 10000000 - 40102 99999999</p>
                        <p><b>Penyelesaian ke</b></p>
                        <p>Saldo dasbor</p>
                        <p><b>Waktu penyelesaian</b></p>
                        <p>Instan</p>
                        <br>
                        <p>Pelajari lebih lanjut mengenai
                            <a href="https://docs.xendit.co/id/xenpayments/virtual-account/feature-list">
                                fixed virtual accounts
                            </a>
                            dan
                            <a href="https://docs.xendit.co/id/xeninvoice/">invoice virtual accounts
                            </a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal bss --}}
        {{-- end modal virtual accounts --}}

        {{-- begin modal retail outlets --}}
        {{-- modal alfamart --}}
        <div class="modal fade" id="alfamart">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil Alfamart</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/alfamart-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran alfamart dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/xenpayments/retail-outlet/testing/">Pelajari lebih
                                disini.</a></p>
                        <p><b>Prefix fixed payment code</b></p>
                        <p>TEST</p>
                        <p><b>Prefix invoice payment code</b></p>
                        <p>TEST</p>
                        <br>
                        <p>Prefix ini akan muncul pada bukti pembayaran yang diterima pelanggan Anda saat melakukan
                            pembayaran di gerai Retail. Anda dapat mengatur prefix saat mengaktifkan alfamart.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal alfamart --}}

        {{-- modal indomaret --}}
        <div class="modal fade" id="indomaret">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil Indomaret</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/indomaret-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran indomaret dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/xenpayments/retail-outlet/testing/">Pelajari lebih
                                disini.</a></p>
                        <p><b>Prefix fixed payment code</b></p>
                        <p>TEST</p>
                        <p><b>Prefix invoice payment code</b></p>
                        <p>TEST</p>
                        <br>
                        <p>Prefix ini akan muncul pada bukti pembayaran yang diterima pelanggan Anda saat melakukan
                            pembayaran di gerai Retail. Anda dapat mengatur prefix saat mengaktifkan indomaret.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal indomaret --}}
        {{-- end modal retail outlets --}}

        {{-- begin modal ewallets --}}
        {{-- modal ovo --}}
        <div class="modal fade" id="ovo">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil OVO</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/ovo-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran indomaret dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/xenpayments/ewallet/percobaan/">Pelajari lebih disini.</a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal dana --}}

        {{-- modal dana --}}
        <div class="modal fade" id="dana">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil DANA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/dana-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran indomaret dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/xenpayments/ewallet/percobaan/">Pelajari lebih disini.</a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal dana --}}

        {{-- modal linkaja --}}
        <div class="modal fade" id="linkaja">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil LINKAJA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/linkaja-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran indomaret dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/xenpayments/ewallet/percobaan/">Pelajari lebih disini.</a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal linkaja --}}
        {{-- end modal ewallets --}}

        {{-- begin modal qr codes --}}
        {{-- modal qris --}}
        <div class="modal fade" id="qris">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detil QRIS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="alert alert-info alert">
                            <h5><i class="icon fas fa-bell"></i> Pemberitahuan!</h5>
                            <b>Akun Anda belum aktif. </b>Untuk melakukan pembayaran secara nyata,
                            <a href="https://dashboard.xendit.co/activation">aktivasi akun Anda terlebih dahulu!</a>
                        </div>
                        </p>
                        <p><img src="{{ asset('assets/images/qris-logo.svg') }}" /></p>
                        <p>Anda dapat mencoba pembayaran indomaret dengan mengirimkan permintaan API ke gerai Retail kami
                            atau API Invoice dengan key development Anda. <a
                                href="https://docs.xendit.co/id/qr-codes/">Pelajari lebih disini.</a>
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- end modal dana --}}


    </div>
@endsection

@section('java')

@endsection
