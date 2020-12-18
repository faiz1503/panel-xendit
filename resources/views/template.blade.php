@extends('_partials.layout')
@section('title', $title)
@section('head')
@endsection

@section('body')
<div class="content-wrapper">

    {{-- s:header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $title }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- e:header --}}

    {{-- s:main --}}
    <div class="content">
        <div class="container-fluid">

            {{-- s:konten --}}
            <div class="row justify-content-center">
                <div class="col-12">

                    {{-- s:card --}}
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title pt-2">
                                <b>{{ $title }}</b>
                            </h3>
                        </div>

                        <div class="card-body">

                        </div>

                        <div class="card-footer">

                        </div>

                    </div>
                    {{-- e:card --}}

                </div>
            </div>
            {{-- e:konten --}}

        </div>
    </div>
    {{-- e:main --}}
</div>
@endsection

@section('include')

@endsection

@section('java')
<script></script>
@endsection
