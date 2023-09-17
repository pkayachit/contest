

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">{{ Auth::user()->name }}</a>
</div>
</div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Admin Manager
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('users.index') }}"
            class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <p>Users</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('countries.index') }}"
                class="nav-link {{ Request::is('countries*') ? 'active' : '' }}">
                    <p>Countries</p>
                </a>
            </li>


        </ul>
        </li>
        <li class="nav-item">
        <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            My Profile
            <span class="right badge badge-danger">View</span>
            </p>
        </a>
        </li>

    </ul>
    </nav>
    <!-- /.sidebar-menu -->
{{-- <li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Contests</p>
    </a>
</li> --}}




