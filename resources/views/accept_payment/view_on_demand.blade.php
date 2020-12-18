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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- button tambah data --}}
                                <div class="card-tools">
                                    <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                        <i class="fa fa-hand-holding-usd"></i> Buat Tautan Donasi
                                    </button>
                                    <button onclick='location.href="/mitra/driver/tambah";' class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Buat On Demand
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse" id="on_demand">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Status</th>
                                            <th>Date Created</th>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Reference</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>No Hp</th>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Reference</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
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
            $("#on_demand").DataTable({});
        });

</script>
@endsection
