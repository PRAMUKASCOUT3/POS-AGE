{{-- <div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="/" class='sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                @if (Auth()->user()->isAdmin == 1)
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Master Data</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('pengguna.index') }}">Data Pengguna</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('supplier.index') }}">Data Supplier</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('category.index') }}">Data Kategori</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('product.index') }}">Data Produk</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Laporan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('pengguna.laporan') }}">Pengguna</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('product.report') }}">Produk</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('cashier.report') }}">Transaksi</a>
                            </li>
                        </ul>
                    </li>
                @elseif (Auth()->user()->isAdmin == 0)
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Transaksi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('expenditures.index') }}">Pengeluaran</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('cashier.index') }}">Kasir</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('cashier.riwayat') }}">Riwayat Transaksi</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div> --}}
<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth()->user()->isAdmin == 1)
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Master Data</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('pengguna.index') }}">
                                        <span class="sub-item">Data Pengguna</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('supplier.index') }}">
                                        <span class="sub-item">Data Supplier</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('category.index') }}">
                                        <span class="sub-item">Data Kategori</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product.index') }}">
                                        <span class="sub-item">Data Produk</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Laporan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('pengguna.laporan') }}">
                                        <span class="sub-item">Pengguna</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product.report') }}">
                                        <span class="sub-item">Produk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cashier.report') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Transaksi</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('expenditures.index') }}">
                                        <span class="sub-item">Pengeluaran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cashier.index') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cashier.riwayat') }}">
                                        <span class="sub-item">Riwayat Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
