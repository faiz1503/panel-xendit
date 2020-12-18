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
                                    <dt><a href="#api_keys">API Keys</a></dt>
                                    <br>
                                    <dt><a href="#callbacks">Callbacks</a></dt>
                                    <br>
                                    <dt><a href="#ip_whitelist">IP Whitelist</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">

                        <!-- /.section api_keys -->
                        <section id="api_keys">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        API Keys
                                    </h3>

                                </div>
                                <form>
                                    <div class="card-body">
                                        <label for="example">Secret Key.</label>
                                        <br>
                                        Secret Key digunakan untuk mengotentikasi permintaan API dari server Anda.
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Key Name</th>
                                                    <th>Izin</th>
                                                    <th></th>
                                                    <th>Dibuat</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Test</b></td>
                                                    <td>Test</td>
                                                    <td></td>
                                                    <td>test</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-plus"></i>Buat Secret Key Baru</button></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </form>

                                <form>
                                    <div class="card-body">
                                        <label for="example">Public Key.</label>
                                        <br>
                                        Public keys hanya digunakan untuk tokenisasi informasi kartu pada sisi client.
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Key Name</th>
                                                    <th>Key Token</th>
                                                    <th></th>
                                                    <th>Dibuat</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Public Key ‎‎‎‎‎‎‎‎‎‎‎‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎
                                                            ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏</b></td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control rounded-0">
                                                            <span class="input-group-append">
                                                                <button type="button" class="btn btn-info btn-flat"><i
                                                                        class="fa fa-copy"></i>Salin</button>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>test</td>
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
                        <!-- /.section api_keys -->

                        <!-- /.section callbacks -->
                        <section id="callbacks">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Callbacks
                                    </h3>

                                </div>
                                <form>
                                    <div class="card-body">
                                        <label for="example">Callbacks</label>
                                        <br>
                                        Tambah callback URL disini. Untuk mengetahui cara menambah dan mengatur callback
                                        yang ada, <a href="https://docs.xendit.co/">kunjungi halaman dokumentasi.</a>
                                        <div class="card-body">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">Aktifkan mekanisme
                                                    pengiriman ulang otomatis untuk callback yang gagal</label>
                                                <br>
                                            </div>
                                            Pengiriman ulang otomatis dengan jeda eksponensial untuk callback yang gagal.
                                            Pelajari lebih lanjut <a
                                                href="https://docs.xendit.co/id/upaya-pengiriman-dan-pengiriman-ulang/index.html">disini</a>
                                        </div>
                                        <div class="card-body">
                                            <label for="token">Token verifikasi callback</label>
                                            <br>
                                            Dikirim bersama dengan setiap callback, gunakan token untuk memastikan token
                                            berasal dari server kami.
                                        </div>
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
                                                    <td><b>Token Verifikasi</b></td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control rounded-0">
                                                            <span class="input-group-append">
                                                                <button type="button" class="btn btn-info btn-flat"><i
                                                                        class="fa fa-copy"></i>Salin</button>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </form>

                                <form>
                                    <div class="card-body">
                                        <label for="example">URL Callback</label>
                                        <br>
                                        Tes callback URLs Anda dan cek status dari respon callback.

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Produk</th>
                                                    <th>URL Callback</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="text-primary">FIXED VIRTUAL ACCOUNT</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>FVA terbayarkan</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>
                                                <tr>
                                                    <td>FVA dibuat dan diperbaharui</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">DISBURSEMENTS</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Disbursement terkirim</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Batch disbursement terkirim</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">OUTLET RETAIL</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Retail outlet terbayarkan</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">E-WALLET</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>OVO terbayarkan</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Shopeepay</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">DIRECT DEBIT</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembayaran selesai</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Hampir / Telah Kedaluawarsa</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">INVOICES</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Invoices terbayarkan</td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Berikan saya
                                                                callback jika invoice telah kadaluwarsa</label>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p class="text-primary">XENPLATFORM</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Akun diperbaharui
                                                    </td>
                                                    <td><input type="text" class="form-control rounded-0"></td>
                                                    <td><button type="submit" class="btn btn-primary">Tes dan
                                                            Simpan</button></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </form>

                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section callbacks -->

                        <!-- /.section ip_whitelist -->
                        <section id="ip_whitelist">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        IP Whitelists
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            Whitelist IP hanya bekerja ketika Anda sudah terintegrasi
                                            langsung dengan API kami dan bukan melalui plugin seperti Shopify atau
                                            WooCommerce. <a
                                                href="https://docs.xendit.co/id/integrations/index.html">Pelajari lebih
                                                lanjut disini.</a>
                                            <br>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                                            Alamat IP</button>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Alamat IP</th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>103.xxx.245.xx</td>
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
                        <!-- /.section ip_whitelist -->

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
