<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('/') }}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">
            {{ env('APP_NAME') }}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.18/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('profil/data') }}" class="d-block">
                    {{ Auth::user()->name }}
                    <br>
                    {{ Auth::user()->type }}
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>BERANDA</p>
                    </a>
                </li>

                <li class="nav-header">REKENING DAN SALDO</li>
                <li class="nav-item">
                    <a href="{{ url('/all_account') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Semua Rekening</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/cash') }}" class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>Saldo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/pending') }}" class="nav-link">
                        <i class="nav-icon fas fa-undo-alt"></i>
                        <p>Pending</p>
                    </a>
                </li>

                <li class="nav-header">PEMBAYARAN</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Terima Pembayaran
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Kartu Kredit / Debit
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/credit_cards/transactions') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Transaksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/credit_cards/fraud_prevention') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Fraud Prevention</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/credit_cards/promotions') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Promotions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/fixed_virtual_accounts') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Virtual Accounts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/ewallets') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>eWallets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/retail_outlets') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Retail Outlets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/invoices') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/on_demand') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>On Demand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reccuring') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reccuring</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Kirim Pembayaran
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/disbursements') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disbursements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/batch_disbursements') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Batch Disbursements </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/payouts') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payouts</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ url('/callbacks') }}" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>Callbacks</p>
                    </a>
                </li>

                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ url('/settings') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
