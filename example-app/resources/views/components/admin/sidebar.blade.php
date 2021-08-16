        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.redirect') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.redirect') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Панель администратора</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item @if (request()->routeIs('.adminnews.*')) active @endif">
                <a class="nav-link" href="{{ route('.adminnews.index')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Новости</span>
                </a>
            </li>
            <li class="nav-item @if (request()->routeIs('.admincategories.*')) active @endif">
                <a class="nav-link" href="{{ route('.admincategories.index') }}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Категории</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>