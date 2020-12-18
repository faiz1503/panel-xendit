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
                                    <dt><a href="#daftar_rekening_bank">Daftar Rekening Bank</a></dt>
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
                            Sekarang Anda dapat menarik saldo Anda melalui <a href="http://127.0.0.1:8000/cash">Tab Cash.</a>
                        </div>

                        <!-- /.section daftar_rekening_bank -->
                        <section id="daftar_rekening_bank">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Daftar Rekening Bank
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            Daftar Rekening Bank
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah rekening</button>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.section daftar_rekening_bank -->

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
