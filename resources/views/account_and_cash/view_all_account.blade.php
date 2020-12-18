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
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="info-box shadow-none" style="text-align: center;">
                            <span class="info-box-icon bg-primary"><i class="fas fa-money-check-alt" style="text-align: center;" ></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Saldo</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="info-box shadow-none" style="text-align: center;">
                            <span class="info-box-icon bg-success"><i class="fas fa-undo"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Tertunda</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="info-box shadow-none" style="text-align: center;">
                            <span class="info-box-icon bg-warning"><i class="fas fa-coins"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Akun Tunai</span>
                                <span class="info-box-number">IDR xxx</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
            </div>
        </div>
        {{-- e:main --}}

    </div>
@endsection

@section('java')

@endsection
