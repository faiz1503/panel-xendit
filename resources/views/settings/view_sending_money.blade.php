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
                                    <dt><a href="#deskripsi_disbursement">Deskrispi Disbursement Standar</a></dt>
                                    <br>
                                    <dt><a href="#transfer_disbursement">Template Email Bukti Transfer Disbursement</a></dt>
                                    <br>
                                    <dt><a href="#tb_disbursement">Template Email Bukti Transfer Batch Disbursement</a></dt>
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
                            Disbursement Anda belum aktif.
                            <div class="card-tool">
                                <button type="button" class="btn btn-primary">Aktifkan</button>
                            </div>
                        </div>

                        <!-- /.section deskripsi_disbursement -->
                        <section id="deskripsi_disbursement">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Deskripsi Disbursement Standar
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Atur standar deskripsi untuk semua disbursement
                                                Anda. Anda juga dapat mengaturnya dalam setiap request API.</label>
                                            <input type="text" class="form-control" id="example">
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
                        <!-- /.section deskripsi_disbursement -->

                        <!-- /.section transfer_disbursement -->
                        <section id="transfer_disbursement">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Template Email Bukti Transfer Disbursement
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        Sunting email pengirim dan catatan kaki email batch disbursement Anda.
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="example1">Email Pengirim.</label>
                                                <input type="text" class="form-control" id="example1">
                                            </div>
                                            <div class="col-2">
                                                {{-- <input type="text" class="form-control"
                                                    placeholder=".col-4"> --}}
                                            </div>
                                            <div class="col-5">
                                                <label for="example2">Catatan Kaki Email.</label>
                                                <input type="text" class="form-control" id="example2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Tinjau
                                        <br>
                                        <img src="https://via.placeholder.com/350" />
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.section transfer_disbursement -->

                        <!-- /.section tb_disbursement -->
                        <section id="tb_disbursement">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Template Email Bukti Transfer Batch Disbursement
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        Sunting email pengirim dan catatan kaki email batch disbursement Anda.
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="example1">Email Pengirim.</label>
                                                <input type="text" class="form-control" id="example1">
                                            </div>
                                            <div class="col-2">
                                                {{-- <input type="text" class="form-control"
                                                    placeholder=".col-4"> --}}
                                            </div>
                                            <div class="col-5">
                                                <label for="example2">Catatan Kaki Email.</label>
                                                <input type="text" class="form-control" id="example2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Tinjau
                                        <br>
                                        <img src="https://via.placeholder.com/350" />
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section tb_disbursement -->

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
