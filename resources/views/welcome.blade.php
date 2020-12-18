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

                <div class="col-lg-3 col-12">
                    <div class="small-box bg-success">
                        <div class="inner text-center">
                            <h3></h3>
                            <p class="font-weight-bold">Wallet</p>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="small-box bg-danger">
                        <div class="inner text-center">
                            <h3></h3>
                            <p class="font-weight-bold">Voucher</p>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner text-center">
                            <h3></h3>
                            <p class="font-weight-bold">Pasif</p>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="small-box bg-info">
                        <div class="inner text-center">
                            <h3></h3>
                            <p class="font-weight-bold">Deposit</p>
                        </div>
                        <a href="#"
                            class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- e:main --}}

</div>
@endsection

@section('java')

@endsection
