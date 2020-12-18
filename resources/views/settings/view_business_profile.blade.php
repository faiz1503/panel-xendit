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
                                    <dt><a href="#bisnis">Bisnis Anda</a></dt>
                                    <br>
                                    <dt><a href="#profil">Profil Anda</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">
                        <!-- /.section deskripsi_disbursement -->
                        <section id="deskripsi_disbursement">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Bisnis Anda
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Informasi bisnis.</label>
                                            <br>
                                            This information helps customers recognize your business, and may appear in your
                                            payment statements, invoices, and receipts.
                                            <input type="text" class="form-control" id="example">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_bisnis">Nama Bisnis</label>
                                            <input type="email" class="form-control" id="nama_bisnis">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_bisnis">Alamat Bisnis</label>
                                            <input type="email" class="form-control" id="alamat_bisnis">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section bisnis -->

                        <!-- /.section profil -->
                        <section id="transfer_disbursement">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Profil Anda
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Informasi personal.</label>
                                            <br>
                                            Informasi ini membantu identifikasi sehingga orang lain di tim Anda dapat
                                            mengenali Anda dengan mudah.
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_bisnis">Nama Lengkap</label>
                                            <input type="email" class="form-control" id="nama_bisnis">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_bisnis">Email Kantor</label>
                                            <input type="email" class="form-control" id="alamat_bisnis">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>

                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Pengaturan mobile.</label>
                                            <br>
                                            Daftarkan nomor telepon Anda untuk menambah keamanan akun Anda.
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <select class="form-control">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                      </select>
                                                </div>
                                                <div class="col-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>

                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Ubah kata sandi.</label>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_lama">Kata sandi sekarang</label>
                                            <input type="password" class="form-control" id="password_lama">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_baru">Kata sandi baru</label>
                                            <input type="password" class="form-control" id="password_baru">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>

                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Pengamanan tambahan.</label>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_lama">Pin</label><br>
                                            Wajib diaktifkan untuk melakukan batch disbursement dan refund credit card
                                            <button type="submit" class="btn btn-primary">Buat PIN</button>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_baru">Otentikasi 2 Langkah</label><br>
                                            Pengamanan tambahan selain kata sandi
                                            <button type="submit" class="btn btn-primary">Aktifkan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.section profil -->

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
