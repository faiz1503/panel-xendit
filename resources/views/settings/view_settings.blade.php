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

                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-money-check-alt"></i>
                                    Terima Uang
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="{{ url('settings/payment_methods') }}">Metode Pembayaran</a></dt>
                                    <dd>Aktivasi dan konfigurasi transfer bank,
                                        kartu, e-wallet dan metode pembayaran lain.</dd>
                                    <br>
                                    <dt><a href="#">Invoices</a></dt>
                                    <dd>Konfigurasi tampilan xenInvoice,
                                        metode pembayaran yang tersedia, dan notifikasi invoice.</dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-money-check"></i>
                                    Mengirim Uang
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/sending_money">Pengiriman</a></dt>
                                    <dd>Aktifkan dan konfigurasikan xenDisburse untuk bisnis anda.</dd>
                                    <br>
                                    <dt><a href="/settings/sending_money">Notifikasi Pengiriman</a></dt>
                                    <dd>Atur agar penerima tahu tentang pengiriman yang Anda kirim.</dd>
                                    <br>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-briefcase"></i>
                                    Bisnis dan Profil Anda
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/business_profile">Bisnis Anda</a></dt>
                                    <dd>Unggah logo dan informasi kontak Anda.</dd>
                                    <br>
                                    <dt><a href="/settings/business_profile">Profil Anda</a></dt>
                                    <dd>Perbaharui nama, nomor telepon, dan pengaturan keamanan Anda.</dd>
                                    <br>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-users"></i>
                                    Tim Anda
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/team">Anggota Tim</a></dt>
                                    <dd>Tambah dan hapus pengguna dari bisnis Xendit Anda.</dd>
                                    <br>
                                    <dt><a href="/settings/team">Email Penerima</a></dt>
                                    <dd>Tambah penerima laporan harian, laporan callbacks, atau informasi tagihan.</dd>
                                    <br>
                                    <br>
                                    <br>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-credit-card"></i>
                                    Tagihan dan Biaya
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/billings">Biaya Yang Belum Dibayar</a></dt>
                                    <dd>Lihat biaya belum terbayarkan Anda dan lakukan pembayaran.</dd>
                                    <br>
                                    <dt><a href="/settings/billings">Laporan Tagihan</a></dt>
                                    <dd>Unduh laporan bulanan Anda.</dd>
                                    <br>
                                    <dt><a href="/settings/billings">Struktur Biaya</a></dt>
                                    <dd>Lihat struktur biaya pada berbagai produk.</dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-users-cog"></i>
                                    Developer
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/developers">API Keys</a></dt>
                                    <dd>Lihat dan kelola API keys Anda.</dd>
                                    <br>
                                    <dt><a href="/settings/developers">Callbacks</a></dt>
                                    <dd>Atur dan ubah callback URL Anda.</dd>
                                    <br>
                                    <dt><a href="/settings/developers">Whitelist IP</a></dt>
                                    <dd>Otorisasi alamat IP untuk membuat permintaan API.</dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-users-cog"></i>
                                    Penarikan
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt><a href="/settings/withdrawals">Akun Bank</a></dt>
                                    <dd>Tambah atau hapus akun bank untuk penarikan.</dd>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-4">
                    </div>

                    <div class="col-4">
                    </div>

                </div>
            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')

@endsection
