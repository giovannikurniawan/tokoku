<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('kategori.index') }}">
                    <i class="fa fa-cube" aria-hidden="true"></i> <span>Kategori</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cubes" aria-hidden="true"></i> <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-id-card" aria-hidden="true"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-truck" aria-hidden="true"></i> <span>Suplier</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-money" aria-hidden="true"></i> <span>Transaksi</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-download" aria-hidden="true"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-upload" aria-hidden="true"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>Transaksi Lama</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="header">REPORT</li>
            <li>
                <a href="#">
                    <i class="fa fa-file-pdf-o" aria-hidden="true""></i> <span>Laporan</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i> <span>Pengaturan</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
