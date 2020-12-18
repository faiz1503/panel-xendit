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
                                    <dt><a href="#tim">Anggota Tim</a></dt>
                                    <br>
                                    <dt><a href="#penerima_email">Penerima Email</a></dt>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                    <div class="col-md-10">
                        <!-- /.section tim -->
                        <section id="tim">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Anggota Tim
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Tambah atau hapus anggota pada bisnis Xendit anda dan ubah
                                                pengaturan izin akses untuk setiap anggota.</label>
                                            <br>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                                            Anggota</button>
                                        <div class="card"></div>
                                        <table class="table table-striped table-inverse" id="tabel_tim">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th>Anggota tim</th>
                                                    <th>Status</th>
                                                    <th>Izin Akses</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Anggota tim</th>
                                                    <th>Status</th>
                                                    <th>Izin Akses</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section tim -->

                        <!-- /.section penerima_email -->
                        <section id="penerima_email">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Penerima Email
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example">Tambah penerima yang seharusnya menerima email dari Xendit
                                                dan buat perubahan untuk langganan laporan email.</label>
                                            <br>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                                            Penerima</button>
                                        {{-- <div class="form-group">
                                            <label for="nama_bisnis">Nama Lengkap</label>
                                            <input type="email" class="form-control" id="nama_bisnis">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_bisnis">Email Kantor</label>
                                            <input type="email" class="form-control" id="alamat_bisnis">
                                        </div> --}}
                                    </div>
                                    <!-- /.card-body -->
                                </form>

                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.section penerima_email -->

                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')
    <script>
        $(function() {
            $("#tabel_tim").DataTable({});
        });

    </script>

@endsection
