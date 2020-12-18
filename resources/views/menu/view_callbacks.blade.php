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
                    <div class="col-md-12">
                        <div class="alert alert-info alert">
                            <i class="icon fas fa-bell"></i>
                            Event yang gagal akan dikirimkan ulang secara otomatis. Pelajari lebih lanjut mengenai kebijakan pengiriman ulang <a
                                href="https://docs.xendit.co/api-integration/callback/delivery-attempts-and-retries/">disini</a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-inverse" id="callbacks">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Status</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>ID Produk</th>
                                            <th>Tipe Produk</th>
                                            <th>Pengiriman Selanjutnya</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>ID Produk</th>
                                            <th>Tipe Produk</th>
                                            <th>Pengiriman Selanjutnya</th>
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
            $("#callbacks").DataTable({});
        });

    </script>
@endsection
