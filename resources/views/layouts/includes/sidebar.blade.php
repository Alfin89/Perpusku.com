<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ url('dashboard') }}"><img src="{{ asset('assets/img/icons/dashboard.svg')}}" alt="img" /><span>
                            Dashboard</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg') }}" alt="img" /><span>
                            Kategori</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li >
                            <a href="{{ url('category') }}">Daftar Kategori</a>
                        </li>
                        <li>
                            <a href="{{ url('category/create ') }}">Tambah Kategori</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img" /><span>
                            Buku-buku</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="{{ url('book') }}">Daftar Buku</a>
                        </li>
                        <li><a href="{{ url('book/create') }}">Tambah Buku</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img" /><span>
                            People</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="userlist.html">User List</a>
                        </li>
                        <li><a href="adduser.html">Add User</a></li>
                        <li>
                            <a href="storelist.html">Store List</a>
                        </li>
                        <li>
                            <a href="addstore.html">Add Store</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg') }}" alt="img" /><span>
                            Settings</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="generalsettings.html">General Settings</a>
                        </li>
                        <li>
                            <a href="emailsettings.html">Email Settings</a>
                        </li>
                        <li>
                            <a href="paymentsettings.html">Payment Settings</a>
                        </li>
                        <li>
                            <a href="currencysettings.html">Currency Settings</a>
                        </li>
                        <li>
                            <a href="grouppermissions.html">Group Permissions</a>
                        </li>
                        <li>
                            <a href="taxrates.html">Tax Rates</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>