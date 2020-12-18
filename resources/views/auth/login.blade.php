@extends('_partials.layout_login')
@section('title', $title)
@section('head')
@endsection

@section('body')
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body" style="border-radius: 20px">

        <h4 class="mb-3 text-center">Masuk</h4>

        @if (session('pass'))
            <div class="callout callout-danger">
                {{ session('pass') }}
            </div>
        @endif

        {!! Form::open(['url' => 'login', 'method' => 'post']) !!}

        <div class="input-group mb-3">
            {!! Form::email('email', '', [
                'class' => 'form-control',
                'placeholder' => 'Email',
                'autofocus' => 'autofocus'
            ]) !!}
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <div class="callout callout-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="input-group mb-3">
            {!! Form::password('password', [
                'class' => 'form-control',
                'placeholder' => 'Password'
            ]) !!}
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        {{-- e:password --}}
        @error('password')
            <div class="callout callout-danger">
                {{ $message }}
            </div>
        @enderror
        {{-- s:password --}}

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    <b>Masuk</b>
                </button>
                <hr>
            </div>
            <div class="col-12 mb-3">
                <a href="{{ url('register') }}"
                class="btn btn-outline-primary btn-block">Daftar Sekarang</a>
            </div>
        </div>

        {!! Form::close() !!}

        <p class="mb-3">
            <a href="{{ url('forgot') }}">Saya lupa sandi !</a>
        </p>

        </div>
    </div>
</div>
@endsection

@section('java')
@endsection
