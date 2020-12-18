<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-question-circle"></i>
                Bantuan
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <b>Docs</b>
                </a>
                <a href="#" class="dropdown-item">
                    <b>API Reference</b>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <b>Berikan Saran Anda</b>
                </a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-globe"></i>
                Bahasa
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <b>English</b>
                </a>
                <a href="#" class="dropdown-item">
                    <b>Bahasa Indonesia</b>
                </a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <b class="mt-2">
                    {{ strtoupper(Auth::user()->firstname . ' ' . Auth::user()->lastname) }}
                </b>&nbsp;
                <img src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.18/img/user2-160x160.jpg"
                    class="img-circle" style="max-height: 20px;" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user    "></i>
                    <b>PROFIL</b>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt    "></i>
                    <b>KELUAR</b>
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
